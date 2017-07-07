<?php

namespace app\home\controller;

use think\Controller;

class Proinfo extends Controller
{
    //商品详情页
   public function index()
   {
       $id=input('get.id',0,'intval');
       if(!$id)
       {
          return $this->error('没有选取商品或商品已下架','deal/index');
       }
       $deal=model('Deal')->get($id);
       //halt($deal);
       $deal['count']=input('get.count',1,'intval');

       $order_deal=model('OrderDeal')->get(['deal_id'=>$id]);
       $status=0;
       if($order_deal)
       {
           $status=1;
       }
       if(request()->isAjax())
       {
           return show(1,'success', $deal['count']);
       }
       $cate=model('Category')->get(['id'=>$deal->se_category_id !=0 ? $deal->se_category_id:$deal->category_id]);
       $this->assign([
           'deal'=>$deal,
           'controller'=>'deal',
           'cate'=>$cate,
           'status'=>$status,
       ]);
       return $this->fetch();
   }
    //购物车
    public function order()
    {
        //echo "dfafd";die;
        $deal=model('Order')->get(['pay_status'=>0,'user_id'=>session('user')->id]);
        //halt($deal);
       if($deal)
       {

           $deals=model('OrderDeal')->getdeals($deal->out_number);
           //halt($deals);
           $total_counts=model('Deal')->where('status',1)->select();
           foreach($total_counts as $total)
           {
               $total_count[$total->id]=$total->total_count;
           }
           $this->assign([
           'deals'=>$deals,
           'out_number'=>$deal->out_number,
           'controller'=>'deal',
           'total_count'=>$total_count,
       ]);
          // echo "dfafd";die;
           return $this->fetch();
       }else{

          return $this->error('购物车中还没有商品，请先添加');
       }


    }
    //订单确认及支付方式选择页
    public function orderlist()
    {

        $citys=model('City')->getNormalCity();
        $address=model('UserInfo')->getAddress(session('user')->id);
        $addresscity=model('City')->getCitys();
        foreach($addresscity as $adres)
        {
            $adrcity[$adres->id]=$adres->name;
        }
        //halt($adrcity);
        $this->assign([
            'controller'=>'deal',
            'citys'=>$citys,
            'address'=>$address,
            'adrcity'=>$adrcity,
        ]);
        return $this->fetch();
    }
     //提示成功并跳转支付页
    public function ordersuccess()
    {
        $this->assign([
            'controller'=>'deal',
        ]);
        return $this->fetch();
    }
}
