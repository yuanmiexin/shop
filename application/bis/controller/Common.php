<?php

namespace app\bis\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{

    public function __construct(Request $request = null)
    {

        parent::__construct($request);
        //执行登录验证
        if(!session('user'))
        {
            return $this->redirect('bis/login/index');
        }


    }
}
