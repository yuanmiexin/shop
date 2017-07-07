<?php

namespace app\home\controller;

use think\Controller;

class Trade extends Controller
{
    public function index()
    {
        $category=model('Category')->getcategoryBytype();
        $deal=model('Deal')->get(['is_new'=>0,'status'=>1]);
        $inquiry=model('Inquiry')->getInquiry();
      //halt(request()->controller());
        $this->assign([
            'category'=>$category,
            'deal'=>$deal,
            'inquiry'=>$inquiry,
              'controller'=>strtolower(request()->controller()),
        ]);
        return $this->fetch();
    }


}
