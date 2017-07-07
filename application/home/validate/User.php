<?php

namespace app\home\validate;

use think\Validate;

class User extends Validate
{
    protected $rule=[
        'username'=>'require',
        'email'=>'require|email',
        'password'=>'require',
        'repassword'=>'require',

    ];

    protected $message=[
        'username.require'=>'请输入用户名',
        'email.require'=>'请输入邮箱',
        'email.email'=>'请输入正确的邮箱地址',
        'password.require'=>'请输入密码',
        'repassword.require'=>'请确认密码',
        'repassword.confirm'=>'两次输入的密码不一致1',

    ];
}