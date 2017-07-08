<?php

namespace app\common\model;

use think\Model;

class Pay extends BaseModel
{
    public function getpay()
    {
        $data=[
            'status'=>1,
        ];

        $order=[
            'id'=>'desc',
        ];

        $result=$this->where($data)
            ->order($order)
            ->select();
        return $result;
    }
}
