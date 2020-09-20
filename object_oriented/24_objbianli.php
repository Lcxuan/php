<?php
//对象遍历
//定义学生类
class Student{
    private $name = 'qwe';
    protected $age = 24;
    public $edu = "大专";
    //在类中遍历对象属性
    public function showAllAttrs(){
        foreach ($this as $key => $value){
            echo "\$obj -> $key = $value.<br>";
        }
    }
}
//实例化学生类对象
$obj1 = new Student();
//在类外遍历对象属性
foreach ($obj1 as $key => $value){
    echo "\$obj -> $key = $value.<br>";
}
echo "<hr>";
$obj1->showAllAttrs();