<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"E:\phpStudy\WWW\shop\public/../application/home\view\deal\index.html";i:1499043391;s:62:"E:\phpStudy\WWW\shop\public/../application/home\view\base.html";i:1498204250;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\header.html";i:1499312616;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\footer.html";i:1499068012;}*/ ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="author" content="$Id$" />
    <meta http-equiv="copyright" content="Copyright (C) 2013 * All rights reserved." />
    <meta http-equiv="keywords" content="关键字" />
    <meta http-equiv="description" content="描述" />
    <link type="text/css" href="__STATIC__/home/css/style.css" rel="stylesheet" rev="stylesheet" media="screen" />
    <link type="text/css" href="__STATIC__/home/css/css.css" rel="stylesheet" rev="stylesheet" media="screen" />
    <title>首页</title>
</head>

<body>
<div class="centBox">
    <div class="top">
        <span>
            <?php if(session('user')): ?>
            【<a href="<?php echo url('login/logout'); ?>">退出登录</a> 】
            【<a href="<?php echo url('home/proinfo/order'); ?>">前往购物车</a>】
            <?php else: ?>
            【<a href="<?php echo url('login/index'); ?>">登陆</a> 】
             <?php endif; ?>
            【<a href="<?php echo url('bis/login/index'); ?>">申请入驻</a>】    【<a href="<?php echo url('infor/index'); ?>">联系我们</a>】</span>
        <?php if(session('user')): ?> <?php echo session('user')->username; endif; ?>您好！欢迎来到中江县名优产品展销平台!     您遇到任何疑问请致电：0838 -6668888
    </div>
    <div class="top2">
        <div class="top2R">
            <div class="soru">
                <input name="" type="text" class="soru_input" />
            </div>
            <input name="" type="submit" class="soru_banu" />
        </div>
        <div class="logo">
            <a href="<?php echo url('index/index'); ?>" class="logo_a">中江名优特产</a>
        </div>
    </div>
</div>
<div class="nav">
    <div class="nav_nei">
        <div class="natebia_ji"></div>
        <div class="natebia"><p class="natebia_a">特别推荐</p></div>
        <div class="navR">
            <ul>
                <li class="navR_bg"><a href="<?php echo url('infor/index'); ?>" class="<?php if($controller == 'infor'): ?>xuanz<?php endif; ?>">给我留言</a></li>
                <li><a href="<?php echo url('deal/index'); ?>" class="<?php if($controller == 'deal'): ?>xuanz<?php endif; ?>">交易专区</a></li>
                <li><a href="<?php echo url('artel/index'); ?>" class="<?php if($controller == 'artel'): ?>xuanz<?php endif; ?>">合作社</a></li>
                <li><a href="<?php echo url('trade/index'); ?>" class="<?php if($controller == 'trade'): ?>xuanz<?php endif; ?>">行业动态</a></li>
                <li><a href="<?php echo url('index/index'); ?>" class="<?php if($controller == 'index'): ?>xuanz<?php endif; ?>">网站首页</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="centBox">
  <div class="neiye clearfix">

  
<div class="neiyeL">
    <div class="banL noel">
        <div class="yuyue">
            <p><a href="#"><img src="__STATIC__/home/text/1.gif" width="232" height="213" alt="" />
                中江瓜蒌</a></p>
            <p><a href="#" class="yuyue_a"></a></p>
        </div>
    </div>

    <div class="banL noel">
        <div class="hezuo_top" style="padding:0px 75px;background: #FBAE2F;border-radius: 3px"><h3 style="line-height:2;color:whitesmoke;"><a href="<?php echo url('home/infor/inquiry'); ?>"> 我要求购</a></h3></div>
    </div>

    <div class="hezuo">
        <div class="hezuo_top">推荐合作单位</div>
        <div class="hezuo_text">
            <ul>
                <li><a href="#"><img src="__STATIC__/home/text/9.gif" width="206" height="60" alt="" /></a></li>
                <li><a href="#"><img src="__STATIC__/home/text/10.gif" width="206" height="60" alt="" /></a></li>
                <li><a href="#"><img src="__STATIC__/home/text/11.gif" width="206" height="60" alt="" /></a></li>
                <li><a href="#"><img src="__STATIC__/home/text/12.gif" width="206" height="60" alt="" /></a></li>
                <li><a href="#"><img src="__STATIC__/home/text/13.gif" width="206" height="60" alt="" /></a></li>
            </ul>
        </div>
    </div>
</div>


<div class="neiyeR">
    <div class="neiBT">
        <span class="mianT_span">行业信息 | INFORMATION </span>
    </div>
    <div class="neiText">
        <div class="neiIfino">
            <ul>
                <li class="neiNt l">全部分类</li>
               <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): if( count($categorys)==0 ) : echo "" ;else: foreach($categorys as $key=>$vo): ?>
                <li class="r"><a href="<?php echo url('deal/index',['id'=>$vo['id']]); ?>" class="<?php if($category['id'] == $vo['id']): ?>xuanz<?php endif; ?>"><?php echo $vo['name']; ?></a>|</li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="tuwenli clearfix">
            <ul>
               <?php if(is_array($deal) || $deal instanceof \think\Collection || $deal instanceof \think\Paginator): if( count($deal)==0 ) : echo "" ;else: foreach($deal as $key=>$vo): ?>
                <li>
                    <p><a href="<?php echo url('proinfo/index',['id'=>$vo['id']]); ?>"><img src="<?php echo $vo['image']; ?>" width="208" height="177" alt="" /> <?php echo $vo['name']; ?></a></p>
                    <p><a href="<?php echo url('proinfo/index',['id'=>$vo['id']]); ?>" class="yuyue_a"></a></p>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="feiye">
            <ul>
                <li><input type="submit" value="确定" class="feiye_ban" />
                <li>到第<input name="" type="text" class="feiye_ingp" />页</li>
                <li><a href="#">下一页</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#" class="xuanz">1</a></li>
                <li><a href="#" class="feiye_hs">上一页</a></li>
                </li>
            </ul>
        </div>
    </div>
</div>

</div>
</div>

<div class="fooer">
    <div class="fooer_nei">
        服务中心  |  联系我们  |  平台介绍  |  网站地图  |  邮件反馈  |  友情链接<br />
        客服热线：0838-8888888  平台名称：展销网 <br />
        中江县名优产品展销　
        <p><a href="#"><img src="__STATIC__/home/images/jg.gif" /></a></p>
    </div>
</div>
<script type="text/javascript" src="__STATIC__/home/js/jquery.js"></script>
<script type="text/javascript" src="__STATIC__/home/js/js.js"></script>
<script src="__STATIC__/home/js/MagicZoom.js" type="text/javascript"></script>
<script src="__STATIC__/home/js/wb.js" type="text/javascript" charset="utf-8"></script>
<script src="__STATIC__/home/js/common.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
