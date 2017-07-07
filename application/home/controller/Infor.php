<?php

namespace app\home\controller;

use think\Controller;

class Infor extends Controller
{
    public function index()
    {
         $this->assign([
             'controller'=>strtolower(request()->controller()),
         ]);
        return $this->fetch();
    }

    public function contact()
    {
        if(request()->isPost())
        {
            $data=input('post.');
            $res=model('SMS')->add($data);
           // halt($res);
            if($res['valid'])
            {
                return $this->success($res['msg'],'index');
            }else{
                return $this->error($res['msg']);
            }

        }
    }

    public function inquiry()
    {
        if(request()->isPost())
        {
            $data=input('post.');
            $res=model('Inquiry')->add($data);
            // halt($res);
            if($res['valid'])
            {
                return $this->success($res['msg'],'infor/inquiry');
            }else{
                return $this->error($res['msg']);
            }

        }
        return $this->fetch();
    }

}
