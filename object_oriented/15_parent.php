<?php
//parent关键字
class Student{
    const TITLE = 'parent';
    protected static $db_host = 'localhost';
    //__METHOD__取得当前方法名
    protected static function readMe(){
        return '这是静态方法'.__METHOD__;
    }
    protected function showInfo(){
        return "这是成员方法".__METHOD__;
    }
}
class ItcastStudent extends Student{
    public function show(){
        $str = "父类的常量：".parent::TITLE;
        $str .= "<br>子类的常量：".self::TITLE;
        $str .= "<br>父类的静态属性：".parent::$db_host;
        $str .= "<br>子类的静态属性：".self::$db_host;
        $str .= "<br>父类的静态方法：".parent::readMe();
        $str .= "<br>子类的静态方法：".self::readMe();
        $str .= "<br>父类方法：".parent::showInfo();
        $str .= "<br>子类方法：".self::showInfo();
        echo $str;
    }
}
//实例化继承学生类对象
$obj = new ItcastStudent();
$obj->show();