<?php
namespace app\toupiao\controller;
use think\Controller;
use think\Db;
class Toupiao extends Controller
{

    public function index()
    {
        $cate= db('toupiao')->select();
        $this->assign('cate',$cate);


      return  $this->fetch();
    }
  public function tou()
  {
      $id=input('post.id');
      db('toupiao')->where('id', $id)->setInc('sore');
      $ss=db('toupiao')->where('id',$id)->find();
      return json_encode($ss);
  }

    public function diao()
    {
        $id=input('post.id');
        db('toupiao')->where('id', $id)->setDec('sore');
        $ss=db('toupiao')->where('id',$id)->find();
        return json_encode($ss);
    }
}