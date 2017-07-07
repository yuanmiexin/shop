<?php

namespace app\admin\controller;

use think\Controller;

class Union extends Common
{
   public function index()
   {

       $lists=model('BisLocation')->getLocation();
       $this->assign([
           'lists'=>$lists,

       ]);
       return  $this->fetch();

   }

    public function status($id, $status)
    {
        $bislocation = model('BisLocation')->save(['status' => $status], ['id' => $id]);
        $res=model('BisLocation')->get($id);
        $bisaccount = model('BisAccount')->save(['status' => $status], ['bis_id' =>$res->bis_id]);
        $bis = model('Bis')->save(['status' => $status], ['id' => $res->bis_id]);
       // halt($bis);
        if ($bis && $bisaccount && $bislocation ) {
            $this->success('更新成功', 'index');
        } else {
            $this->error('更新失败');
        }

    }

    public function unionlist()
    {

        $lists=model('BisLocation')->getunion();
        $this->assign([
            'lists'=>$lists,

        ]);
        return  $this->fetch();

    }

    public function edit($id)
    {
        //halt($id);
        $category = model('BisLocation')->get($id);
        $this->assign('category', $category);
        return $this->fetch();
    }
}
