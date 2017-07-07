<?php

namespace app\common\model;

use think\Loader;
use think\Model;

class Inquiry extends Model
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
        $data['status']=1;
        $result=$this->save($data);
        // halt($result);
        if($result)
        {
            return ['valid'=>1,'msg'=>'发送成功'];
        }else{
            return ['valid'=>0,'msg'=>'发送失败'];
        }
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
        ->paginate(10);
    return $result;
}
}
