<?php
spl_autoload_register(function ($className){
    //构建类文件的绝对路径
    $pathInfo = "./$className.class.php";
    //判断类文件是否存在
    if (file_exists($pathInfo))require_once ($pathInfo);
});
//创建类的对象
$teaobj1 = Factory::get("Teacher");
$teaobj2 = Factory::get("Teacher");
$stuObj3 = Factory::get("Student");
$stuObj4 = Factory::get("Student");
var_dump($teaobj1,$teaobj2,$stuObj3,$stuObj4);