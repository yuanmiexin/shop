<?php

namespace app\api\controller;

use think\Controller;
use yunnpianapi\lib\SmsOperator;


class Smasge extends Controller
{
    public function index($mobile,$code)
    {

        //$font = new \BCGFontFile('./font/Arial.ttf', 12);
      //  return $mobile;
        include_once '../extend/yunpianapi/YunpianAutoload.php';
          // 发送单条短信
       $smsOperator = new SmsOperator();
        $data['mobile'] =$mobile;
        $data['text'] = config("sms.text").$code;
        $result = $smsOperator->single_send($data);
        //$result = $data;
        return $result;
    }
}
