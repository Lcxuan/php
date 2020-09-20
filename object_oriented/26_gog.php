<?php
//连接数据库的公共文件
function __autoload($className){
    //构建文件的路径
    $filename = "26_$className.class.php";
    if (file_exists($filename)){
        require_once ($filename);
    }
}
//创建数据库信息的数组
$arr = [
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => '',
    'db_name' => 'userbiao',
    'charset' => 'utf8'
];
$db = Scdesign2::getInstance($arr);