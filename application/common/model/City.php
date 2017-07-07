<?php

namespace app\common\model;

use think\Loader;
use think\Model;

class City extends Model
{

    public function add($data)
    {
        $validate=Loader::validate('City');
        if(!$validate->check($data))
        {
            // echo '4dfsdaf';
            return ['valid'=>0,'msg'=>$validate->getError()];
        }
        $data['status']=1;
        $data['is_default']=0;

      $result=$this->save($data);
        if($result)
        {
            return ['valid'=>1,'msg'=>'更新成功'];
        }else
        {
            return ['valid'=>1,'msg'=>'更新失败'];
        }

    }
    public function getNormalCity($parentId=0)
    {
       $data=[
           'parent_id'=>$parentId,
           'status'=>['neq',-1],
       ];
       $order=[
           'id'=>'desc'
       ];
        $result=$this->where($data)
           ->order($order)
           ->paginate(3);
      // halt($result);
        return $result;
    }

    public function getCitys()
    {
        $data=[
            'status'=>1,
        ];
        $order=[
            'listorder'=>'desc'
        ];
        return $result=$this->where($data)
            ->order($order)
            ->select();
    }

    public function getCitysbyid($id)
    {
        $data=[
            'parent_id'=>$id,
            'status'=>1,
        ];
        $order=[
            'listorder'=>'desc'
        ];
        return $result=$this->where($data)
            ->order($order)
            ->select();
    }
}
