<?php
namespace app\admin\validate;

use think\Validate;

class News extends Validate
{

    protected $rule=[
        'title'=>'require',
        'category_id'=>'notIn:0',
        'content'=>'require',

    ];
    protected $message=[
        'title.require'=>'请输入新闻名称',
        'category_id.notIn'=>'请选择分类',
        'content.require'=>'请输入新闻内容',

    ];
}