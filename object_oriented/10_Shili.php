<?php
//定义学生类
class Student{
    //私有的静态的保存人数的属性
    private static $count = 0;
    //公共的构造方法
    public function __construct(){
        self::$count++;
    }
    //获取在线人数：
    public function getCount(){
        return self::$count;
    }
    //公共的析构方法
    public function __destruct(){
        self::$count--;
    }
}
//创建学生类对象
$obj = new Student();
$obj2 = new Student();
$obj3 = new Student();
$obj4 = new Student();
$obj5 = new Student();
echo "当前共有".$obj5->getCount()."个人在线";

