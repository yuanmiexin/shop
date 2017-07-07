<?php

namespace app\common\model;

use think\Model;

class BaseModel extends Model
{
    protected $autoWriteTimestamp=true;
    public function add($data)
    {
        $data['status']=1;
        if(!isset($data['is_main']))
        {
            $data['is_main']=1;
        }
        $result=$this->allowField(true)->save($data);
        /*if($result)
        {
            return ['valid'=>1,'msg'=>'更新成功'];
        }else{
            return ['valid'=>0,'msg'=>'更新失败'];
        }*/
        return $this->id;
    }
}
