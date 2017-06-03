<?php

header('Content-type: application/json');
$jsonArray  = json_decode(file_get_contents('php://input'),true);  
$profileUrl =  $jsonArray['picture']['data']['url'];
$profileId = $jsonArray['id'];
$gender = $jsonArray['gender'];
$name = $jsonArray['first_name'];
$type = $jsonArray['type'];

function getFoodItem(){
	$foodArray = array('Anda Bhurji','Chole Kulche','Bhalla Papdi','Bhel Puri','Pakoda','Chole Bhature','Daal Vada','Dahi puri','Dosa','Mendu Vada','Misal Pav','Paratha','Poha','Samosa','Vada Pav');
	$num = mt_rand(0,sizeof($foodArray)-1);

	return array('imageNum' => $num,'foodName' => $foodArray[$num] );
}


function setNamePostfix($gender){
	if($gender == "male"){
		return "Wala";
	}
	return "Wali ";	
}

function getState(){
	$arrayName = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming" );
	$num = mt_rand(0,sizeof($arrayName)-1);
	return 	$arrayName[$num];	
}

function getMessage($name,$gender,$foodName,$state){
	return "Hi $name,\nYou will be famous as $name $foodName ".setNamePostfix($gender).",\nOnly if you start $foodName business in\n$state, USA. All the very best!";
}



function setPostImage($profileUrl,$profileId,$gender,$name){
	$results;
	$recImg = file_get_contents($profileUrl);  //image 321 x 400
	$foodItemArray = getFoodItem();
	$profileImage = __DIR__ . '/..'.'/profile_holder/'.$profileId.'.jpg';
	file_put_contents($profileImage, $recImg);
	$photo_to_paste = $profileImage;
	$state =  getState();
	$white_image=__DIR__ . '/..'.'/foodie_pics/'.$foodItemArray['imageNum'].'.jpg'; //873 x 622 

	$im = imagecreatefromjpeg($white_image);
	imagealphablending($im, true);
	$red = imagecolorallocate($im, 255,255,255);
	imagefttext($im, 12, 0, 135, 180, $red, __DIR__ . '/..'.'/fonts/tahomabd.ttf', getMessage($name,$gender,$foodItemArray['foodName'],$state));

	$condicion = GetImageSize($photo_to_paste); // image format?

	if($condicion[2] == 1) //gif
	$im2 = imagecreatefromgif("$photo_to_paste");
	if($condicion[2] == 2) //jpg
	$im2 = imagecreatefromjpeg("$photo_to_paste");
	if($condicion[2] == 3) //png
	$im2 = imagecreatefrompng("$photo_to_paste");

	imagecopy($im, $im2, 300,50, 0, 0, imagesx($im2), imagesy($im2));
	$returnUrl = 'foodie_post/'.$profileId.''.mt_rand().'.jpg';
	$postImagePath = __DIR__ . '/..'.'/'.$returnUrl;
	if(imagejpeg($im,$postImagePath,90)){
		$results = array('imgUrl' => $returnUrl);
		imagedestroy($im);
		imagedestroy($im2);		
		return json_encode($results);
	}else{
		return 'error';
	}

}


function getLuckyFriendMsg($name) {
	$percentLuck = mt_rand(80,100);
	return $name.", you are ".$percentLuck."% lucky for your friends!";
}


function setupImageForLuckyFriends($profileUrl,$profileId,$gender,$name) {
	$recImg = file_get_contents($profileUrl);  //image 321 x 400
	$profileImage = __DIR__ . '/..'.'/profile_holder/'.$profileId.'.jpg';
	file_put_contents($profileImage, $recImg);
	$photo_to_paste = $profileImage;
	$white_image=__DIR__ . '/..'.'/images/luckfirendmain.jpg'; //

	$im = imagecreatefromjpeg($white_image);
	imagealphablending($im, true);
	$red = imagecolorallocate($im, 255,255,255);
	imagefttext($im, 18, 0, 80, 270, $red, __DIR__ . '/..'.'/fonts/tahomabd.ttf', getLuckyFriendMsg($name));

	$condicion = GetImageSize($photo_to_paste); // image format?

	if($condicion[2] == 1) //gif
	$im2 = imagecreatefromgif("$photo_to_paste");
	if($condicion[2] == 2) //jpg
	$im2 = imagecreatefromjpeg("$photo_to_paste");
	if($condicion[2] == 3) //png
	$im2 = imagecreatefrompng("$photo_to_paste");

	imagecopy($im, $im2, 255,25, 0, 0, imagesx($im2), imagesy($im2));
	$returnUrl = 'image_post/type/5/'.$profileId.''.mt_rand().'.jpg';
	$postImagePath = __DIR__ . '/..'.'/'.$returnUrl;
	if(imagejpeg($im,$postImagePath,90)){
		$results = array('imgUrl' => $returnUrl);
		imagedestroy($im);
		imagedestroy($im2);		
		return json_encode($results);
	}else{
		return 'error';
	}

}

if($type =="5") {
	echo setupImageForLuckyFriends($profileUrl,$profileId,$gender,$name);
}else {
	echo setPostImage($profileUrl,$profileId,$gender,$name);
}

