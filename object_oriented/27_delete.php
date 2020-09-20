<?php
//包含连接数据库的公共文件
require_once("26_gog.php");
//获取地址栏传递的id
$id = $_GET['id'];
//构建删除的sql语句
$sql = "DELETE FROM user WHERE id = $id ";
//执行sql语句
if ($db->exec($sql)){
    //输出提示，3秒钟后，跳转列表页
    echo "<h2>id = {$id}的用户信息删除成功</h2>";
    header("refresh:3;url=./27_list.php");
    die();
}