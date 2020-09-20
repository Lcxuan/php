<?php
//旧方法
    //包含类文件
    //require_once("./21_Teacher.class.php");
    //require_once("./21_Student.class.php");

//类的自动加载
function __autoload($className){
    //构建类文件的真实路径
    $filename = "./21_$className.class.php";
    //如果类文件存在,则包含
    if (file_exists($filename)){
        require_once($filename);
    }
}

//实例化学生类对象
$stuObj = new Student();
//实例化教师类对象
$teaObj = new Teacher();