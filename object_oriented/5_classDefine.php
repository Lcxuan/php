<?php
class Localhost{
    //类常量
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "root";
    // 公共的成员方法
    public function showInfo(){
        $str = "主机名：".Localhost::DB_HOST."<br>";
        $str .= "用户：".Localhost::DB_USER."<br>";
        $str .= "密码：".Localhost::DB_PASS;
        echo $str;
    }
}
//直接访问类的常量,静态化调用方式
$str = "主机名：".Localhost::DB_HOST."<br>";
$str .= "用户：".Localhost::DB_USER."<br>";
$str .= "密码：".Localhost::DB_PASS;
echo $str."<hr>";

//实例化对象
$obj = new Localhost();
$obj->showInfo();