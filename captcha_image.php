<?php
session_start();

header("Content-type: image/png");

//mengosongkan session captcha
$_SESSION['captcha']="";

//ukuran captcha
$image = imagecreate(400, 160);
//jenis font yang ingin anda gunakan
$font = 'arial.ttf';
//ukuran font
$size = 60;
//warna background
imagecolorallocate($image, 167, 167, 167);
//warna text 1
$color1 = imagecolorallocate($image, 0, 0, 0);
//warna text 2
$color2 = imagecolorallocate($image, 128, 128, 128);

/*for($i=0; $i<=4; $i++){
//    membuat angka random
    $text = rand(0,9); */
    function randomPassword()
    {
    $digit = 6;
    $karakter = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";

    srand((double)microtime()*1000000);
    $i = 0;
    $pass = "";
    while ($i <= $digit-1)
    {
    $num = rand() % 32;
    $tmp = substr($karakter,$num,1);
    $pass = $pass.$tmp;
    $i++;
    }
    return $pass;
    }

    //$newPassword = randomPassword();
    $text = randomPassword();
    $_SESSION['captcha'] = $text;

for($i=0; $i<=0; $i++){
//    sudut text
    $angle = rand(-10, 0);
//    posisi text1 pada sumbu x
    $x1 = 22+100*$i;
//    posisi text1 pada sumbu y
    $y1 = 90;
//    posisi text2 pada sumbu x
    $x2 = 23+100*$i;
//    posisi text2 pada sumbu y
    $y2 = 90;
//    menulis text
    imagettftext($image, $size, $angle, $x1, $y1, $color1, $font, $text);
    imagettftext($image, $size, $angle, $x2, $y2, $color2, $font, $text);
}

//membuat gambar
imagepng($image);
imagedestroy($image);
?>
