<?php
//类的多态-构造方法
//定义商品类(基础类)
class Shop{
    //私有的商品属性
    private $name;
    private $price;
    //受保护的构造方法
    protected function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }

    //受保护的显示方法
    protected function showInfo(){
        $str = "商品名称：{$this->name}";
        $str .= "<br>商品价格：{$this->price}";
        return $str;
    }
}
//定义手机类，并继承商品类
class Mobile extends Shop{
    //私有的手机属性
    private $pinpai;
    private $city;
    //公共的构造方法
    public function __construct($name, $price,$pinpai,$city){
        //调用父类的构造方法，并传递参数
        parent::__construct($name,$price);
        $this->pinpai = $pinpai;
        $this->city = $city;
    }
    //公共的显示方法
    public function ShowInfo(){
        $str = parent::showInfo();
        $str .= "<br>手机品牌：{$this->pinpai}";
        $str .= "<br>手机产地：{$this->city}";
        echo $str;
    }
}
//实例化手机类对象
$obj = new Mobile('苹果8',"8888","ios","天津市");
$obj ->ShowInfo();