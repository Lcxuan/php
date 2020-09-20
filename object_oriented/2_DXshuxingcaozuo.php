<?php
# 对象属性操作
//定义一个学生类
class Student{
    //成员属性：对象属性
    public $name = "asd";
    public $age = 24;
}
//类的实例化
$obj = new Student();

//1.修改对象属性：对已存在的属性重新赋值
//$obj访问属性，属性不加$符号
$obj->name = 'qwe';
$obj->age = 30;

//2.添加新属性：给不存在的属性赋值
$obj->edu = '本科';

//3.删除属性
unset($obj->edu);

//4.读取对象属性的值
echo "{$obj->name}的年龄是{$obj->age}岁"."<br>";

var_dump($obj);