<?php
# 对象方法的操作
//定义一个学生类
class Student{
    //成员方法：对象方法
    public function showInfo($name,$age){
        $str = "{$name}的年龄是{$age}岁";
        return $str; //返回结果
    }
}
//实例化对象
$obj = new Student();
echo $obj ->showInfo("asd",42);