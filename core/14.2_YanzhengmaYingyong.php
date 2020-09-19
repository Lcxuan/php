<?php
session_start();
if (@$_GET['action'] == 'true'){
    if ($_POST['code'] == $_SESSION['verify']){
        echo "<script>alert('验证成功')</script>";
    }else{
        echo '验证失败';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="14.3_jiaoyan.php">
</head>
<body>
<form action="?action=true" method="post">
    <input type="text" name="code">
    <img src="14_Yanzhengma.php" alt="" id="code" onclick="this.src = '14_Yanzhengma.php?' + Math.random();">
    <input type="submit" value="提交">
</form>
</body>
</html>