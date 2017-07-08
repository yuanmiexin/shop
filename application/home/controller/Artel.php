<?php

namespace app\home\controller;

use think\Controller;

class Artel extends Controller
{
    public function index()
    {
        $location=model('BisLocation')->getmainlocation();
        $this->assign([
            'location'=>$location,
            'controller'=>strtolower(request()->controller()),
        ]);
        return $this->fetch();
    }

    public function about()
    {

            $id=input('get.id',14,'intval');

            $message=model("BisLocation")->get($id);

            $uname=strtolower(input('get.name','introduction'));

            if($uname=='introduction')
            {
                $information=model('Bis')->getinfomation($uname,$message->bis_id);
                $category=model('Category')->get(['uname'=>input('get.name')]);
            }elseif($uname=='products')
            {

                $product=model('Deal')->getlocdeals($id);
               // halt($product);
                $category=model('Category')->get(['uname'=>input('get.name')]);

                $cate=model('Category')->get(['id'=>$product->se_category_id !=0 ? $product->se_category_id:$product->category_id]);
                $city=model('City')->get(['id'=>$product->city_id]);
                $this->assign([
                    'cate'=>$cate,
                    'city'=>$city,
                ]);
            }else{
               // echo 'ddd';
                $information=model('BisAccount')->getinfomation($uname,$message->bis_id);
                $category=model('Category')->get(['uname'=>input('get.name')]);
            }
             // halt($information);



        $categorys=model('Category')->getcategoryBytype(3,'');
        //echo $uname;
        //halt($category);

        $this->assign([
            'categorys'=>$categorys,
            'category'=>isset($category)?$category:'',
            'message' =>$message,
            'information'=>isset($information)?$information:'',
            'data'=>isset($category)?strtolower($category->uname):'',
            'product'=>isset($product)?$product:'',
            'controller'=>strtolower(request()->controller()),
        ]);
       // halt($information.".$uname.");
        return $this->fetch();
    }

    public function saveinromation($name)
    {

    }

}
