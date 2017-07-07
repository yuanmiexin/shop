<?php

namespace app\api\controller;

use think\Controller;

class City extends Controller
{
   public function indexcity($id)
   {
       if(!$id)
       {
           return $this->error('数据错误');
       }
       $res=model('City')->getCitysbyid($id);
        if($res)
        {
            return show(1,'success',$res);
        }
          else
          {
              return show(0,'error');
          }
   }
}
