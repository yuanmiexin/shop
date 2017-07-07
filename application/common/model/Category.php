<?php

namespace app\common\model;

use think\Loader;
use think\Model;

class Category extends Model
{
    protected $autoWriteTimestamp=true;
    public function add($data)
    {
      //halt($data);
        $validate=Loader::validate('Category');
        if(!$validate->check($data))
        {
           // echo '4dfsdaf';
            return ['valid'=>0,'msg'=>$validate->getError()];
        }
        $data['status']=1;

      $result=$this->save($data);
        if($result)
        {
        return ['valid'=>1,'msg'=>'更新成功'];
        }else
        {
            return ['valid'=>1,'msg'=>'更新失败'];
        }
    }

    public function getCategory($parentID=0)
    {
        $data=[
            'parent_id'=>$parentID,
            'status'=>['neq',-1],
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

    public function getCategorybyid($parentID=0)
    {
        $data=[
            'parent_id'=>$parentID,
            'type'=>1,
            'status'=>['neq',-1],
        ];

        $result=$this->where($data)
            ->select();

        return $result;
    }

    public function getcategoryBytype($type=2,$ord='desc')
    {
        $data=[
            'parent_id'=>0,
            'type'=>$type,
            'status'=>['neq',-1],
        ];
        $order=[
            'id'=>$ord
        ];
        $result=$this->where($data)
            ->order($order)
            ->select();

        return $result;
    }
}
