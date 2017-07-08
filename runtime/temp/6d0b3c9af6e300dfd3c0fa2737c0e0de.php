<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\proinfo\index.html";i:1499311415;s:62:"E:\phpStudy\WWW\shop\public/../application/home\view\base.html";i:1498204250;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\header.html";i:1499312616;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\footer.html";i:1499068012;}*/ ?>
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
<div class="contRight" style="border:0;">
    <div class="proBox">
        <div id="tsShopContainer">
            <div id="tsImgS"><a href="<?php echo $deal['image']; ?>" title="Images" class="MagicZoom" id="MagicZoom">
                <img  src="<?php echo $deal['image']; ?>" /></a></div>
            <div id="tsPicContainer">
                <div id="tsImgSArrL" onclick="tsScrollArrLeft()"></div>
                <div id="tsImgSCon">
                    <ul>

                        <li onclick="showPic(0)" rel="MagicZoom" class="tsSelectImg"><img height="42" width="42" src="<?php echo $deal['image']; ?>" tsImgS="<?php echo $deal['image']; ?>" /></li>

                    </ul>
                </div>
                <div id="tsImgSArrR" onclick="tsScrollArrRight()"></div>
            </div>
            <img class="MagicZoomLoading" width="16" height="16" src="__STATIC__/home/images/loading.gif" alt="Loading..." />
            <script src="__STATIC__/home/js/ShopShow.js"></script>
        </div><!--tsShopContainer/-->
        <div class="proBoxRight">
            <h3 class="proTitle"><?php echo $deal['name']; ?></h3>
            <!--<div>商品编号： 334011 </div>-->
            <div>产品类别： <?php echo $cate['name']; ?> </div>
            <div>会员价：<strong class="red">¥<?php echo $deal['origin_price']; ?></strong> </div>
            <div>产品规格：<?php echo $deal['format']; ?> </div>
            <div>上架时间：<?php echo $deal['start_time']; ?> </div>
            <div>库存：<?php if($deal['total_count'] > 0): ?><strong class="red">[有货] </strong><?php echo $deal['total_count']; else: ?><strong>[缺货] </strong><?php endif; ?></div>
            <ul class="rongliang">
                <input type="hidden" value="<?php echo $status; ?>" id="status"/>
                <div class="clears"></div>
            </ul><!--rongliang/-->
            <div class="shuliang2">
                <p class="prod_pad">
                    <span class="l">购买数量：</span>
                    <a href="#" class="prod_jia"></a>
                    <input name="count" type="text" class="prod_tetx"  value="<?php echo $deal['count']; ?>" style="height:24px"/>
                    <a href="#" class="prod_jian"></a>
                </p>
            </div><!--shuliang2/-->
            <div class="gc">
                <a href="<?php echo url('order/index',['id'=>$deal['id'],'count'=>$deal['count']]); ?>"><img src="__STATIC__/home/images/goumai.png" width="117"  height="36" /></a>&nbsp;&nbsp;
              <!--  <a href="#"><img src="__STATIC__/home/images/shoucang.png" width="117" height="36" /></a>-->
            </div><!--gc/-->
        </div><!--proRight/-->
        <div class="clears"></div>
    </div><!--proBox/-->
    <ul class="fangyuan">
        <li>商品描述</li>
        <li>商品参数</li>
        <li>商品评论</li>
        <li>商品晒图</li>
        <div class="clears"></div>
    </ul><!--fangyuan/-->
    <div class="fangList">
        <div class="fangPar">
          <?php echo $deal['description']; ?>
        </div><!--fangPar/-->
        <img src="<?php echo $deal['image']; ?>" width="330" height="310" />
    </div><!--fangList/-->
    <div class="fangList">
        商品参数
    </div><!--fangList/-->
    <div class="fangList">
        商品评论
    </div><!--fangList/-->
    <div class="fangList">

        <img src="<?php echo $deal['image']; ?>" width="132" height="129" /><br /><br />

    </div><!--fangList/-->
</div><!--contRight/-->
</div>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/layer/2.1/layer.js"></script>

<script type="text/javascript">
var SOPE={
    'url':"<?php echo url('proinfo/index'); ?>",
    'urlse':"<?php echo url('order/index'); ?>",
    'deal_id':"<?php echo $deal['id']; ?>",
    'image_src':"__STATIC__/home/images/goumai.png",
    'total_count':"<?php echo $deal['total_count']; ?>",
}
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
