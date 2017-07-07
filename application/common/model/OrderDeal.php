<?php

namespace app\common\model;

use think\Model;

class OrderDeal extends BaseModel
{
    public function add($data)
    {
        $data['status']=1;

       $result = $this->save($data);
        if($result)
        {
            return ['valid'=>1,'msg'=>'添加商品成功'];
        }else{
            return ['valid'=>0,'msg'=>'添加商品失败'];
        }

    }
    public function getdeals($out_number)
    {
        //halt($out_number);
        $data=[
            'status'=>1,
            'out_number'=>$out_number,
        ];
        $order=[
            'create_time'=>'desc'
        ];
        $result=$this->where($data)
            ->order($order)
        ->select();
        return $result;
    }
}
