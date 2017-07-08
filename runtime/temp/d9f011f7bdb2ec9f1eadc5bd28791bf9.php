<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"E:\phpStudy\WWW\shop\public/../application/admin\view\category\add.html";i:1498787862;s:72:"E:\phpStudy\WWW\shop\public/../application/admin\view\public\header.html";i:1498894746;s:72:"E:\phpStudy\WWW\shop\public/../application/admin\view\public\footer.html";i:1498894920;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__STATIC__/admin/lib/html5.js"></script>
    <script type="text/javascript" src="__STATIC__/admin/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/Hui-iconfont/1.0.7/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/style.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/common.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/admin/uploadify/uploadify.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->

    <title>中江名优特产后台界面</title>
    <meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>

<section style="overflow: hidden;padding:20px">
<div >
    <form action="" method="post" class="form form-horizontal" id="form-category-add">
        <div id="tab-category" class="HuiTab">
            <div class="tabCon1">
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>分类名称：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value=""   name="name">
                    </div>
                    <div class="col-3"> </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>上级栏目：</label>
                    <div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
							<select class="select" id="sel_Sub" name="parent_id">
                                <option value="0">顶级分类</option>
                            </select>
							</span> </div>
                    <div class="col-3"> </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3">排序：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="100"   name="listorder">
                    </div>
                    <div class="col-3"> </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3">所属栏目：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                       <span class="select-box">
							<select class="select"  name="type">
                                <option value="0">--请选择--</option>
                                <option value="1">特产类</option>
                                <option value="2">资讯类</option>
                                <option value="3">合作社类</option>
                            </select>
							</span>
                    </div>
                    <div class="col-3"> </div>
                </div>

            </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
        </div>
    </form>
</div></section>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/common.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/image.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->

<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="__STATIC__/admin/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/uploadify/jquery.uploadify.min.js"></script>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">

</script>
<!--/请在上方写此页面业务相关的脚本-->

</body>
</html>