<?php

namespace app\common\model;

use think\Model;

class BisAccount extends BaseModel
{
    public function getNormal($username)
    {
        $data=[
            'username'=>$username,
            'status'=>1
        ];
        $result=$this->where($data)->find();
        return $result;
    }

    public function getinfomation($uname,$id)
    {
        $data=[
            'bis_id'=>$id,
        ];

        $result=$this->where($data)
            ->field($uname)
            ->find();
        return $result;
    }
}
