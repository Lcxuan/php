<?php
$w = 100;
$h = 30;
$len = 4;
captcha($w,$h,$len);
function captcha($w,$h,$len){
    //1.创建画布
    $img = imagecreatetruecolor($w, $h);

    //2.填充背景颜色
    $bg = imagecolorallocate($img, mt_rand(210, 255), mt_rand(210, 255), mt_rand(210, 255));
    imagefill($img, 0, 0, $bg);

    //获取验证码函数
    $code = getCode($len);

    //校验验证码，将生成的验证码写入session
    session_start();
    $_SESSION['verify'] = $code;

    //3.绘制随机验证码
    for ($i = 0; $i < strlen($code); $i++) {
        $fontsize = 5;
        $x = ($i * $w / $len) + mt_rand(1, 15);
        $y = mt_rand(2, 10);
        $color = imagecolorallocate($img, mt_rand(100, 200), mt_rand(100, 200), mt_rand(100, 200));
        imagestring($img, $fontsize, $x, $y, $code[$i], $color);
    }

    //4.增加干扰线
    for ($i = 0; $i < 4; $i++) {
        $lineColor = imagecolorallocate($img, mt_rand(0, 200), mt_rand(0, 200), mt_rand(0, 200));
        imageline($img, mt_rand(0, 100), mt_rand(0, 30), mt_rand(0, 100), mt_rand(0, 30), $lineColor);
    }

    //显示画布
    header('content-type:image/png');
    imagejpeg($img);
}

//生成随机数函数
function getCode($len){
    //生成随机字符串
    $charset = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $code = '';
    for ($i=0;$i<$len;$i++) {
        $code .= $charset[mt_rand(0,strlen($charset)-1)];
    }
    return $code;
}
