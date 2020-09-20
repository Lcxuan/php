<?php
//自定义类文件加载函数spl_autoload_register()
//类的自动加载
spl_autoload_register('func1');
spl_autoload_register('func2');
function func1($className){
    //构建类文件的真实路径
    $filename = "./public/21_$className.class.php";
    //如果类文件存在，则包含
    if (file_exists($filename))require_once($filename);
}
function func2($className){
    //构建类文件的真实路径
    $filename = "./libs/21_$className.class.php";
    //如果类文件存在，则包含
    if (file_exists($filename))require_once($filename);
}
//实例化学生类对象
$stuObj = new Student();
//实例化教师类对象
$teaObj = new Teacher();
