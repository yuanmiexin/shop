<?php

namespace app\common\model;

use think\Loader;
use think\Model;
use think\Validate;

class Admin extends Model
{
    protected $pk='admin_id';
    protected $table='mytc_admin';

    public function login($data)
    {
        $validate=Loader::validate('Admin');
        if(!$validate->check($data))
        {
            return ['valid'=>0,'msg'=>$validate->getError()];

        }

        $res= db('admin')->where('admin_name',$data['admin_name'])->where('admin_password',md5($data['admin_password']))->find();
        if(!$res) {
            return ['valid' => 0, 'msg' => '用户名或密码不正确'];
        }
         session('admin.admin_id',$res['admin_id']);
         session('admin.admin_name',$res['admin_name']);
        return ['valid'=>1,'msg'=>'登录成功'];
    }

    /**
     * 修改密码
     */
    public function changpass($data)
    {

    //验证输入
     $validate= new Validate([
         'password'=>'require',
         'newpassword'=>'require',
         'confirmword'=>'require|confirm:newpassword', ],
         ['password.require'=>'请输入旧密码',
         'newpassword.require'=>'请输入新密码',
         'confirmword.require'=>'请确认新密码',
         'confirmword.confirm'=>'两次输入的密码不一致',]
     );
    if(!$validate->check($data))
    {
        return ['valid'=>0,'msg'=>$validate->getError()];
    }
       // halt($data);
    //验证原始密码是否正确
        $userinfo =db('admin')->where('admin_id',session('admin.admin_id'))->where('admin_password',md5($data['password']))->find();
        if(!$userinfo)
        {
            return ['valid'=>0,'msg'=>'旧密码输入错误'];
        }
        $res = $this->save([
            'admin_password'  =>md5($data['newpassword']),
        ],[$this->pk => session('admin.admin_id')]);
        if($res)
        {
            return ['valid'=>1,'msg'=>'密码修改成功'];
        }
        else{

            return ['valid'=>0,'msg'=>'密码修改失败'];
        }
   }
}
