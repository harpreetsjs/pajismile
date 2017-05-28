<?php
$name = $_GET['name'];
$profileid = $_GET['profileid']; 
$gender= $_GET['gender'];

function selectImage(){
	$randomChoose = mt_rand(1,27);
	return __DIR__ . '/..'.'/baba_post/fbpic'.$randomChoose.'.gif';	
}


function writeNameOnImage($name,$profile_id,$gender){
	$image = imagecreatefromgif(selectImage());
	imagealphablending($image, true);
	$red = imagecolorallocate($image, 0,0, 0);
	imagefttext($image, 36, 0, 30, 100, $red, __DIR__ . '/..'.'/fonts/tahomabd.ttf', setNamePrefix($gender).' '.$name.',');
	$unique_key = $profile_id.''.mt_rand();
	$webfilename = 'image_post/fb_pic'.$unique_key.'.gif';
	$filename = __DIR__ . '/..'.'/'.$webfilename;
	if(ImageGif($image, $filename)){
		imagedestroy($image);	
		return $webfilename;
	}
	return "error";
	
}

function setNamePrefix($gender){
	if($gender == "male"){
		return "Rajkumar ";
	}
	return "Devi ";	
}

echo writeNameOnImage($name,$profileid,$gender);

?>
