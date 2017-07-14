<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"E:\phpStudy\WWW\shop\public/../application/home\view\card\index.html";i:1500004710;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>身份证测试</title>
</head>
<body>
    <div style="width:800px;margin:0px auto">
        <form action="<?php echo url('home/card/index'); ?>" method="post">
            <input  type="text" name="card" value=""/>
            <input  type="submit"  value="查询信息"/>

        </form>

    </div>
</body>
</html>