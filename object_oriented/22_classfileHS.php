<?php
//自定义类文件加载函数spl_autoload_register()
spl_autoload_register("fun1");
spl_autoload_register("fun2");
function fun1($className){
    //构建类文件辣眼睛
    $filename ="./libs/21_Student.class.php";
    //如果类文件存在，则包含
    if (file_exists($filename)) require_once($filename);
}
function fun2($className){
    //构建类文件辣眼睛
    $filename ="./public/21_Student.class.php";
    //如果类文件存在，则包含
    if (file_exists($filename)) require_once($filename);
}