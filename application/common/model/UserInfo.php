<?php

namespace app\common\model;

use think\Model;

class UserInfo extends BaseModel
{
    //
    public function getAddress($id)
    {
        $data=[
            'status'=>1,
            'user_id'=>$id,
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
