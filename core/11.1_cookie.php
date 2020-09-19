<?php
//读取cookie
//echo '<pre>';
//print_r($_COOKIE);

//cookie的类型
$arr = ['name'=>'zhangsan','age'=>20];
setcookie('arr[name]',$arr['name']);
setcookie('arr[age]',$arr['age']);
echo '<pre>';
print_r($_COOKIE);