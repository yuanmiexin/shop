<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\proinfo\order.html";i:1499423567;s:62:"E:\phpStudy\WWW\shop\public/../application/home\view\base.html";i:1498204250;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\header.html";i:1499312616;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\footer.html";i:1499068012;}*/ ?>
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

    </div>


<div class="neiyeR">
<div class="cont" >
    <div class="carImg"><img src="__STATIC__/home/images/car1.jpg" width="715" height="27" /></div>
    <table class="orderList" style="font-size:12px">
        <tr >
            <th width="20"></th>
            <th width="330">商品</th>
            <th width="100">单价</th>
            <th width="100">数量</th>
            <th width="100">总金额</th>
            <th>操作</th>
        </tr>
        <tbody id="tab">
        <?php if(is_array($deals) || $deals instanceof \think\Collection || $deals instanceof \think\Paginator): if( count($deals)==0 ) : echo "" ;else: foreach($deals as $key=>$vo): ?>
        <tr >
            <td><input type="checkbox" /></td>
            <td>
                <dl>
                    <dt><a href="<?php echo url('home/proinfo/index',['id'=>$vo['deal_id']]); ?>"><img src="<?php echo $vo['image']; ?>" width="85" height="85" /></a></dt>
                    <dd><?php echo $vo['deal_name']; ?><br /><span class="red">有货：</span>从上海出发</dd>
                    <div class="clears"></div>
                </dl>
            </td>
            <td><strong class="red">￥<?php echo $vo['price']; ?></strong></td>
            <td>
                <div class="jia_jian">
                    <img src="__STATIC__/home/images/jian.jpg" width="21" height="25" id="<?php echo $vo['id']; ?>" class="jian"/>
                    <input type="text" class="shuliang" id="count<?php echo $vo['id']; ?>"  d-id="<?php echo $vo['id']; ?>" value="<?php echo $vo['count']; ?>" />
                    <input type="hidden"  id="total_count<?php echo $vo['id']; ?>" value="<?php echo $total_count[$vo['deal_id']]; ?>" />
                    <img src="__STATIC__/home/images/jia.jpg" width="21" height="25" id="<?php echo $vo['id']; ?>" class="jia" />
                </div>
            </td>
            <td><strong class="red" id="total_price<?php echo $vo['id']; ?>">￥<span class="price"><?php echo $vo['price']*$vo['count']; ?></span></strong></td>
            <td><a href="#" class="green">收藏</a><br /><a href="<?php echo url('home/order/status',['id'=>$vo['id'],'status'=>-1]); ?>" class="green">删除</a></td>
        </tr>
         <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
        <tr>
            <td colspan="6"><div class="shanchu"><img src="__STATIC__/home/images/lajio.jpg" /> 全部删除</div></td>
        </tr>
    </table><!--orderList/-->
    <div class="zongji">
        总计(不含运费)：<strong class="red">￥<span id="total"></span></strong>
    </div><!--zongji/-->
    <div class="jiesuan" style="margin-bottom: 10px">
        <a href="<?php echo url('deal/index'); ?>" class="jie_1">继续购物&gt;&gt;>></a>
        <a href="" class="jie_2">立即结算&gt;&gt;</a>
        <div class="clears"></div>
    </div><!--jiesuan/-->
    <div class="clears"></div>
</div><!--cont/-->
</div>
</div>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="__STATIC__/home/js/common.js"></script>
<script type="text/javascript">
$(function(){

    $(".jia").click(function(){

        var id=$(this).attr('id');
        var total_count=$('#total_count'+id).val();
        var count=$('#count'+id).val();
      // alert(total_count);
        var url="<?php echo url('order/dealcount'); ?>";

        count++;
        if(count<=total_count)
        {

            var postdata={
                'count':count,
                'id':id,
            };
            $.get(url,postdata,function(resunlt){
                //alert(resunlt);
                   var total_price=resunlt.data.count*resunlt.data.price;
                   //alert(total_price);

                $('#count'+id).val(resunlt.data.count);
                $('#total_price'+id+' span').html(total_price);

                setTotal();
            },'json');

        }else{
            alert('库存不足');
            return false;
        }

    });

    $(".jian").click(function(){

        var id=$(this).attr('id');
        var total_count=$('#total_count'+id).val();
        var count=$('#count'+id).val();
        // alert(total_count);
        var url="<?php echo url('order/dealcount'); ?>";
        count=count-1;
        if(count>1)
        {

            var postdata={
                'count':count,
                'id':id,
            };
            $.get(url,postdata,function(resunlt){
                //alert(resunlt);
                var total_price=resunlt.data.count*resunlt.data.price;
                //alert(total_price);

                $('#count'+id).val(resunlt.data.count);
                $('#total_price'+id+' span').html(total_price);
                setTotal();
            },'json');

        }else{
            alert('库存不足');
            return false;
        }

    });

    $(".shuliang").blur(function(){

        var id=$(this).attr('d-id');
        //alert(id);

        var count=$(this).val();
        // alert(total_count);
        var url="<?php echo url('order/dealcount'); ?>";


        // alert(id);
        if(count>0 && count<=total_count)
        {
            var postdata={
                'count':count,
                'id':id,
            };
            $.get(url,postdata,function(resunlt){
                //alert(resunlt);
                var total_price=resunlt.data.count*resunlt.data.price;
                //alert(total_price);

                $('#count'+id).val(resunlt.data.count);
                $('#total_price'+id+' span').html(total_price);
                setTotal();
            },'json');

        }else if(count<=0){
            alert('请输入正确的数量');
            return false;
        }else {
            alert('库存不足');
            return false;
        }

    });

    function setTotal(){
        var s=0;
        $("#tab tr").each(function(){
            s+=parseFloat($(this).find('span[class*=price]').text());
        });
        //var price=md5(s);
        //alert(price);
        var urlse="<?php echo url('order/orderaccount',['status'=>1,'out_number'=>$out_number]); ?>"+"&total_price="+s;

        $("#total").html(s.toFixed(2));
        $(".jie_2").attr("href",urlse)
    }
    setTotal();


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
