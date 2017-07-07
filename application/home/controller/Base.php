<?php

namespace app\home\controller;

use think\Controller;
use think\Request;

class Base extends Controller
{
    protected $account;
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        if(!session('user'))
       {
          return $this->error("请登录","home/login/index");
        }
    }
}
