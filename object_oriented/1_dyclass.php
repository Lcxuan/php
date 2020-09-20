<?php
//定义一个学生类
/*class Student{
//    成员属性（相当于普通的变量）(静态的特征)
    public $name = "lcx";
    public $age = "16";
//    成员方法（相当于普通的函数）
    public function showInfo(){
        echo "{this->name}的年龄是{this->age}岁!";
    }
}*/

//成员属性
//class Student{
//    //成员属性(对象属性)：静态的特征
//    protected $name = 'lcx';
//    public $sex = '男';
//    private $age = '16';
//}

//成员方法
//class Student{
//    //成员方法(对象方法)：一个方法完成一个小功能
//    public function showInfo($name,$age){
//        $str = "{$name}的年龄{$age}岁了";
//        return $str;
//    }
//}

//定义一个空的学生类
class Student{

}
//创建学生类的对象
$obj1 = new Student();
$obj2 = new Student;
var_dump($obj1,$obj2);
