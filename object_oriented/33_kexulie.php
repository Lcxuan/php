<?php
//数组序列化
////1.定义数组变量
//$arr = array(
//    'db_host' => 'localost',
//    'db_user' => 'root',
//    'db_pass' => '',
//    'db_name' => 'userbiao'
//);
////2.变量序列化
//$str = serialize($arr);
////3.将序列化字符串，写入记事本
//file_put_contents("1.txt",$str);

//反序列化
//读取记事本的字符串
$str = file_get_contents('1.txt');
//变量反序列化
$arr = unserialize($str);
print_r($arr);