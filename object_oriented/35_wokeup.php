<?php
//__wakeup魔术方法
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
    //在对象成功重构后，__wakeup()会自动调用
    //对象初始化
    function __wakeup(){
        // TODO: Implement __wakeup() method.
        $this ->db_pass = '';
        //手动连通Mysql
        $this ->connectDb();
    }
}
//读取对象序列化的字符串
$str = file_get_contents('2.txt');
//对象反序列化
$db = unserialize($str);
var_dump($db);
