<?php
//单例设计模式
//创建单例的数据库类
class Db{
    //私有的静态的保存对象的属性
    protected static $obj = NULL;
    //私有的构造方法，阻止类外new对象
    private function __construct(){

    }
    //私有的克隆方法：阻止类外clone对象
    private function __clone(){
        // TODO: Implement __clone() method.
    }
    //公共的静态的创建对象的方法
    public static function getInstance(){
        //判断当前对象是否存在
        if (!self::$obj instanceof self){
            //如果对象不存在，则创建它
            self::$obj = new self;
        }
        //返回当前对象
        return self::$obj;
    }
}
//创建数据库类的对象，由于阻止了用new关键字和clone关键字，所以不能用new和clone
$Db1 = Db::getInstance();
$Db2 = Db::getInstance();

var_dump($Db1,$Db2);
