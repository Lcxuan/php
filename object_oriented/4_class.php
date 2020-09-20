<?php
class Student{
    //成员属性
    private $name = 'asd';
    private $age = 43;
    //私有的成员方法：返回一条水平线
    private function showLine(){
        return "<hr/>";
    }
    //成员方法
    public function showInfo(){
        $str = "<h2>{$this->name}的基本信息如下：</h2>";
        $str .= $this ->showLine();
        $str .= "{$this->name}的年龄是{$this->age}岁";
        echo $str;
    }
}
$obj = new Student();
$obj->showInfo();
