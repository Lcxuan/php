<?php
//获取图片的格式
echo '<pre>';
$filename = 'face/m01.jpg';
$info = getimagesize($filename);
//从照片上创建画布
switch ($info['mime']){
    case 'image/jpeg':
        $img = imagecreatefromjpeg($filename);
        break;
    case 'image/png':
        $img = imagecreatefrompng($filename);
        break;
    case 'image/gif':
        $img = imagecreatefromgif($filename);
        break;
}
header('content-type:image/jpg');
imagejpeg($img);
