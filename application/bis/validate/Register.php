<?php
namespace app\bis\validate;

use think\Validate;

class Register extends Validate
{
    protected $rule=[
        'name'=>'require',
        'city_id'=>'require',
        'logo'=>'require',
        'licence_logo'=>'require',
        'bank_info'=>'require|number',
        'bank_name'=>'require',
        'bank_user'=>'require',
        'faren'=>'require',
        'faren_tel'=>'require|number',
        'email'=>'email',
        'tel'=>'require|number',
        'contact'=>'require',
        'category_id'=>'require',
        'address'=>'require',
        'open_time'=>'require|date',
        'username'=>'require',
        'password'=>'require',
    ];

    protected $message=[
        'name.require'=>'请输入店名',
        'city_id.require'=>'请选择城市',
        'logo.require'=>'请上传logo',
        'licence_logo.require'=>'请上传营业执照',
        'bank_info.require'=>'请输入银行账号',
        'bank_info.number'=>'银行账号不合法',
        'bank_name.require'=>'请输入开户行名称',
        'bank_user.require'=>'请输入开户人姓名',
        'faren.require'=>'请输入法人',
        'faren_tel.require'=>'请输入法人电话',
        'faren_tel.number'=>'法人电话不合法',
        'email.email'=>'请输入正确的邮箱地址',
        'tel.require'=>'请输入联系电话',
        'tel.number'=>'联系电话不合法',
        'contact.require'=>'请输入联系人',
        'category_id.require'=>'请选择分类',
        'address.require'=>'请输入地址',
        'open_time.require'=>'请输入开业时间',
        'open_time.date'=>'时间不合法',
        'username.require'=>'请输入用户名',
        'password.require'=>'请输入密码',
    ];
}
