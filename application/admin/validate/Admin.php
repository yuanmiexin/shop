<?php
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{

    protected $rule=[
        'admin_name'=>'require',
        'admin_password'=>'require',

    ];
    protected $message=[
        'admin_name.require'=>'未输入用户名或用户名不正确',
        'admin_password.require'=>'未输入密码或密码错误',
    ];
}