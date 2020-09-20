<?php
//接口
//1.定义第1个接口
interface Inter1{
    const  TITLE = '接口';
    public function showInfo($a,$b);
}
//定义第2个接口
interface Inter2{
    public static function readMe();
}
//创建抽象的学生类，并实现多个接口
abstract class Student implements Inter1,Inter2{
    //重写接口中的showInfo()方法
    public function showInfo($a, $b){}
    //重写接口中的readMe()方法
    public static function readMe(){}
}
//4.创建传智学生类，并继承抽象类
final class ItcastStudent extends Student{}
//5.实例化传智学生类对象
$obj = new  ItcastStudent();