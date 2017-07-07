<?php

namespace app\home\controller;

use think\Controller;

class Order extends Base
{
    public function index()
    {
        $id=input('get.id',0,'intval');
        if(!intval($id))
        {
            return $this->error("商品不存在");
        }

        $count=input('get.count',0,'intval');
        if(!$count || $count<1)
        {
            return $this->error("请选择正确的数量",'proinfo/index?id='.$id);
        }

        $deal=model('Deal')->get($id);
       // halt($deal->name);
        $pay_status=model('Order')->get(['pay_status'=>0,'user_id'=>session('user')->id]);
        if($pay_status)
        {
            //echo 'ddda';die;
            $out_number=$pay_status->out_number;
        }else{
            $out_number=mt_rand(10000,99999).time();
            $order=[
              'out_number'=>$out_number,
                'user_id'=>session('user')->id,
                'pay_status'=>0,
                'total_price'=>$deal->name,
                'count'=>$count,
            ];
            model("Order")->add($order);
        }
       /* $order_deal=model("OrderDeal")->get(['deal_id'=>$id]);

        if($order_deal)
        {
           return alert('dddd');
         }
        else
            {*/
            //halt($deal->name);
            $data=[
            'out_number'=>$out_number,
           'user_id'=>session('user')->id,
           'deal_id'=>$id,
           'deal_name'=>$deal->name,
           'image'=>$deal->image,
           'price'=>$deal->origin_price,
           'count'=>$count,
        ];

         $res=model('OrderDeal')->add($data);
         if($res['valid'])
         {
            return $this->success($res['msg'],'proinfo/order?id='.$id);
         }else{
             return $this->error($res['msg']);
         }

        }

        public function status($id,$status)
        {
             if(!$id)
             {
                 return $this->error('商品不存在');
             }
             $res=model('OrderDeal')->save(['status'=>$status],['id'=>$id]);
             if($res)
             {
                 return $this->success('删除成功','home/proinfo/order');
             }else{
                 return $this->error('删除失败');
             }
        }

        public function dealcount($id,$count)
        {
            if(!$id)
            {
                return $this->error('没有选取商品或商品已下架');
            }
            model('OrderDeal')->save(['count'=>$count],['id'=>$id]);
            $deal=model('OrderDeal')->get($id);
            //$total_count=$deal->price*$deal->count;

            return show(1,'success', $deal);
        }

        public function orderaccount($status,$total_price,$out_number)
        {
           if(!$out_number)
           {
              return $this->error('订单提交失败');
           }
             $res = model('Order')->save(['pay_status'=>$status,'total_price'=>$total_price],['out_number'=>$out_number]);
           if($res)
           {
              return $this->success("订单提交成功",'proinfo/orderlist?out_number='.$out_number);
           }
        }

        public function addressadd()
        {
            if(request()->isPost())
            {
                $data=input('post.');
                $data['user_id']=session('user')->id;
                $res=model('UserInfo')->add($data);
                if($res)
                {
                   return $this->success('收件地址添加成功','home/proinfo/orderlist');
                }
            }
        }
}
