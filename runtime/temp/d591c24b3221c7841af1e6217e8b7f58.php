<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"E:\phpStudy\WWW\shop\public/../application/home\view\infor\index.html";i:1499336587;s:62:"E:\phpStudy\WWW\shop\public/../application/home\view\base.html";i:1498204250;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\header.html";i:1499312616;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\footer.html";i:1499068012;}*/ ?>
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
        <span class="mianT_span">留言反馈 | FEEDBACK </span>
    </div>
    <div class="feedbck">
        <form action="<?php echo url('infor/contact'); ?>" method="post">
            <div class="feedb_top">
                <div class="feedb_bate">
                    <table width="200" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="44" class="feedb_td">联系人：</td>
                            <td><input name="contact" type="text" class="feedb_input" /><span class="feedb_span">*</span></td>
                        </tr>
                        <tr>
                            <td height="44" class="feedb_td">联系电话：</td>
                            <td><input name="mobile" type="text"  class="feedb_input"/><span class="feedb_span">*</span></td>
                        </tr>
                        <tr>
                            <td class="feedb_td">内容：</td>
                            <td><textarea name="content" cols="" rows="" class="feedb_tarea"></textarea></td>
                        </tr>
                    </table>

                </div>
                <div class="feedb_tetx">
                    <!--<input type="submit" class="feedb_annl" value="提交" />-->
                    <p>提交</p>
                </div>
            </div>
        </form>
        <div class="feed_deta">
            <div class="feed_xia">
                <div class="feBt">
                    <p class="cb4">Date:2013-09-02 02:20</p>
                    <p>请问我要来加盟你们怎么操作呢？</p>
                </div>
                <div class="feed_xtex">
                    回答：您好，感谢您的询问!入驻我们这边需要您联系我们的客服团队客户团队联系电话是：028-8568-8888.时间9：:0-18:00<br />
                    都有客服接您电话的。                        </div>
            </div>
            <div class="feed_xia">
                <div class="feBt">
                    <p class="cb4">Date:2013-09-02 02:20</p>
                    <p>请问我要来加盟你们怎么操作呢？</p>
                </div>
                <div class="feed_xtex">
                    回答：您好，感谢您的询问!入驻我们这边需要您联系我们的客服团队客户团队联系电话是：028-8568-8888.时间9：:0-18:00<br />
                    都有客服接您电话的。                        </div>
            </div>
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
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/layer/2.1/layer.js"></script>

<script type="text/javascript">
    $(".feedb_tetx").click(function () {


        var url="<?php echo url('api/smasge/index'); ?>";
        var mobile="18200358529";
        var code="589632";
        var postdata={
            'mobile':mobile,
            'code':code,
        }
       // alert(url);
        $.post(url,postdata,function (result) {
                 alert(result);
        },'json');


    });
</script>

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
