<?php

namespace app\common\model;

use think\Loader;
use think\Model;

class News extends Model
{
    protected $autoWriteTimestamp=true;
    public function add($data)
    {
        $validate=Loader::validate('News');
        if(!$validate->check($data))
        {
            return ['valid'=>0,'msg'=>$validate->getError()];
        }
        $data['status']=1;
        $result=$this->save($data);
        if($result)
        {
            return ['valid'=>1,'msg'=>'添加成功'];
        }else{
            return ['valid'=>0,'msg'=>'添加失败'];
        }
    }


    public function getNews($is=0)
    {
        $data=[
            'category_id'=>$is,
            'status'=>1,
        ];

        $order=[
            'id'=>'desc'
        ];

        $result=$this->where($data)
            ->where($is)
            ->order($order)
            ->paginate(5);
        return $result;
    }

    public function getNewslist()
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
}
