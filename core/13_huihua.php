<?php

//1.创建画布
$w = 400;
$h = 200;
$img = imagecreatetruecolor($w,$h);

//2.分配颜色
$bg = imagecolorallocate($img,255,0,0);

//3.为画布填充颜色
imagefill($img,0,0,$bg);

//4.绘制矩形 左上角x(50,20),右下角y(350,180)
$border = imagecolorallocate($img,0,255,0);
imagerectangle($img,50,20,350,180,$border);

//5.绘制直线  起点坐标x(40,20)    终点坐标y(360,180)
imageline($img,40,20,360,180,$border);

//6.绘制字母 坐标x(150,40)
//$color =  imagecolorallocate($img,240,240,240);
//$string = 'TEXT';
//imagestring($img,5,150,40,$string,$color);

//7.绘制文字
//$color = imagecolorallocate($img,100,100,100);
//imagettftext($img,45,30,80,150,$color,'calibri.ttf','你');

//显示画布
header('content-type:image/jpeg');
imagejpeg($img);