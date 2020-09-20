<?php
# 类的封装性

//定义数据库操作类(工具类)
class Db
{
    //私有的数据库配置信息
    private $db_host;   //主机名
    private $db_user;   //用户名
    private $db_pass;   //密码
    private $db_name;   //数据库名
    private $charset;   //字符集
    private $conn;      //连接数据库函数

    //构造方法
    public function __construct($config){
        $this->db_host = $config['db_host'];
        $this->db_user = $config['db_user'];
        $this->db_pass = $config['db_pass'];
        $this->db_name = $config['db_name'];
        $this->charset = $config['charset'];
        $this->conn = mysqli_connect($this->db_host,$this->db_user,$this->db_pass);
        $this->connectDb();     //连接数据库
        $this->selectDb();      //选择数据库
        $this->setCharset();    //设置字符集
    }

    //私有的连接数据库服务器的方法
    private function connectDb(){
        if (!@$this->conn){
            die("PHP连接MySQL服务器失败!");
        }
    }

    //私有的选择数据库方法
    private function selectDb(){
        if (!mysqli_select_db($this->conn,$this->db_name)){
            die("选择的数据库{$this->db_name}有误！");
        }
    }

    //私有的设置数据库字符集
    private function setCharset(){
        mysqli_set_charset($this->conn,"{$this->charset}");
    }
}
//实例化数据库类的对象
$arr = array(
    'db_host' =>'localhost',
    'db_user' =>'root',
    'db_pass' =>'',
    'db_name' =>'nsn',
    'charset' =>'utf8'
);
$db = new Db($arr);
var_dump($db);