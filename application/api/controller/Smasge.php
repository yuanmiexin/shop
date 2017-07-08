<?php

namespace app\api\controller;

use think\Controller;



class Smasge extends Controller
{
    public function index($mobile,$code)
    {

        //$font = new \BCGFontFile('./font/Arial.ttf', 12);
      //  return $mobile;
        include_once '../extend/yunpian1/YunpianAutoload.php';
          // 发送单条短信
       $smsOperator = new \SmsOperator();
        $data['mobile'] =$mobile;
        $data['text'] = config("sms.text").$code;
        $result = $smsOperator->single_send($data);
        //$result = $data;
        print_r($result->requestData);
    }
}
