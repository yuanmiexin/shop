
/*个人信息*/
function change_password(title,url){
	//alert(url);
	var index =layer.open({
		title:title,
		type:2,
		area:['650px','400px'],
      content: url,
      
}); 
}

/*----生活服务类start----*/

/*-添加*/
function category_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*-编辑*/
function category_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*-删除*/
function category_del(url){
	layer.confirm('确认要删除吗？',function(index){
		location.href=url;
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
/*----生活服务类end----*/
/*资讯-添加*/
function article_add(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-编辑*/
function article_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*排序*/
$(".listorder input").blur(function () {
   // alert('hahaahjahaha');
	var url=SCOPE.listorder_url;
	//alert(url);
	var listorder=$(this).val();
	var id=$(this).attr('d-id');
	//alert(listorder+id);
	var postdata={
		'listorder':listorder,
		'id':id
	}
	//alert(postdata);
	$.post(url,postdata,function (result) {
        console.log(result);
        if(result.code == 1) {
            location.href=result.data;
        }else {
            alert(result.msg);
        }
    },'json')
});
/*获取二级城市*/
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
            $("#select-box").css('display','block');
            $(".se_city_id").append(str_);
        }else if(result.status==0)
		{
            $("#select-box").css('display','none');
            $(".se_city_id").html('');
		}else if(data == "")
		{
			//alert('fjkjkjk');
            $("#select-box").css('display','none');
            $(".se_city_id").html('');

		}

	},'json')
})

/*获取二级分类市*/
$(".categoryId").change(function () {
    //alert('dfdasfdsf');
    var id=$(this).val();
    var postdata={
        'id':id
    };
    var url=SCOPE.category_url;
   // alert(id);
    $(".se_category_id").html('');
    $.post(url,postdata,function(result){

        var data=result.data;
       // alert(result);
        if(result.status==1)
        {
            var str_='';

            $(data).each(function(i){
                str_ += '<input type="checkbox" name="se_category_id" style="margin:0px  5px" value="'+data[i].id+'"/>'+data[i].name;
            })
            $(".se_category_id").append(str_);

        }else if(result.status==0)
        {
            //alert(result);
           /* $("#select-box").css('display','none');
            $(".se_city_id").html('');*/
        }else if(data == "")
        {

            //alert('fjkjkjk');
           /* $("#select-box").css('display','none');
            $(".se_city_id").html('');*/

        }

    },'json')
})

/*验证用户民*/
$(".user input").blur(function () {
    //alert('dfdasfdsf');
    var username=$(this).val();
    var postdata={
        'username':username
    };
    var url=SCOPE.user_url;
   //alert(url);

    $.post(url,postdata,function(result){
    	//alert(result.status);
    if(result.status==1)
        {
            var str_='';
                str_ += '<label style="color:green">用户名可用</label>';
            $(".user label").html(str_);

        }else if(result.status==0)
        {
            var str_='';
            str_ += '<label style="color:red">用户名已注册</label>';
            $(".user label").html(str_);

        }else if(result.status==2)
        {
            var str_='';
            str_ += '<label style="color:red">请填写用户名</label>';
            $(".user label").html(str_);
        }
    },'json')
})


