<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"E:\phpStudy\WWW\shop\public/../application/home\view\artel\about.html";i:1499131873;s:62:"E:\phpStudy\WWW\shop\public/../application/home\view\base.html";i:1498204250;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\header.html";i:1499312616;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\footer.html";i:1499068012;}*/ ?>
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
        <div class="lanmu">
          <ul id="click">
              <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): if( count($categorys)==0 ) : echo "" ;else: foreach($categorys as $key=>$vo): ?>
              <li><a href="<?php echo url('artel/about',['name'=>$vo['uname'],'id'=>$message['bis_id']]); ?>" class="<?php if($category['id'] == $vo['id']): ?>xuanz<?php endif; ?>"><?php echo $vo['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div class="dianhua">
        <div class="dianhua_top">联系电话</div>
        <div class="dianhua_text">
            联  系  人：<?php echo $message['contact']; ?>（总裁） <br />
            电       话 ：<?php echo $message['tel']; ?><br />
            移动电话 ：	138-8180-1576<br />
            传       真 ：<?php echo $message['tel']; ?><br />
            地       址 ：	<?php echo $message['address']; ?></div>
    </div>
</div>


<div id="block">
    <div id="about">
<div class="neiyeR">

    <?php if($product): ?>
    <div class="neiBT">
        <span class="mianT_span"><?php echo $category['name']; ?> | <?php echo $category['uname']; ?></span>
    </div>
    <div class="product">
        <div class="product_top">
            <div class="product_name">
                <img src="<?php echo $product['image']; ?>" width="396" height="277" alt="" />
            </div>
            <div class="product_info">
                <p class="prod_bt"><?php echo $product['name']; ?></p>
                <p>产品类别：	<?php echo $cate['name']; ?></p>
                <p>产品规格：	<?php echo $product['format']; ?></p>
                <p>产品原产地：<?php echo $city['name']; ?></p>
                <p>产品价格：	<?php echo $product['origin_price']; ?></p>
                <p>上架时间：<?php echo $product['start_time']; ?>月份</p>
                <p class="prod_pad">
                    <span class="l">购买数量：</span>
                    <a href="#" class="prod_jia"></a>
                    <input name="count" type="text" value="1" class="prod_tetx" />
                    <a href="#" class="prod_jian"></a>
                </p>
                <p><a href="<?php echo url('proinfo/order',['id'=>$product['id']]); ?>" class="prod_dg"></a></p>
            </div>
        </div>
        <div class="proTd">
            <div class="proTd_top">
                产品特点
            </div>
            <div class="proTd_yte">
                <?php echo $product['description']; ?>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="neiBT">
        <span class="mianT_span"><?php echo $category['name']; ?> | <?php echo $category['uname']; ?></span>
    </div>
    <div class="feedbck">
        <div class="newsxx" style="font-size:14px">
            <p ><?php echo $information->$data; ?></p></div>
    </div>
    <?php endif; ?>
</div>
</div>
</div>





<script type="text/javascript" src="__STATIC__/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    //alert($("#block"));
 // alert($("#click li a").attr('href'));
   $("#click li a").click(function ()
    {
        //alert('455');

        var parame=$(this).attr('murl');
        var url='<?php echo url("Artel/about"); ?>'
        var parames={
            'type':parame
        };
      // alert(url);
       $.post(url,parames,function(result){

               //alert(result.data);
                /*var result = $(data).find("block");
                $("#block").html(result);*/
                var data=$("#"+result.data);
               // alert(data);
                $('#block').html('');
                $('#block').append(data);

        },'json');

    })

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
