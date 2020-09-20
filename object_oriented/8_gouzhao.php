<?php
//定义手机类
class Mobile{
    //私有的手机属性:在实际项目中，属性一般都是private、protected权限
    //项目中，成员属性一定没有值
//    在类中没有真正的数据，数据都来自于类外传递
    private $name;  //手机名称
    private $pinpai;    //手机品牌
    private $price; //手机价格
    private $city;  //手机产地

    //公共的构造方法
    public function __construct($name2,$pinpai2,$price2,$city2){
        $this -> name = $name2;
        $this -> pinpai = $pinpai2;
        $this -> price = $price2;
        $this -> city = $city2;
    }

    //公共的显示方法
    public function showInfo(){
        $str = "手机名称：{$this->name}"."<br>";
        $str.= "手机品牌：{$this->pinpai}"."<br>";
        $str.= "手机价格：{$this->price}"."<br>";
        $str.= "手机产地：{$this->city}"."<br>";
        return $str;
    }
}
//实例化手机类对象
$obj = new Mobile("苹果8","苹果",'8888',"天津市");
echo $obj ->showInfo();