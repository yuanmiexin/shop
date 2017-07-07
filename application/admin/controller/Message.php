<?php

namespace app\admin\controller;

use think\Controller;

class Message extends Common
{
    public function index()
    {

        $message=model('SMS')->getInromation();
        //halt($category);
        $this->assign([

            'SMS' =>$message

        ]);
        return $this->fetch();
    }
    public function inquiry()
{

    $message=model('Inquiry')->getInquiry();
    //halt($category);
    $this->assign([

        'SMS' =>$message

    ]);
    return $this->fetch();
}

    public function recycle()
    {

        $message=model('SMS')->getRecycle();
        //halt($category);
        $this->assign([

            'SMS' =>$message

        ]);
        return $this->fetch();
    }
}
