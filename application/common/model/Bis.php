<?php

namespace app\common\model;

use think\Model;

class Bis extends BaseModel
{
    public function getinfomation($uname,$id)
    {
        $data=[
            'id'=>$id,
        ];

        $result=$this->where($data)
            ->field($uname)
            ->find();
        return $result;
    }
}
