<?php
//接口应用
//小灵通功能
interface XiaoLingTong{
    //打电话功能
    public function tel();
}
//mp3功能
interface Mp3{
    //听音乐功能
    public function video();
}
//mp4功能，并且拥有mp3的功能
interface Mp4 extends Mp3 {
    //看电影功能
    public function movie();
}
//智能手机手机的类,继承以上接口的功能
class Moblie implements XiaoLingTong,Mp4 {
    //重写打电话功能
    public function tel(){
        echo "打电话功能"."<br>";
    }
    //重写听音乐功能
    public function video(){
        echo "听音乐功能"."<br>";
    }
    //重写看电影功能
    public function movie(){
        echo "看电影功能"."<br>";
    }
    //定义Moblie的玩游戏功能
    public function game(){
        echo "玩游戏功能";
    }
}
//实例化智能手机功能
$obj = new Moblie();
$obj -> tel();
$obj -> video();
$obj -> movie();
$obj -> game();

