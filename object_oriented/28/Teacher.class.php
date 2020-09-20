<?php
//定义最终的类
final class Teacher{
    private $name = "qwr";
    private $age = 14;
    public function __construct(){
        echo "{$this->name}的年龄是{$this->age}";
    }
}