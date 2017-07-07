<?php

namespace app\home\validate;

use think\Validate;

class Message extends Validate
{
    protected $rule=[
        'contact'=>'require',
        'mobile'=>'require|number',
        'content'=>'require',
    ];

    protected $message=[
        'contact.require'=>'请输入联系人',
        'mobile.require'=>'请填写手机号',
        'mobile.number'=>'请输入正确的手机号',
        'content.require'=>'请输入内容',
    ];
}