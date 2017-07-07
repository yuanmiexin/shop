<?php
namespace app\admin\validate;

use think\Validate;

class City extends Validate
{

    protected $rule=[
        'name'=>'require',
        'uname'=>'require|alpha',
        'parent_id'=>'require',
        'listorder'=>'require|number|between:1,9999',
    ];
    protected $message=[
        'name.require'=>'请输入分类名',
        'uname.require'=>'请输入别名',
        'uname.alpha'=>'别名必须为英文',
        'parent_id.require'=>'请选择分类',
        'listorder.require'=>'请输入排序',
        'listorder.number'=>'排序必须为数字',
        'listorder.between'=>'排序必须在1—9999之间',
    ];
}