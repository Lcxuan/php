<?php
echo '数据已接收，如下';
echo '<pre>';

# 用REQUEST方式
print_r($_REQUEST);
echo $_REQUEST['username']."<br>";
echo $_REQUEST['password'];

# 用post方式
//print_r($_POST);
//echo $_POST['username']."<br>";
//echo $_POST['password'];

# 用$_GET方式
//print_r($_GET);
//echo $_GET['id']."<br>";
//echo $_GET['username']."<br>";
//echo $_GET['password'];