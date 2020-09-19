<?php
//用户上传的图片
$dest = 'face/m01.jpg';
//公司的logo
$src = 'face/shuiyin.png';
//透明度
$op = 50;
$pos = 5;
water($dest,$src,$pos,50);
/*
 *@param1 dest string 用户图片
 *@param2 src string 公司logo
 *@param3 int 表示logo的位置 1：左上角 2：右上角 3：左下角 4：右下角 5：中间
 *@param4 op int 透明度
 */
function water($dest,$src,$pos=2,$op=60){
    $infoDest = getimagesize($dest);
    $infoSrc = getimagesize($src);
    //将已有的图片读取到画布中
    $imgDest = createFrom($dest);
    $imgSrc = createFrom($src);
    switch ($pos){
        case 1:
            //左上角
            $d_x = 0;
            $d_y = 0;
            break;
        case 2:
            //右上角
            $d_x = $infoDest[0] - $infoSrc[0];
            $d_y = 0;
            break;
        case 3:
            //左下角
            $d_x = 0;
            $d_y = $infoDest[1] - $infoSrc[1];
            break;
        case 4:
            //右下角
            $d_x = $infoDest[0] - $infoSrc[0];
            $d_y = $infoDest[1] - $infoSrc[1];
            break;
        case 5:
            //中间
            $d_x = ($infoDest[0] - $infoSrc[0])/2;
            $d_y = ($infoDest[1] - $infoSrc[1])/2;
            break;
    }
    //制作水印
    imagecopymerge($imgDest, $imgSrc, $d_x, $d_y, 0, 0, $infoSrc[0],$infoSrc[1], $op);

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