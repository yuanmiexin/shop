<?php

namespace app\api\controller;

use think\Controller;
use think\File;

class Smasge extends Controller
{
    public function index($mobile,$code)
    {

        //$font = new \BCGFontFile('./font/Arial.ttf', 12);
        return $mobile;
        require_once 'yunpian-sdk-php/YunpianAutoload.php';
          // 发送单条短信
        $smsOperator = new SmsOperator();
        $data['mobile'] =$mobile;
        $data['text'] = config("sms.text").$code;
        return $data;
        $result = $smsOperator->single_send($data);
        return $result;
    }
}
