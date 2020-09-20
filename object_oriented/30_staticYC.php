<?php
//静态延迟绑定
class Student{
    const TITLE = "静态延迟绑定";
    function showInfo(){
        echo "主题1是：".self::TITLE;
        echo "<br>主题2是：".static::TITLE;
    }
}
//继承以上的类
class ItStudent extends Student {
    const TITLE = "继承的静态延迟绑定";
}

//实例化继承类的对象
$obj = new ItStudent();
$obj ->showInfo();