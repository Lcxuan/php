<?php
//定义抽象的商品基础类
abstract class Shop{
    //抽象方法：
    abstract public function showInfo($a,$b);
}
//定义手机类，并继承商品基础类
final class Mobile extends Shop{
    //重写showInfo()抽象方法
    public function showInfo($name,$age){
        echo "{$name}的年龄是{$age}岁！";
    }
}
//实例化手机类对象
$obj = new Mobile();
$obj->showInfo('qwe',24);
