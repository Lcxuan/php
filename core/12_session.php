<?php
//开启session
session_start();

//删除session中的部分数据
$userInfo = ['id'=>10,'username'=>'lcx','age'=>16];
$_SESSION['user'] = $userInfo;
echo '<pre>';
print_r($_SESSION);
//销毁部分数据
unset($_SESSION['user']);
print_r($_SESSION);

//销毁session
//session_destroy();
//print_r($_SESSION);

//session的数据
//$userInfo = ['id'=>10,'username'=>'lcx','age'=>16];
//$_SESSION['user'] = $userInfo;
//echo '<pre>';
//print_r($_SESSION);

//echo session_id();
//写session，就是向$_SESSION数组中添加元素
//$_SESSION['id'] = 10;

//echo '<pre>';
//print_r($_SESSION);