<?php

namespace app\api\controller;

use think\Controller;

class Category extends Controller
{
    public function getCategoryByParentId($id)
    {

          if(!$id){
              return $this->error('数据错误');
          }
        $res=model('Category')->getCategorybyid($id);
          //halt($res);
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
