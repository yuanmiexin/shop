<?php

namespace app\bis\controller;

use think\Controller;

class Login extends Controller
{
   public function index()
   {
       if(request()->isPost())
       {
           $data=input('post.');
           $user=model('BisAccount')->getNormal($data['username']);
           //halt($user['password']);
           if(!$user)
           {
               return $this->error("该用户未通过审核或不存在");
           }
           if($user['password']!=md5($data['password'].$user['code']))
           {
               return $this->error("密码错误");
           }
           session('user',$user);
           //halt(session('user')->username);
           return $this->success('登录成功','index/index');
       }
       return $this->fetch();

   }

   public function logout()
   {
       session(null);
       $this->redirect('bis/login/index');
   }
}
