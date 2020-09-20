<?php
//__sleep魔术方法
//定义最终的数据库工具类
final class Db{
    private $db_host;
    private $db_user;
    private $db_pass;
    public function __construct(array $config){
        $this->db_host = $config['db_host'];
        $this->db_user = $config['db_user'];
        $this->db_pass = $config['db_pass'];
        $this->connectDb();
    }
    //连接数据库
    function connectDb(){
        if (!mysqli_connect($this->db_host,$this->db_user,$this->db_pass)){
            die("数据库连接失败");
        }
    }
    //在对象序列化前，自动调用__sleep方法
    function __sleep(){
        // TODO: Implement __sleep() method.
        //返回需要序列的对象，将需要的写出来
        return array('db_host','db_user');
    }
}
$arr = array(
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => ''
);
//实例化数据库工具类对象
$Db = new Db($arr);
//对象序列化
$str = serialize($Db);
//将序列化文件保存到记事本
file_put_contents('2.txt',$str);
