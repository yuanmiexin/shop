<?php

namespace app\common\model;

use think\Loader;
use think\Model;
use think\Db;

class Message extends Model
{
    protected $autoWriteTimestamp=true;
    public function add($data)
    {
        //halt($data);
        $validate=Loader::validate('SMS');
        if(!$validate->check($data))
        {
            return ['valid'=>0,'msg'=>$validate->getError()];
        }
        $result=$this->save($data);
       // halt($result);
        if($result)
        {
            return ['valid'=>1,'msg'=>'发送成功'];
        }else{
            return ['valid'=>0,'msg'=>'发送失败'];
        }
         // return $result;
    }

    public function getInromation()
    {
        $data=[
            'status'=>['neq',-1],
        ];
        $order=[
            'id'=>'desc'
        ];
        $result=$this->where($data)
            ->order($order)
            ->paginate(5);
        return $result;
    }

    public function getInquiry()
    {
        $data=[
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


    public function getRecycle()
    {
        $data=[
            'status'=>['eq',-1],
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
