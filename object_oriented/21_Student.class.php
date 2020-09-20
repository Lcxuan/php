<?php
//定义最终的学生类
final class Student{
    private $name = 'qwe';
    private $age = 16;
    public function __construct(){
        echo "{$this -> name}的年龄是{$this -> age}岁"."<br>";
    }
}