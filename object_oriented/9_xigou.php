<?php
//定义学生类
class Student{
    public function __destruct(){
        echo "对象即将销毁"."<br>";
    }
}
//实例化对象
$obj = new Student();
unset($obj);
echo "这是网页的最后代码";