<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:75:"E:\phpStudy\WWW\shop\public/../application/home\view\proinfo\orderlist.html";i:1499505002;s:62:"E:\phpStudy\WWW\shop\public/../application/home\view\base.html";i:1498204250;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\header.html";i:1499312616;s:71:"E:\phpStudy\WWW\shop\public/../application/home\view\public\footer.html";i:1499068012;}*/ ?>
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
    <div class="cont" style="font-size:12px">
        <div class="carImg"><img src="__STATIC__/home/images/car2.jpg" width="715" height="27" /></div>
        <h4 class="orderTitle">收货地址</h4>
        <table class="ord" style="font-size:12px">
            <?php if(is_array($address) || $address instanceof \think\Collection || $address instanceof \think\Paginator): if( count($address)==0 ) : echo "" ;else: foreach($address as $key=>$vo): ?>
            <tr>
                <td width="30%">
                    <input type="radio" name="user" value="<?php echo $vo['id']; ?>"/> <?php echo $vo['recipients']; ?>
                </td>
                <td width="50%">
                    <?php echo $adrcity[$vo['city_id']]; ?>,<?php echo $adrcity[$vo['se_city_id']]; ?>,<?php echo $vo['address']; ?>
                </td>
                <td>
                    <span class="green upd">[修改]</span> | <span class="green add">[添加]</span>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </table><!--ord/-->
        <form action="<?php echo url('home/order/addressadd',['out_number'=>$out_number]); ?>" method="post">
        <div class="address" style="font-size:12px">
            <div class="addList">
                <label><span class="red">* </span>选择地区:</label>
                <select name="city_id" class="cityId" style="float:left">
                    <option>请选择省</option>
                    <?php if(is_array($citys) || $citys instanceof \think\Collection || $citys instanceof \think\Paginator): if( count($citys)==0 ) : echo "" ;else: foreach($citys as $key=>$vo): ?>
                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                 <span id="box" style="display:none;float:left">
				<select name="se_city_id" class="select se_city_id">

				</select>
                 </span>

            </div><!--addList-->
            <div class="addList">
                <label><span class="red">* </span>详细地址:</label>
                <input type="text" name="address" />
            </div><!--addList-->
            <div class="addList">
                <label><span class="red">* </span>邮政编码:</label>
                <input type="text" name="zcode" />
            </div><!--addList-->
            <div class="addList">
                <label><span class="red">* </span>收件人:</label>
                <input type="text" name="recipients" />
            </div><!--addList-->
            <div class="addList">
                <label><span class="red">* </span>手机号码:</label>
                <input type="text" name="mobile"/>
            </div><!--addList-->
            <div class="addList2">
                <input type="image" src="__STATIC__/home/images/queren.jpg" width="100" height="32" />
            </div><!--addList2/-->
        </div><!--address/-->
        </form>
        <h4 class="orderTitle">购物清单</h4>
        <table class="orderList" style="font-size:12px">
            <tr>
                <th width="20"></th>
                <th width="400">商品</th>
                <th width="100">单价</th>
                <th width="100">数量</th>
                <th width="100">总金额</th>
                <th width="40">操作</th>
            </tr>
            <?php if(is_array($deals) || $deals instanceof \think\Collection || $deals instanceof \think\Paginator): if( count($deals)==0 ) : echo "" ;else: foreach($deals as $key=>$vo): ?>
            <tr>
                <td><input type="checkbox" /></td>
                <td>
                    <dl>
                        <dt><a href="proinfo.html"><img src="<?php echo $vo['image']; ?>" width="85" height="85" /></a></dt>
                        <dd><?php echo $vo['deal_name']; ?><br /><span class="red">有货：</span>从上海出发</dd>
                        <div class="clears"></div>
                    </dl>
                </td>
                <td><strong class="red">￥<?php echo $vo['price']; ?></strong></td>
                <td>
                    <div class="jia_jian">

                        <span style="line-height:2em"><?php echo $vo['count']; ?></span>

                    </div>
                </td>
                <td><strong class="red">￥<?php echo $vo['price']*$vo['count']; ?></strong></td>
                <td><a href="#" class="green">收藏</a><br /><a href="<?php echo url('home/order/status',['id'=>$vo['id'],'status'=>-1]); ?>" class="green">删除</a></td>
            </tr>
           <?php endforeach; endif; else: echo "" ;endif; ?>
            <tr >
                <td colspan="6" ><div class="shanchu" style="float:right;font-size: 16px"><img src="__STATIC__/home/images/help4.jpg" />
                    <a href="<?php echo url('deal/index',['out_number'=>$out_number]); ?>">继续购买</a></div></td>
            </tr>
        </table><!--orderList/-->
        <h4 class="orderTitle">支付方式</h4>
        <ul class="zhiList">
            <li>网银支付-借记卡</li>
            <li>网银支付-信用卡</li>
            <li>财付通-余额支付</li>
            <li>支付宝-余额支付</li>
            <div class="clears"></div>
        </ul><!--zhiList/-->
        <div class="zhifufangshi">
            <ul class="yinhang">
                <?php if(is_array($pay) || $pay instanceof \think\Collection || $pay instanceof \think\Paginator): if( count($pay)==0 ) : echo "" ;else: foreach($pay as $key=>$vo): if($vo['type'] == 1): ?>
                <li><input type="radio" name="pay" value="<?php echo $vo['id']; ?>" /><img src="<?php echo $vo['image']; ?>" /></li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <div class="clears"></div>
            </ul>
        </div><!--zhzhifufangshii/-->
        <div class="zhifufangshi">
            <ul class="yinhang">
                <?php if(is_array($pay) || $pay instanceof \think\Collection || $pay instanceof \think\Paginator): if( count($pay)==0 ) : echo "" ;else: foreach($pay as $key=>$vo): if($vo['type'] == 1): ?>
                <li><input type="radio" name="pay" value="<?php echo $vo['id']; ?>"/><img src="<?php echo $vo['image']; ?>" /></li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>

                <div class="clears"></div>
            </ul>
        </div><!--zhzhifufangshii/-->
        <div class="zhifufangshi">
            <ul class="yinhang">
                <?php if(is_array($pay) || $pay instanceof \think\Collection || $pay instanceof \think\Paginator): if( count($pay)==0 ) : echo "" ;else: foreach($pay as $key=>$vo): if($vo['type'] == 2): ?>
                <li><input type="radio" name="pay" value="<?php echo $vo['id']; ?>"/><img src="<?php echo $vo['image']; ?>" /></li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </ul>
        </div><!--zhzhifufangshii/-->
        <div class="zhifufangshi">
            <ul class="yinhang">
                <?php if(is_array($pay) || $pay instanceof \think\Collection || $pay instanceof \think\Paginator): if( count($pay)==0 ) : echo "" ;else: foreach($pay as $key=>$vo): if($vo['type'] == 3): ?>
                <li><input type="radio" name="pay" value="<?php echo $vo['id']; ?>" /><img src="<?php echo $vo['image']; ?>" /></li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </ul>
        </div><!--zhzhifufangshii/-->
        <table class="zongjia" align="right">
            <tr>
                <td width="120" align="left">商品总价：</td>
                <td width="60"><strong class="red">￥<?php echo $price['total_price']; ?></strong></td>
            </tr>
          <!--  <tr>
                <td width="120" align="left">运费总额：</td>
                <td><strong class="red">+121.88</strong></td>
            </tr>
            <tr>
                <td width="120" align="left">促销优惠：</td>
                <td><strong class="red">+341.88</strong></td>
            </tr>
            <tr>
                <td width="120" align="left">合计：</td>
                <td><strong class="red">+2271.88</strong></td>
            </tr>-->
            <tr>
                <td colspan="2" style="height:50px;">
                    <input type="image" src="__STATIC__/home/images/tijao.png" width="142" height="32" id="pay">
                </td>
            </tr>
        </table><!--zongjia/-->
        <div class="clears"></div>
    </div><!--cont/-->
</div>
</div>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/admin/hui/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="__STATIC__/home/js/common.js"></script>
<script type="text/javascript">
    var SCOPE = {
        'city_url' : '<?php echo url("api/city/indexcity"); ?>',
        'image_upload' : "<?php echo url('api/Image/upload'); ?>",
        'user_url' : "<?php echo url('bis/Register/checkuser'); ?>",
    };
    $(".cityId").change(function () {
        //alert('dfdasfdsf');
        var id=$(this).val();
        var postdata={
            'id':id
        };
        var url=SCOPE.city_url;
//alert(url);
        $(".se_city_id").nextAll().remove();
        $.post(url,postdata,function(result){

            var data=result.data;
            //alert(data);
            if(result.status==1)
            {
                var str_='';
                str_ +='<option value="">--请选择--</option>';
                $(data).each(function(i){
                    str_ += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                })
                $("#box").css('display','block');
                $(".se_city_id").append(str_);
            }else if(result.status==0)
            {
                $("#box").css('display','none');
                $(".se_city_id").html('');
            }else if(data == "")
            {
//alert('fjkjkjk');
                $("#box").css('display','none');
                $(".se_city_id").html('');

            }

        },'json')
    })

    $("#pay").click(function () {
        var address=$("input[name=user]:checked").val();
        if(!address)
        {
            alert("请配送地址");
            return false;
        }
        var pay=$("input[name=pay]:checked").val();
        if(!pay)
        {
            alert("请选择支付方式");
            return false;
        }
        var out_number="<?php echo $out_number; ?>";
       // alert(out_number);
        var postdata={
            'address':address,
            'pay':pay,
            'out_number':out_number,
        };
        var url="<?php echo url('home/order/ordersubmit'); ?>";
        $.post(url,postdata,function (result) {
            location.href=result.url+'?out_number='+result.data;
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
