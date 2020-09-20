<?php
//单例设计模式
//定义最终的单例的数据库操作类
final class Scdesign2{
    //私有的静态的保存对象的属性
    private static $obj = NULL;
//    私有的数据库配置信息
    private $db_host;   //主机名
    private $db_user;   //用户名
    private $db_pass;   //密码
    private $db_name;   //数据库名
    private $charset;   //字符集
    private $conn;      //连接数据库函数

    //私有的构造方法：阻止类外new对象
    private function __construct($config){
        $this->db_host = $config['db_host'];
        $this->db_user = $config['db_user'];
        $this->db_pass = $config['db_pass'];
        $this->db_name = $config['db_name'];
        $this->charset = $config['charset'];
        $this->conn = mysqli_connect($this->db_host,$this->db_user,$this->db_pass);
        $this->connectDb();     //连接Mysql服务器
        $this->selectDb();      //选择数据库
        $this->setCharset();    //设置字符集
    }
    //私有的克隆方法：阻止类外clone对象
    private function __clone(){
        // TODO: Implement __clone() method.
    }
    //公共的静态的创建对象的方法
    public static function getInstance($config){
        //判断当前对象是否存在
        if (!self::$obj instanceof self){
            self::$obj = new self($config);
        }
        //如果对象存在，直接返回
        return self::$obj;
    }
    //私有的连接数据库
    private function connectDb(){
        if (!@$this->conn){
            die("连接Mysql服务器出错！");
        }
    }
    //私有的选择数据库方法
    private function selectDb(){
        if (!@mysqli_select_db($this->conn,$this->db_name)){
            die("数据库选择失败");
        }
    }
    //私有的数据库字符集
    private function setCharset(){
        mysqli_set_charset($this->conn,$this->charset);
    }
    //公共的执行sql语句的方法：inset、update、delete、set、create、drop等
    public function exec($sql){
        //将sql语句转成全小写
        $sql = strtolower($sql);
        //判断sql是不是SELECT语句
        if (substr($sql,0,6) == 'select'){
            die("该方法不执行SELECT语句");
        }
        //如果不是SELECT语句，则正常执行，并返回布尔值
        return mysqli_query($this->conn,$sql);
    }
    //私有的执行sql语句的方法：SELECT
    private function query($sql){
        //将sql语句转成全小写
        $sql = strtolower($sql);
        //判断sql是不是SELECT语句
        if (substr($sql,0,6) !== 'select'){
            die("该方法不执行非SELECT语句");
        }
        //如果是SELECT语句，则正常执行，并返回结果集
        return mysqli_query($this->conn,$sql);
    }
    //公共的获取单行记录的方法(一维数组)
    public function fetchOne($sql,$type=1){
        //执行SQL语句，并返回结果集
        $result = $this->query($sql);
        //定义返回的数组的类型
        $types = array(
            1 => MYSQLI_ASSOC,
            2 => MYSQLI_NUM,
            3 => MYSQLI_BOTH
        );
        //返回一条记录
        return mysqli_fetch_array($result,$types[$type]);
    }
    //公共获取多行记录的方法(二维数组)
    public function fetchAll($sql,$type=1){
        //执行SQL语句，并返回结果集
        $result = $this->query($sql);
        //定义返回的数组的类型
        $types = array(
            1 => MYSQLI_ASSOC,
            2 => MYSQLI_NUM,
            3 => MYSQLI_BOTH
        );
        //循环从结果集中取出所有记录，并存入一个新数组中
        while($row = mysqli_fetch_all($result,$types[$type])){
            $arrs[] = $row;
        }
        //返回二维数组
        return $arrs;
    }
    //公共的获取记录数的方法
    public function rowCount($sql){
        //执行SQL语句，并返回结果集
        $result = $this->query($sql);
        //返回记录数
        return mysqli_num_rows($result);
    }
}
