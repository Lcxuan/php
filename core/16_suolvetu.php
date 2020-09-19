<?php
$d_w = 400;
$d_h = 500;
$src = 'face/m01.jpg';
thumb($d_w,$d_h,$src);
function thumb($d_w,$d_h,$src){
    //创建画布(框)
    $imgDest = imagecreatetruecolor($d_w, $d_h);
    //由用户图片创建画布
    $infoSrc = getimagesize($src);
    $s_w = $infoSrc[0];
    $s_h = $infoSrc[1];
    $imgSrc = createFrom($src);

    $f_h = $d_h;
    $f_w = $s_w / $s_h * $f_h;
    if ($f_w > $d_w) {
        $f_w = $d_w;
        $f_h = $s_w / $s_h*$f_w;
    }

    //计算imgDest上所放置的起点位置,居中
    $posX = ($d_w - $f_w) / 2;
    $posY = ($d_h - $f_h) / 2;

    //采样合并
    imagecopyresampled($imgDest, $imgSrc, $posX, $posY, 0, 0, $f_w, $f_h, $s_w, $s_h);
    header('content-type:image/jpeg');
    imagejpeg($imgDest);
}
//封装由图片创建画布的函数
function createFrom($file){
    $info = getimagesize($file);
    switch ($info['mime']){
        case 'image/jpeg':
            $img = imagecreatefromjpeg($file);
            break;
        case 'image/png':
            $img = imagecreatefrompng($file);
            break;
        case 'image/gif':
            $img = imagecreatefromgif($file);
            break;
    }
    return $img;
}