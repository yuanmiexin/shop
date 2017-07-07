<?php
namespace app\admin\validate;

use think\Validate;

class Category extends Validate
{

    protected $rule=[
        'name'=>'require',
        'parent_id'=>'require',
        'listorder'=>'require|number|between:1,9999',
        'type'=>'notIn:0',

    ];
    protected $message=[
        'name.require'=>'请输入分类名',
        'parent_id.require'=>'请选择分类',
        'listorder.require'=>'请输入排序',
        'listorder.number'=>'排序必须为数字',
        'listorder.between'=>'排序必须在1—9999之间',
        'type.notIn'=>'请选择栏目分类'
    ];
}