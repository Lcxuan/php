<?php
class ItcastStudent{
    //公共的静态属性(类的属性)
    static public $title = "<h2>静态方法和静态属性</h2>";
    //私有的静态方法(类的方法)
    public static function showLine(){
        return "<hr/>";
    }
    //公共的成员方法
    public function showInfo($name,$age){
        $str = self::$title;
        $str .= self::showLine();
        $str .= "{$name}的年龄是{$age}岁";
        echo $str;
    }
}
//实例化对象
$obj = new ItcastStudent();
$obj->showInfo('qwe',41);
//实例化第二个对象
$obj2 = new ItcastStudent();
$obj2->showInfo('ASD',50);



