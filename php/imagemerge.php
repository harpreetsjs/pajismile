<?php
      $url = $_GET['url'];    
       
       $recImg = file_get_contents($url);  //image 321 x 400
       file_put_contents(__DIR__ . '/..'.'/images/profile.jpg', $recImg);
       $photo_to_paste = __DIR__ . '/..'.'/images/profile.jpg';
       $white_image=__DIR__ . '/..'.'/images/white_image.jpg'; //873 x 622 

        $im = imagecreatefromjpeg($white_image);
        $condicion = GetImageSize($photo_to_paste); // image format?

        if($condicion[2] == 1) //gif
        $im2 = imagecreatefromgif("$photo_to_paste");
        if($condicion[2] == 2) //jpg
        $im2 = imagecreatefromjpeg("$photo_to_paste");
        if($condicion[2] == 3) //png
        $im2 = imagecreatefrompng("$photo_to_paste");

        imagecopy($im, $im2, 100,100, 0, 0, imagesx($im2), imagesy($im2));

        imagejpeg($im,__DIR__ . '/..'.'/image_post/testpic.jpg',90);
        imagedestroy($im);
        imagedestroy($im2);

       echo 'done'; 