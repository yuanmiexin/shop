<?php

namespace app\admin\controller;
use app\common\model\Admin;
use think\Controller;

class Login extends Controller
{
    /**
     * 加载首页
     * @return mixed
     */
    public function index()
    {
      if(request()->isPost())
      {
           $res=(new Admin())->login(input('post.'));
          if($res['valid'])
          {
           // return alert($res["msg"],'index/index',6,3);
           return $this->success($res['msg'],'index/index');exit;
          }else{

              return $this->error($res['msg']);exit;
          }
      }
        return $this->fetch();

    }
    /**
     * 退出登录
     */
    public function logout()
    {
        session('admin.admin_id',null);
        session('admin.admin_name',null);
         $this->success('退出成功','admin/login/index');

    }
}
