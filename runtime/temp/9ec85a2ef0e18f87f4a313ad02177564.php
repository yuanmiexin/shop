<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"E:\phpStudy\WWW\shop\public/../application/bis\view\deal\index.html";i:1498718490;s:70:"E:\phpStudy\WWW\shop\public/../application/bis\view\public\header.html";i:1498642616;s:70:"E:\phpStudy\WWW\shop\public/../application/bis\view\public\footer.html";i:1498698684;}*/ ?>
<!--包含头部文件-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="__STATIC__/favicon.ico" >
<LINK rel="Shortcut Icon" href="__STATIC__/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/hui/static/h-ui.admin/css/style.css" />
  <link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/common.css" />
  <link rel="stylesheet" type="text/css" href="__STATIC__/admin/uploadify/uploadify.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>中江名优特产</title>
<meta name="keywords" content="tp5打造o2o平台系统">
<meta name="description" content="o2o平台">
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 商户入驻申请 </nav>
<div class="page-container">
  <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a class="btn btn-primary radius"  href="<?php echo url('Deal/add'); ?>"><i class="Hui-iconfont">&#xe600;</i> 添加商品</a>
  </span> <span class="r"></span> </div>
  <div class="mt-20">
    <table class="table table-border table-bordered table-bg table-hover table-sort">
      <thead>
      <tr class="text-c">
        <th width="15">ID</th>
        <th width="50">名称</th>
        <th width="60">缩略图</th>
        <th width="60">排序</th>
        <th width="60">类别</th>
        <th width="60">状态</th>
        <th width="50">操作</th>
      </tr>
      </thead>
      <tbody>
       <?php if(is_array($deals) || $deals instanceof \think\Collection || $deals instanceof \think\Paginator): if( count($deals)==0 ) : echo "" ;else: foreach($deals as $key=>$vo): ?>
      <tr class="text-c listorder">
        <td><?php echo $vo['id']; ?></td>
        <td><?php echo $vo['name']; ?></td>
        <td><img src="<?php echo $vo['image']; ?>" width="80px"/></td>
        <td><input type="text" value="<?php echo $vo['listorder']; ?>" d-id="<?php echo $vo['id']; ?>" style="width:30px" /></td>
        <td><?php echo $categorys[$vo['category_id']]; ?></td>
        <td class="td-status"><?php echo status($vo['status']); ?></td>
        <td class="td-manage"><a style="text-decoration:none" class="ml-5" href="<?php echo url('deal/edit',['id'=>$vo['id']]); ?>" title="查看"><i class="Hui-iconfont">&#xe6df;</i></a>
          <a style="text-decoration:none" class="ml-5"  href="<?php echo url('deal/status',['id'=>$vo['id'],'status'=>-1]); ?>" title="下架"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
      </tr>
          <?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
    </table>
  </div>
</div>
<div class="tp5-o2o pagination"><?php echo $deals->render(); ?></div>
<!--包含头部文件-->
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>  
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__STATIC__/admin/hui/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/common.js"></script>
<script type="text/javascript" src="__STATIC__/admin/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/image.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>

<script type="text/javascript">
    var SCOPE={
        'listorder_url':'<?php echo url("deal/listorder"); ?>'
    }

</script>