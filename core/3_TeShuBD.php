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
    <form action="3.1_TeShuBD.php" method="post">
        用户名：<input type="text" name="username" id="name"><br>
        密码：<input type="password" name="password" id="password"><br>
        <input type="checkbox" name="color[]" value="red">red
        <input type="checkbox" name="color[]" value="blue">blue
        <input type="checkbox" name="color[]" value="yellow">yellow<br>
        <input type="submit" value="提交">
    </form>
</body>
</html>