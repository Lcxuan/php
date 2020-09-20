<?php
//1.值传递：将变量的值，复制传给另一个变量
//$a = 100;
//$b = $a;    //将$a的值，复制一份，传给了$a
//$a = 200;   //重新给$a赋值
//echo "\$a = $a,\$b = $b";

//2.引用传地址
//定义一个学生类
//class Student{
//    public $name = 'qwe';
//    public $age = 24;
//}
////实例化学生类的对象
//$obj1 = new Student();
////将$obj1的“数据地址”，复制一份，传给$obj2
//$obj2 = $obj1;
////给$obj2的属性重新赋值，$obj1的值跟着改变
//$obj2->name = "asd";
//$obj2->age = 54;
//var_dump($obj1,$obj2);

//3.引用传地址，将数组变成引用传地址
$arr = array('10010','asd',24);
$school = '北大';
//定义一个函数：给数组添加新元素
//函数参数引用传地址时，“&”要加载形参前
function addElement(&$arr,$school){
    $arr[] = $school;
}
addElement($arr,$school);
//打印数组
print_r($arr);