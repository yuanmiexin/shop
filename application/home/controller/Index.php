<?php

namespace app\home\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
       $news=model('News')->getNews(10);
       $newsn=model('News')->getNews(11);
       $newso=model('News')->getNews(9);
       $deals=model('Deal')->getdeals();
       $hotdeal=model('Deal')->gethotdeals();

//halt($hotdeal);
       $this->assign([
           'news'=>$news,
           'newsn'=>$newsn,
           'newso'=>$newso,
           'deals'=>$deals,
           'hotdeal'=>$hotdeal,
           'controller'=>strtolower(request()->controller()),
       ]);
        return $this->fetch();
    }


}
