<?php
$name = $_GET['name'];
$profileid = $_GET['profileid']; 
$gender= $_GET['gender'];
$type= $_GET['type'];

function selectImage($type){
	
	if($type == "1") {
		$randomChoose = mt_rand(1,27);
		return __DIR__ . '/..'.'/baba_post/fbpic'.$randomChoose.'.gif';	
	}else if($type == "2"){
		$randomChoose = mt_rand(1,13);	
		return __DIR__ . '/..'.'/pooja_post/fbpic'.$randomChoose.'.gif';	
	}else{
		return;
	}
}


function writeNameOnImage($name,$profile_id,$gender,$type){
	$image = imagecreatefromgif(selectImage($type));
	imagealphablending($image, true);
	$red;
	if( $type == "1") {
			$color = imagecolorexact($image, 0,0, 0);
	}else {
		$color = imagecolorexact($image, 255,255, 255);
	}

	imagefttext($image, 36, 0, 30, 100, $color, __DIR__ . '/..'.'/fonts/tahomabd.ttf', 
	setNamePrefix($gender,$type).' '.$name.',');
	$unique_key = $profile_id.''.mt_rand();
	$webfilename = 'image_post/type/'.$type.'/fb_pic'.$unique_key.'.gif';
	$filename = __DIR__ . '/..'.'/'.$webfilename;
	if(ImageGif($image, $filename)){
		imagedestroy($image);	
		return $webfilename;
	}
	return "error";
	
}

function setNamePrefix($gender,$type){
	if($type == "2") {
		return "Baby";
	}else {
		if($gender == "male"){
			return "Rajkumar ";
		}else {
			return "Devi ";	
		}	
	}

		
}

echo writeNameOnImage($name,$profileid,$gender,$type);

?>
