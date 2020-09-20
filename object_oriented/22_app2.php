<?php
//自定义类文件加载函数spl_autoload_register()
//类的自动加载
//使用匿名函数
spl_autoload_register(function ($className){
    //类文件路径的数组
    $arr = array(
        "./public/21_$className.class.php",
        "./libs/21_$className.class.php"
    );
    //循环数组
    foreach ($arr as $filename){
       //如果类文件存在，则包含
        if (file_exists($filename))require_once ($filename);
    }
});
//实例化学生类对象
$stuObj = new Student();
//实例化教师类对象
$teaObj = new Teacher();
