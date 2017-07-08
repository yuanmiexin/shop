/**
 * Created by Administrator on 2017/7/3.
 */
/*验证用户名*/
$('input[name^="username"]').blur(function(){
    //alert('dadfafads');
    var user=$(this).val();
    //alert(user);
    var postdata={
        'user':user
    };
    var url=SCOPE.url;
    //alert(url);
    $.post(url,postdata,function(result)
    {
            if(result.status==0)
            {
               var str='<label style="color:red">✘请输入用户名</label>';
               $('#username').html('');
               $('#username').append(str);
            }else if(result.status==1)
            {
                var str='<label style="color:red">✘用户名已存在</label>';
                $('#username').html('');
                $('#username').append(str);
            }
            else if(result.status==2)
           {
               var str='<label style="color:green">✔用户名可用</label>';
               $('#username').html('');
               $('#username').append(str);
           }
    },'json');
});
/*验证邮箱*/
  $('input[name^="email"]').blur(function(){
        //alert('dadfafads');
        var email=$(this).val();
        //alert(email);
        var postdata={
            'email':email
        };
        var url=SCOPE.url;
        //alert(url);
        $.post(url,postdata,function(result)
        {
            if(result.status==0)
            {
                var str='<label style="color:red">✘请输入邮箱</label>';
                $('#email').html('');
                $('#email').append(str);
            }else if(result.status==1)
            {
                var str='<label style="color:red">✘邮箱已使用</label>';
                $('#email').html('');
                $('#email').append(str);
            }
            else if(result.status==2)
            {
                var str='<label style="color:green">✔邮箱可用</label>';
                $('#email').html('');
                $('#email').append(str);
            }
        },'json');

});
/*验证密码*/
$('input[name^="password"]').blur(function(){
    //alert('dadfafads');
    var password=$(this).val();
    //alert(email);
    //alert(url);
    if(password=='')
    {
        var str='<label style="color:red">✘请输入密码</label>';
        $('#password').html('');
        $('#password').append(str);
    }else{
        var str='<label style="color:green">✔</label>';
        $('#password').html('');
        $('#password').append(str);
    }

});

$('input[name^="repassword"]').blur(function(){
    //alert('dadfafads');
    var password=$('input[name^="password"]').val();
    var repassword=$(this).val();

    //alert(email);
    //alert(url);
    if(repassword=='')
    {
        var str='<label style="color:red">✘请确认密码</label>';
        $('#repassword').html('');
        $('#repassword').append(str);
    }else if(repassword!==password)
    {
        var str='<label style="color:red">✘两次输入的密码不一致</label>';
        $('#repassword').html('');
        $('#repassword').append(str);
    }else
        {
        var str='<label style="color:green">✔</label>';
        $('#repassword').html('');
        $('#repassword').append(str);
    }

});

/*验证验证码*/
$('input[name^="code"]').blur(function(){
    //alert('dadfafads');
    var code=$(this).val();
    //alert(email);
    //alert(url);
    if(code=='')
    {
        var str='<label style="color:red">✘请输入验证码</label>';
        $('#code').html('');
        $('#code').append(str);
    }else{
        var str='<label style="color:green">&nbsp;</label>';
        $('#code').html('');
        $('#code').append(str);
    }

});

/*商品的增加减少 start*/
$(".prod_jia").click(function(){
    var count=$('.prod_tetx').val();
    //alert(num);
    var url=SOPE.url;
    var id=SOPE.deal_id;
    var urlse=SOPE.urlse;
    var image=SOPE.image_src;
    // alert(id);
    count=count-1;
    if(count>0)
    {

        var postdata={
            'count':count,
            'id':id,
        };
        $.get(url,postdata,function(resunlt){
            //alert(resunlt);
            var str='<a href="'+urlse+'?id='+id+'&count='+resunlt.data+'"><img src="'+image+'" width="117"  height="36" /></a>';
            $('.prod_tetx').val(resunlt.data);
            $('.gc').html(str);
        },'json');
        // $('.prod_tetx').val(num);
    }else{
        return false;
    }
});

$(".prod_jian").click(function(){

    //alert(num);
    var total_count=SOPE.total_count;
    var count=$('.prod_tetx').val();
    count++;
    if(count<=total_count) {


        var url=SOPE.url;
        var id=SOPE.deal_id;
        var urlse=SOPE.urlse;
        var image=SOPE.image_src;
        var postdata = {
            'count': count,
            'id': id,
        };
        $.get(url, postdata, function (resunlt) {
            //alert(resunlt);
            var str='<a href="'+urlse+'?id='+id+'&count='+resunlt.data+'"><img src="'+image+'" width="117"  height="36" /></a>';
            $('.prod_tetx').val(resunlt.data);
            $('.gc').html(str);
        }, 'json');
    }else{
        alert('库存不足');
        return false;
    }
});

$(".prod_tetx").blur(function(){

    //alert(num);
    var total_count=SOPE.total_count;
    var count=$('.prod_tetx').val();
    var url=SOPE.url;
    var id=SOPE.deal_id;
    var urlse=SOPE.urlse;
    var image=SOPE.image_src;
    // alert(id);
    if(count>0 && count<=total_count)
    {
        var postdata={
            'count':count,
            'id':id,
        };
        $.get(url,postdata,function(resunlt){
            //alert(resunlt);
            var str='<a href="'+urlse+'?id='+id+'&count='+resunlt.data+'"><img src="'+image+'" width="117"  height="36" /></a>';
            $('.prod_tetx').val(resunlt.data);
            $('.gc').html(str);
        },'json');

    }else if(count<=0){
        alert('请输入正确的数量');
        return false;
    }else {
        alert('库存不足');
        return false;
    }
});


$(".gc a").click(function () {
    var statu=$("#status").val()
    //alert(statu);
    var count=$(".prod_tetx").val();
    var url="{:url('order/index',['id'=>$deal.id])}"+"&count="+count;
    /* if(statu==1)
     {
     if(confirm('购物车中已有该商品，是否继续添加'))
     {
     return  location.href=url;
     }else{
     return false;
     }
     }else if(statu==0)
     {
     return  location.href=url;
     }*/
});

/*商品的增加减少 end*/
