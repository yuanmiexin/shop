<?php

namespace app\admin\controller;

class Index extends Common
{
    protected $db;
    public function _initialize()
    {
        parent::_initialize();
        $this->db=new \app\common\model\Admin();
    }
    public function index()
    {
        $ip = request()->ip();
        // halt($ip);
        //获取服务器信息

        $info=info();
        //获取菜单目录

        //  halt($menu);
        $this->assign([
            'info'=>$info,
            'ip'=>$ip,

        ]);
        return $this->fetch();
    }
    /**
     * 修改密码
     */
    public function pass()
    {
        if(request()->isPost())
        {
            $res=$this->db->changpass(input('post.'));
            if($res['valid'])
            {
                //return alert($res["msg"],'index/index',6,3);
                return  $this->success($res['msg']); exit;
            }else
            {

                return  $this->error($res['msg']);exit;
            }


        }
        return $this->fetch();
    }

}
