<?php

namespace app\api\controller;

use think\Controller;



class Smasge extends Controller
{
    public function index($mobile,$code)
    {

        //$font = new \BCGFontFile('./font/Arial.ttf', 12);
      //  return $mobile;
      \yunpianapi\SMS::smsSend($mobile,$code);

    }
}
