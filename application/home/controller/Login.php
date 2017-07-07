<?php

namespace app\home\controller;

use think\Controller;
use think\Request;

class Login extends Controller
{
   public function index()
   {
        if(request()->isPost())
        {
           $data=input('post.');

           $user=model('User')->get(['username'=>$data['username']]);
          // halt($user);
           if(!$user || $user['status'] !=1)
           {
               return $this->error('用户名不存在或者为通过审核');
           }
           if($user['password']!==md5($data['password'].$user['code']))
           {
               return $this->error('密码错误，请重新输入');
           }
           session('user',$user);
           return $this->success('登录成功','home/index/index');
        }
       return $this->fetch();
   }

   public function register()
   {
       if(request()->isPost())
       {

           $data=input('post.');
          // halt($data);
           if($data['repassword']!==$data['password'])
           {
             return $this->error('两次输入的密码不一致');
           }else{
               $data['code']=mt_rand(10000,99999);
               $data['password']=md5($data['password'].$data['code']);
           }

           $res=model('User')->add($data);
           if($res['valid'])
           {
               return $this->success($res['msg'],'home/login/index');exit;
           }else{
               return $this->error($res['msg']);exit;
           }

       }
      return $this->fetch();
   }
   public function checked()
   {
      $data=input('post.');
      if(isset($data['user']))
      {
          if($data['user']=='')
          {
          return show(0,'error');
          }
          $email=model('User')->get($data['user']);
          if($email)
          {
              return show(1,'error',$data['user']);
          }else{
              return show(2,'success',$data['user']);
          }
      }
    if(isset($data['email']))
    {
        if($data['email']=='')
        {
            return show(0,'error');
        }
        $email=model('User')->get($data['email']);
        if($email)
        {
            return show(1,'error',$data['email']);
        }else{
            return show(2,'success',$data['email']);
        }

    }
   }

   public function logout()
   {
       session(null);
       return $this->redirect('home/login/index');
   }
}
