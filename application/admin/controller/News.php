<?php

namespace app\admin\controller;

use think\Controller;

class News extends Common
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

    public function newslist()
    {

        $news=model('News')->getNewslist();
        $category=model('Category')->getcategoryBytype();
        foreach($category as $cate)
        {
            $categorys[$cate->id] =$cate->name;
        }
        $this->assign([
            'news'=>$news,

            'categorys'=>$categorys,
        ]);

        return $this->fetch();
    }

    public function add()
    {

        $category=model('Category')->getcategoryBytype();
        $this->assign([
            'category'=>$category,

        ]);
          if(request()->isPost())
          {
              $data=input('post.');
              $news=model('News')->add($data);
              if($news['valid'])
              {
                  return $this->success($news['msg'],'newslist');
              }else{
                  return $this->error($news['msg']);
              }

          }
        return $this->fetch();
    }
}
