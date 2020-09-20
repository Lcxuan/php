<?php
//类的继承
//定义学生类
class Student{
    //私有的成员属性
    private $name;
    private $age;
    //构造方法
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    //析构方法
    public function __destruct(){
        echo "对象销毁";
    }

    //公共的自我显示的方法
    public function showInfo(){
        echo "{$this->name}的年龄{$this->age}岁";
    }
}
//定义一个另一个学生类，并继承上一个学生类
//继承：将父类的所有内容全部拿过来，一个不剩的(除private权限外)
class ItcastStudent extends Student {}
//实例化学生类对象
$obj = new ItcastStudent('qwe',24);
$obj->ShowInfo();
