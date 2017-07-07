<?php

namespace app\common\model;

use think\Model;

class BisLocation extends BaseModel
{
    public function getNormal($id)
    {
        $data=[
            'status'=>1,
            'bis_id'=>$id,
        ];
        $order=[
            'is_main'=>'',
            'id'=>'desc'
        ];

        $result=$this->where($data)
            ->order($order)
            ->select();
        return $result;
    }

    public function getLocation()
    {
        $data=[
            'status'=>['neq',-1],
        ];
        $order=[
            'is_main'=>'',
            'id'=>'desc'
        ];

        $result=$this->where($data)
            ->order($order)
            ->paginate(5);
        return $result;

    }

    public function getunion()
    {
        $data=[
            'status'=>1,
        ];
        $order=[
            'is_main'=>'',
            'id'=>'desc'
        ];

        $result=$this->where($data)
            ->order($order)
            ->paginate(5);
        return $result;
    }


    public function getmainlocation()
    {
        $data=[
            'is_main'=>1,
            'status'=>1,
        ];
        $order=[
            'id'=>'desc'
        ];

        $result=$this->where($data)
            ->order($order)
            ->paginate(5);
        return $result;
    }

}
