<?php
//1.包含数据库的文件
require_once ("./26_gog.php");
require_once ("./27_Pager.class.php");
//2.分页参数
$pagesize = 5;  //每页显示的数量
$page = isset($_GET['page']) ? $_GET['page']:1; //获取页码数，如果有则获取当前数，没有则为1
$startrow = ($page-1)*$pagesize;        //开始的行号
//3.获取总记录数和总页数
$sql = "SELECT * FROM user";
$records = $db ->rowCount($sql);
$pages = ceil($records/$pagesize);      //总页数
//4.获取分页数据
$sql .= " ORDER BY id ASC LiMIT {$startrow},{$pagesize}";
$arrs = $db->fetchAll($sql);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .pagelist{
            height: 50px;
            line-height: 50px;
            text-align: center;
        }
        .pagelist a{
            padding: 6px 10px;
            border: 1px solid #e8e8e8;
            margin: 0 3px;
        }
        .pagelist a:hover{
            background-color: #555;
            color: white;
            font-weight: bold;
            border: none;
        }
        .pagelist .current{
            background-color: #555;
            color: white;
            font-weight: bold;
            padding: 6px 10px;
            border: 1px solid #e8e8e8;
        }
    </style>
    <script>
        //定义js删除函数
        function confirmDel(id) {
            //询问是否要删除
            if (window.confirm("你确定的要删除吗？")){
                //如果单击确定按钮，跳转到delete.php页面
                location.href = "./27_delete.php?id="+id;
            }
        }
    </script>
</head>
<body>
    <div style="text-align: center;padding-bottom: 10px;">
        <h2>用户管理</h2>
        <a href="./27_add.php">添加学生</a>
        共<font color="red"><?php echo $records; ?></font>个用户
    </div>
<table width="800" border="1" bordercolor="#ccc" rules="all" align="center" cellpadding="5">
    <tr>
        <th>编号</th>
        <th>姓名</th>
        <th>密码</th>
        <th>邮箱</th>
        <th>操作选项</th>
    </tr>
    <?php foreach ($arrs as $key => $value){ ?>
        <?php foreach ($arrs[$key] as $index =>$arr){ ?>
        <tr>
            <td><?php echo $arr['id'] ?></td>
            <td><?php echo $arr['username']; ?></td>
            <td><?php echo $arr['password']; ?></td>
            <td><?php echo $arr['email']; ?></td>
            <td>
                <a href="./27_edit.php?id=<?php echo $arr['id']; ?>">修改</a>
                <a href="javascript:viod(0)" onclick="confirmDel(<?php echo $arr['id']?>)">删除</a>
            </td>
        </tr>
        <?php } ?>
    <?php } ?>
    <tr>
        <td colspan="9" align="center" class="pagelist">
            <?php
            //创建分页类的对象
            $pageObj = new Pager($page,$pages);
            $pageObj ->fenye();
            ?>
        </td>
    </tr>
</table>
</body>
</html>