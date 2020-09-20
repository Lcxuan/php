<?php
//类的封装性
//定义一个图书类
class Book{
    //类常量定义
    const COMPANY = "<h2>类的封装性</h2>";
    //受保护的静态水平线
    protected static function showLine(){
        return "<hr/>";
    }
    //私有的静态的保存数量的属性
    private static $count = 0;
    //私有的图书属性
    private $name;  //书名
    private $author;    //作者
    private $price;     //价格
    private $publish;   //出版社

    //构造方法:对象初始化
    public function __construct($arr){
        $this->name = $arr['name'];
        $this->author = $arr['author'];
        $this->price = $arr['price'];
        $this->publish = $arr['publish'];
        self::$count++;
    }
    //公共的显示方法
    public function showInfo(){
        $str = self::COMPANY;
        $str .= self::showLine();
        $str .= "书名：{$this->name}"."<br>";
        $str .= "作者：{$this->author}"."<br>";
        $str .= "价格：{$this->price}"."<br>";
        $str .= "出版社：{$this->publish}"."<br>";
        $str .= "共有".self::$count."本书";
        return $str;
    }
}
//实例化图书对象
$arr = array(
    'name' => 'PHP从入门到放弃',
    'author' => '张三',
    'price' =>  '100.00',
    'publish' => '中央出版社'
);
$arr2 = array(
    'name' => 'Java从入门到秃头',
    'author' => '张四',
    'price' =>  '150.00',
    'publish' => '中央出版社'
);
$arr3 = array(
    'name' => 'c++从入门到跑路',
    'author' => '张五',
    'price' =>  '200.00',
    'publish' => '中央出版社'
);
$obj1 = new Book($arr);
echo $obj1->showInfo();
$obj2 = new Book($arr2);
echo $obj2->showInfo();
$obj3 = new Book($arr3);
echo $obj3->showInfo();