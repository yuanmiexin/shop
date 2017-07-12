<?php

namespace app\home\controller;

use app\common\pay\Alipay;
use think\Controller;

class Pay extends Controller
{
    public function index()
    {

        $outTradeNo = input('post.out_number');
        $product=model("Order")->get(['out_number'=>$outTradeNo]);
        $action=input('get.action');
        if(isset($action))
        {
            include "../extend/Wxpay/example/".$action.".php";
        }
      // $this->assign(['outTradeno'=>$outTradeNo]);

        return $this->fetch();
    }

}
