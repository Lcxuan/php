<?php
//包含连接数据库的公共文件
require_once ("./26_gog.php");
//判断表单是否提交
if (isset($_POST['ac']) && $_POST['ac'] == 'add'){
    //获取表单提交值
    foreach ($_POST as $k => $v){
        $$k = $v;
    }
    //构建插入的SQL语句
    $sql = "INSERT INTO user VALUES (null,'$username','$password','$email')";
    //执行sql语句
    if ($db -> exec($sql)){
        echo "<h2>用户添加成功</h2>";
        header("refresh:3;url=./27_list.php");
        die();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;padding-bottom: 10px;">
        <h2>用户管理</h2>
        <a href="javascript:history.go(-1)">返回上一页</a>
    </div>
    <form name="form1" method="post" action="">
        <table width="400" border="1" bordercolor="#ccc" align="center" rules="all" cellpadding="5">
            <tr>
                <td width="80" align="right">姓名</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td width="80" align="right">密码</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td width="80" align="right">邮箱</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td width="80" align="right">&nbsp</td>
                <td>
                    <input type="submit" value="提交">
                    <input type="hidden" name="ac" value="add">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>