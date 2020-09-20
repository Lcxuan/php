<?php
//定义最终的工厂类
final class Factory{
    //定义私有的静态保存对象的数组属性
    private static $arr = array();
    //公共的静态的创建不同类对象的方法
    public static function get($className){
        //判断当前类的对象是否存在
        if (!isset(self::$arr[$className])){
            self::$arr[$className] = new $className();
        }
        //返回当前类的对象
        return self::$arr[$className];
    }
}