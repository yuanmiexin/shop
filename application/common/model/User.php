<?php

namespace app\common\model;

use think\Loader;
use think\Model;

class User extends BaseModel
{
    protected $autoWriteTimestamp=true;
    public function add($data)
   {
      $validate=Loader::validate('User');
      if(!$validate->check($data))
      {
           return ['valid'=>0,'msg'=>$validate->getError()];
      }

      $data['status']=1;
      $result=$this->allowField(true)->save($data);
      if($result)
      {
          return ['valid'=>1,'msg'=>'注册成功'];
      }else{
          return ['valid'=>0,'msg'=>'注册失败'];
      }
   }
}
