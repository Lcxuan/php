<?php
//魔术方法

//1.toString
//定义学生类
//class Student{
//    public function __toString(){
//        return "对不起，对象不能转成字符串";
//    }
//}
////实例化学生类对象
//$obj = new Student();
//echo $obj;

//2.invoke
//定义学生类
class Student{
    function __invoke(){
        echo "对象不能当成函数调用";
    }
}
//实例化学生类对象
$obj = new Student();
//把对象当成函数调用
$obj();