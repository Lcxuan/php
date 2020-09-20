<?php
//类的多态
//定义学生类
class Student{
    public static function showInfo($a,$b){
        return "{$a}的年龄是{$b}岁";
    }
}
//定义继承学生类，并继承学生类
class ItcastStudent extends Student{
    public static function showInfo($a, $b){
        $str = "<h2>类的多态：方法重写</h2>";
        $str .= parent::showInfo($a,$b);
        echo $str;
    }
}
//实例化继承学生类对象
//$obj = new ItcastStudent();
//$obj ->showInfo('qwe',24);

//直接使用类名调用静态方法
ItcastStudent::showInfo('qwe',25);