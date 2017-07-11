<?php

namespace app\home\controller;

use app\common\pay\Alipay;
use think\Controller;

class Pay extends Controller
{
    public function alipay()
    {
        if (!request()->isAjax()) {
            $this->error('该操作仅支持异步操作');
        }
  /*      $productId = input('productId',0);
        $product = model('Product')->where('id',$productId)->find();
        if (empty($product)) {
            $this->error('产品不存在');
        }
        if ($product['status'] != 1) {
            $this->error('产品已下架');
        }*/
        $outTradeNo = input('post.out_number');
        $product=model("Order")->get(['out_number'=>$outTradeNo]);
        $data = [
            'notify_url' => url('api/Notify/alipay','',false,true), //回调链接
            'return_url' => '',
            'out_trade_no' => $outTradeNo, //订单号
            'subject' => '爱站SEO ', //产品标题
            'total_fee' => $product['total_price'],//订单金额，单位为元
            'body' => $product['address'], //产品描述
        ];
        $alipay = new Alipay();
       // echo 'dddd';die;
       // halt($data);
        $result = $alipay->qrpay($data);
halt($result);
        if(!$result['code']){
            return $this->error($result['msg']);
        }

        //二维码生成
        $qrcodeImg = make_qrcode($result['msg'],$data['out_trade_no']);
        return [
            'code' => 1,
            'msg' => '请用支付宝支付',
            'qrcodeImg' => $qrcodeImg, //二维码图片地址
            'productInfo' => $product //产品信息
        ];
    }
}
