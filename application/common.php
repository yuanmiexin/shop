<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function menu()
{
    $clomun=[
        'Article'=>[
            'name'=>'分类管理',
            'cate'=>[
                [ 'name'=>'生活服务类管理',
                    'url'=>'category/index',
                    'insert'=>'article/add',
                    'update'=>'article/upd',
                    'delete'=>'article/del',],
                [ 'name'=>'支付方式管理',
                    'url'=>'category/pay',
                    'insert'=>'article/add',
                    'update'=>'article/upd',
                    'delete'=>'article/del',],
            ]
        ],

        'City'=>[
            'name'=>'城镇管理',
            'cate'=>[
                [ 'name'=>'城镇列表',
                    'url'=>'city/index',
                    'insert'=>'city/add',
                    'update'=>'city/upd',
                    'delete'=>'city/del',],
            ]
        ],

        'Product'=>[
            'name'=> '产品管理',
            'cate'=>[
                ['name'=>'推荐合作单位管理',
                    'url'=>'product/nominate',
                    'insert'=>'product/cateadd',
                    'update'=>'product/cateupd',
                    'delete'=>'product/catedel',],
                ['name'=>'推荐列表',
                    'url'=>'product/prolist',
                    'insert'=>'product/cateadd',
                    'update'=>'product/cateupd',
                    'delete'=>'product/catedel',],
                ['name'=>'产品管理',
                    'url'=>'product/index',
                    'insert'=>'product/add',
                    'update'=>'product/upd',
                    'delete'=>'product/del',],
            ]
        ],
        'Union'=>[
            'name'=> '商家入驻',
            'cate'=>[
                ['name'=>'商家信息列表',
                    'url'=>'Union/unionlist',
                    'insert'=>'Union/add',
                    'update'=>'Union/upd',
                    'delete'=>'Union/del',],
                ['name'=>'入驻申请列表',
                    'url'=>'Union/index',
                    'insert'=>'Union/add',
                    'update'=>'Union/upd',
                    'delete'=>'Union/del',],
            ]
        ],
        'SMS' =>[
            'name'=>'消息管理',
            'cate'=>[
                ['name'=>'咨询消息列表',
                    'url'=>'message/index',
                    'insert'=>'message/add',
                    'update'=>'message/upd',
                    'delete'=>'message/del',],
                ['name'=>'求购消息列表',
                    'url'=>'message/inquiry',
                    'insert'=>'message/add',
                    'update'=>'message/upd',
                    'delete'=>'message/del',],
                ['name'=>'回收站',
                    'url'=>'message/recycle',
                    'insert'=>'message/add',
                    'update'=>'message/upd',
                    'delete'=>'message/del',],
            ]
        ],
       /* 'User'=>[
            'name'=>'会员管理',
            'cate'=>[
                ['name'=>'会员列表',
                    'url'=>'user/index',
                    'insert'=>'user/add',
                    'update'=>'user/upd',
                    'delete'=>'user/del',],
                ['name'=>'删除的会员',
                    'url'=>'user/down',
                    'insert'=>'user/add',
                    'update'=>'user/upd',
                    'delete'=>'user/del',],
                ['name'=>'浏览记录',
                    'url'=>'user/look',
                    'insert'=>'user/add',
                    'update'=>'user/upd',
                    'delete'=>'user/del',],
                ['name'=>'下载记录',
                    'url'=>'user/load',
                    'insert'=>'load/add',
                    'update'=>'load/upd',
                    'delete'=>'load/del',],
                ['name'=>'分享记录',
                    'url'=>'user/share',
                    'insert'=>'fire/add',
                    'update'=>'fire/upd',
                    'delete'=>'fire/del',],
            ]
        ],*/
       /* 'Adminstrator'=>[
            'name'=>'管理员管理',
            'cate'=>[
                ['name'=>'角色管理',
                    'url'=>'adminstrator/role',
                    'insert'=>'role/add',
                    'update'=>'role/upd',
                    'delete'=>'role/del',],
                ['name'=>'权限管理',
                    'url'=>'adminstrator/authority',
                    'insert'=>'authority/add',
                    'update'=>'authority/upd',
                    'delete'=>'authority/del',],
                ['name'=>'管理员列表',
                    'url'=>'adminstrator/lists',
                    'insert'=>'adminstrator/add',
                    'update'=>'adminstrator/upd',
                    'delete'=>'adminstrator/del',],
            ]
        ],*/
        'News'=>[
            'name'=>'资讯管理',
            'cate'=>[
                ['name'=>'资讯发布申请',
                    'url'=>'news/index',
                    'insert'=>'news/add',
                    'update'=>'news/upd',
                    'delete'=>'news/del',],
                ['name'=>'资讯列表',
                    'url'=>'news/newslist',
                    'insert'=>'news/add',
                    'update'=>'news/upd',
                    'delete'=>'news/del',],
            ],
        ],
    ];

    return $clomun;
}

/**
 * 获取服务器信息
 */
function info(){
    $info = [
        '操作系统'=>PHP_OS,
        '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
        'PHP运行方式'=>php_sapi_name(),
        '剩余空间'=>round((disk_free_space(".")/(1024*1024)),2).'M',
        '主机名'=>$_SERVER['SERVER_NAME'],
        'WEB服务端口'=>$_SERVER['SERVER_PORT'],
        '网站文档目录'=>$_SERVER["DOCUMENT_ROOT"],
        '浏览器信息'=>substr($_SERVER['HTTP_USER_AGENT'], 0, 40),
        '通信协议'=>$_SERVER['SERVER_PROTOCOL'],
        '请求方法'=>$_SERVER['REQUEST_METHOD'],
        'ThinkPHP版本'=>THINK_VERSION,
        '上传附件限制'=>ini_get('upload_max_filesize'),
        '执行时间限制'=>ini_get('max_execution_time').'秒',
        '服务器时间'=>date("Y年n月j日 H:i:s"),
        '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
        '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
        '用户的IP地址'=>$_SERVER['REMOTE_ADDR'],
    ];
   return $info;
}

function alert($msg='',$url='',$icon='',$time=3){
    $str='<script type="text/javascript" src="/shop/public/static/admin/hui/lib/jquery/1.9.1/jquery.min.js"></script><script type="text/javascript" src="/shop/public/static/admin/hui/lib/layer/2.1/layer.js"></script>';//加载jquery和layer
    $str.='<script>$(function(){layer.confirm("'.$msg.'",{icon:'.$icon.',time:'.($time*1000).'});setTimeout(function(){location.href="'.$url.'"},2000)});</script>';//主要方法
    return $str;
}

function status($status)
{
    if($status==1)
    {
        $str="<span class='label label-success radius'>正常</span>";
    }elseif($status==0)
    {
        $str="<span class='label label-danger radius'>待审</span>";
    }else{
        $str="<span class='label label-danger radius'>已删除</span>";
    }
   return $str;
}

function type($type)
    {
        if($type==1)
        {
            $str="<span >特产类</span>";
        }elseif($type==2)
        {
            $str="<span>资讯类</span>";
        }else{
            $str="<span>其他</span>";
        }
        return $str;
     }

function is_main($main)
{
    if($main==1)
    {
        $str="<span >总店</span>";
    }elseif($main==2)
    {
        $str="<span>分店</span>";
    }

    return $str;
}

function bisRegister($status)
{
    if($status == 1)
    {
        $str = "审核成功";
    }else if($status == 0)
    {
        $str = "未审核,请查看邮件等待";
    }else
    {
        $str = "未审核成功";
    }
    return $str;

}

function doCurl($url, $type=0, $data=[]) {
    $ch = curl_init(); // 初始化
    // 设置选项
    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_HEADER,0);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    if($type == 1) {
        // post

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    //echo "dsf";
    //执行并获取内容

    $output = curl_exec($ch);

    //echo ("sdfg");die;
    // 释放curl句柄
    // halt($output);
    curl_close($ch);

    print_r(json_decode($output,TRUE));
    print_r(json_decode($output,TRUE)[0]['odd']);//打印出来看结果

    return $output;

}



/***************************************************************************************/
//获得账户
function get_user($ch,$apikey){
    curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v2/user/get.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('apikey' => $apikey)));
    return curl_exec($ch);
}
function send($ch,$data){
    curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v2/sms/single_send.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    return curl_exec($ch);
}
function tpl_send($ch,$data){
    curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v2/sms/tpl_single_send.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    return curl_exec($ch);
}
function voice_send($ch,$data){
    curl_setopt ($ch, CURLOPT_URL, 'http://voice.yunpian.com/v2/voice/send.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    return curl_exec($ch);
}
