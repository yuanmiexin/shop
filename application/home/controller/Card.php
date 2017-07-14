<?php

namespace app\home\controller;

use think\Controller;

class Card extends Controller
{
    public function index()
    {
        if(request()->isPost())
        {
           $card=input('post.card') ;
           \Card::cardcheck($card);
        }
        return $this->fetch();
    }
}
