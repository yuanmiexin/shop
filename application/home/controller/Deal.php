<?php

namespace app\home\controller;

use think\Controller;

class Deal extends Controller
{
   public function index()
   {
       $categorys=model('Category')->getcategoryBytype(1);
      // halt($categorys);
       $id=input('get.id',2,'intval');
       $category=model('Category')->get($id);
       $deal=model('Deal')->getdealsBycategoryId($id);
       $this->assign([
           'categorys'=>$categorys,
           'category'=>$category,
           'deal'=>$deal,
           'controller'=>strtolower(request()->controller()),
       ]);
       return $this->fetch();
   }
}
