<?php
//定义一个学生类
class Student{
    //类的常量
    const TITLE = "<h2>OPP</h2>";
    //静态属性
    public static $DB_HOST = "localhost";
    //成员属性
    public $name = 'qwe';
    protected $sex = "女";
    private $age = 24;
    //公共显示方法
    public function showInfo(){}
    //公共的静态的方法
    public static function readMe(){}
}
//实例化学生类的对象
$obj = new Student();
var_dump($obj);