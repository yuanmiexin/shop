<?php

namespace app\common\model;

use think\Model;

class Deal extends BaseModel
{
    public function getLocationDeal($id)
    {
        $data=[
            'bis_id'=>$id,
            'status'=>1
        ];
        $order=[
            'listorder'=>'desc',
            'id'=>'desc'
        ];

        $result=$this->where($data)
            ->order($order)
            ->paginate(5);
        return $result;
    }
    public function getdeals()
    {
        $data=[
            'is_new'=>1,
            'status'=>1
        ];
        $order=[
            'listorder'=>'desc',
            'id'=>'desc'
        ];

        $result=$this->where($data)
            ->order($order)
            ->paginate(6);
        return $result;
    }

    public function gethotdeals()
    {
        $data=[
            'is_hot'=>1,
            'status'=>1
        ];
        $result=$this->where($data)
            ->find();
        return $result;
    }

    public function getlocdeals($id)
    {
        $data=[
            'bis_id'=>$id,
            'status'=>1
        ];
        $result=$this->where($data)
            ->find();
        return $result;
    }

    public function getdealsBycategoryId($id)
    {
        $data=[
            'category_id'=>$id,
            'status'=>1
        ];
        $result=$this->where($data)
            ->paginate(9);
        return $result;
    }

    public function getNomalDeals()
    {
        $data=[
            'status'=>['neq',-1]
        ];
        $order=[
            'id'=>'desc'
        ];
        $result=$this->where($data)
            ->order($order)
            ->paginate(5);
        return $result;
    }

    public function getNormalhotdeals()
    {
        $data=[
            'is_hot'=>1,
            'status'=>1
        ];
        $order=[
            'id'=>'desc'
        ];
        $result=$this->where($data)
            ->order($order)
            ->select();
        return $result;
    }
}
