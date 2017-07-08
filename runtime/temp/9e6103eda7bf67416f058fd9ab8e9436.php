<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"E:\phpStudy\WWW\shop\public/../application/bis\view\register\index.html";i:1498815082;s:70:"E:\phpStudy\WWW\shop\public/../application/bis\view\public\header.html";i:1498642616;s:70:"E:\phpStudy\WWW\shop\public/../application/bis\view\public\footer.html";i:1498698684;}*/ ?>
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
<link type="text/css" href="__STATIC__/home/css/style.css" rel="stylesheet" rev="stylesheet" media="screen" />

<div class="centBox">
	<div class="top">
		<span>【<a href="<?php echo url('home/login/index'); ?>">登陆</a> 】 【<a href="<?php echo url('bis/login/index'); ?>">申请入驻</a>】
			【<a href="<?php echo url('home/deal/index'); ?>">前往采购</a>】  【<a href="<?php echo url('home/infor/index'); ?>">联系我们</a>】</span>
		您好！欢迎来到中江县名优产品展销平台!     您遇到任何疑问请致电：0838 -6668888
	</div>
	<div class="top2">

		<div class="logo">
			<a href="<?php echo url('home/index/index'); ?>" class="logo_a"></a>
		</div>
	</div>
</div>
<div class="cl pd-5 bg-1 bk-gray mt-20" style="margin:0px auto"> <h1>商户入驻申请</h1></div>
<article class="page-container">
	<form class="form form-horizontal"  method="post" action="<?php echo url('register/add'); ?>" >
	基本信息：
		<div class="row cl" >
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商户名称：</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="" placeholder="" id="" name="name">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>所属城市：</label>
			<div class="formControls col-xs-8 col-sm-2">
				<span class="select-box">
				<select name="city_id" class="select cityId">
					<option value="">--请选择--</option>
                    <?php if(is_array($citys) || $citys instanceof \think\Collection || $citys instanceof \think\Paginator): if( count($citys)==0 ) : echo "" ;else: foreach($citys as $key=>$vo): ?>
					  <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                     <?php endforeach; endif; else: echo "" ;endif; ?>

				</select>
				</span>
			</div>
			<div class="formControls col-xs-8 col-sm-2">
				<span class="select-box" id="select-box"  style="display: none">
				<select name="se_city_id" class="select se_city_id">

				</select>
				</span>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">缩略图：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input id="file_upload"  type="file" multiple="true" name="logo">
				<img style="display: none" id="upload_org_code_img" src="" width="150" height="150">
				<input id="file_upload_image" name="logo" type="hidden" multiple="true" value="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">营业执照：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input id="file_upload_other"  type="file" multiple="true" name="licence_logo">
				<img style="display: none" id="upload_org_code_img_other" src="" width="150" height="150">
				<input id="file_upload_image_other" name="licence_logo" type="hidden" multiple="true" value="">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">合作社介绍：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<p><script id="editor1"  type="text/plain" name="introduction" style="width:80%;height:300px;"></script></p>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">合作社简略信息：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<p><script id="editor5"  type="text/plain" name="notes" style="width:80%;height:300px;"></script></p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">银行账号:</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="" placeholder="" name="bank_info">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">开户行名称:</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="" placeholder=""  name="bank_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">开户行姓名:</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="" placeholder=""  name="bank_user">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">法人:</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="" placeholder="" name="faren">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">法人电话:</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="" placeholder=""  name="faren_tel">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="" placeholder=""  name="email">
			</div>
		</div>
		合作社信息：
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">电话:</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="" placeholder="" name="tel">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">联系人:</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="" placeholder=""  name="contact">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>所属分类：</label>
			<div class="formControls col-xs-8 col-sm-3"> <span class="select-box">
				<select name="category_id" class="select categoryId">
					<option value="0">--请选择--</option>
                       <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): if( count($categorys)==0 ) : echo "" ;else: foreach($categorys as $key=>$vo): ?>
					<option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                      <?php endforeach; endif; else: echo "" ;endif; ?>

				</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">所属子类：</label>
			<div class="formControls col-xs-8 col-sm-3 skin-minimal" >
				<div class="check-box se_category_id">

				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商户地址：</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" class="input-text" value="" placeholder=""  name="address">
			</div>
			<a  class="btn btn-default radius ml-10 maptag">标注</a>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">营业时间:</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="text" onfocus="WdatePicker()" class="input-text" value="" placeholder=""  name="open_time">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">技术支持：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<p><script id="editor"  type="text/plain" name="technology" style="width:80%;height:300px;"></script></p>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">行业前景：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<p><script id="editor2"  type="text/plain" name="outlook" style="width:80%;height:300px;"></script></p>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">生产基地：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<p><script id="editor3"  type="text/plain" name="base" style="width:80%;height:300px;"></script></p>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">致富故事：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<p><script id="editor4"  type="text/plain" name="become" style="width:80%;height:300px;"></script></p>
			</div>
		</div>

		账号信息：
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">用户名:</label>
			<div class="formControls col-xs-8 col-sm-3 user">
				<input type="text" class="input-text" value=""   name="username">
			<label> </label>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">密码:</label>
			<div class="formControls col-xs-8 col-sm-3">
				<input type="password" class="input-text" value="" placeholder=""  name="password">
			</div>
		</div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 申请</button>
			</div>
		</div>
	</form>
</article>

<!--包含尾部文件-->
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

	$(function(){
		var ue = UE.getEditor('editor');
		var ue1 = UE.getEditor('editor1');
		var ue2 = UE.getEditor('editor2');
		var ue3 = UE.getEditor('editor3');
		var ue4 = UE.getEditor('editor4');
		var ue5 = UE.getEditor('editor5');

	});
 var SCOPE = {
   'city_url' : '<?php echo url("api/city/indexcity"); ?>',
	'category_url' : "<?php echo url('api/category/getCategoryByParentId'); ?>",
    'uploadify_swf' : '__STATIC__/admin/uploadify/uploadify.swf',
	'image_upload' : "<?php echo url('api/Image/upload'); ?>",
	'user_url' : "<?php echo url('bis/Register/checkuser'); ?>",
 };
</script>
<!--分配编辑器-->
</body>
</html>
