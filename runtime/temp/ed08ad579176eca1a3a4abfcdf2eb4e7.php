<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"E:\phpStudy\WWW\shop\public/../application/admin\view\login\index.html";i:1498023420;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>登录-后台管理系统</title>
    <meta name="keywords"  content="设置关键词..." />
    <meta name="description" content="设置描述..." />
    <meta name="author" content="DeathGhost" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link rel="icon" href="__STATIC__/admin/images/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/style.css" />
    <script src="__STATIC__/admin/javascript/jquery.js"></script>
    <script src="__STATIC__/admin/javascript/public.js"></script>
    <script src="__STATIC__/admin/javascript/plug-ins/customScrollbar.min.js"></script>
    <script src="__STATIC__/admin/javascript/pages/login.js"></script>
</head>
<body class="login-page">
<section class="login-contain">
    <header>
        <h1>后台管理系统</h1>
        <p>management system</p>
    </header>
    <form method="post" action="">
    <div class="form-content">
        <ul>
            <li>
                <div class="form-group">
                    <label class="control-label">管理员账号：</label>
                    <input type="text" placeholder="管理员账号..." class="form-control form-underlined" id="adminName" name="admin_name"/>
                </div>
            </li>
            <li>
                <div class="form-group">
                    <label class="control-label">管理员密码：</label>
                    <input type="password" placeholder="管理员密码..." class="form-control form-underlined" id="adminPwd" name="admin_password"/>
                </div>
            </li>

            <li>
                <input class="btn btn-lg btn-block" type="submit" value="立即登录">
            </li>
        </ul>
    </div>
    </form>
</section>
<div class="mask"></div>
<div class="dialog">
    <div class="dialog-hd">
        <strong class="lt-title">标题</strong>
        <a class="rt-operate icon-remove JclosePanel" title="关闭"></a>
    </div>
    <div class="dialog-bd">
        <!--start::-->
        <p>这里是基础弹窗,可以定义文本信息，HTML信息这里是基础弹窗,可以定义文本信息，HTML信息。</p>
        <!--end::-->
    </div>
    <div class="dialog-ft">
        <button class="btn btn-info JyesBtn">确认</button>
        <button class="btn btn-secondary JnoBtn">关闭</button>
    </div>
</div>
</body>
</html>
