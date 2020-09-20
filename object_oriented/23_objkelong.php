<?php
//对象克隆
//定义学生类
class Student{
    private $name = 'qwe';
    private $age = 24;
    //当对象克隆完成时，魔术方法__clone()会自动调用
    public function __clone(){
        $this -> name = 'lcx';
        $this -> age = 16;
    }
}
//实例化学生类对象
$obj1 = new Student();
//克隆新对象
$obj2 = clone $obj1;
var_dump($obj1,$obj2);