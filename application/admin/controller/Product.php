<?php

namespace app\admin\controller;

use think\Controller;

class Product extends Common
{
   public function index()
   {

       //  halt($menu);
       $deal=model('Deal')->getNomalDeals();
       $categorys=model('Category')->getcategoryBytype(1);
       //halt($categorys);
       foreach($categorys as $cate)
       {
           $category[$cate->id]=$cate->name;
       }
       $this->assign([

           'deal'=>$deal,
           'category'=>$category,
       ]);
       return $this->fetch();
   }

    public function prolist()
    {

        $deal=model('Deal')->getNormalhotdeals();
        $categorys=model('Category')->getcategoryBytype(1);
       // halt($deal);
        foreach($categorys as $cate)
        {
            $category[$cate->id]=$cate->name;
        }
        $this->assign([

            'deal'=>$deal,
            'category'=>$category,
        ]);

        return $this->fetch();
    }

    public function nominate()
    {

        $deal=model('Deal')->getNormalhotdeals();
        $categorys=model('Category')->getcategoryBytype(1);
        //halt($categorys);
        foreach($categorys as $cate)
        {
            $category[$cate->id]=$cate->name;
        }
        $this->assign([

            'deal'=>$deal,
            'category'=>$category,
        ]);
        return $this->fetch();
    }

    public function add()
    {

        //halt($categorys);
        $citys=model('City')->getNormalCity();
        $this->assign([

            'citys'=>$citys,
        ]);


        return $this->fetch();
    }
}
