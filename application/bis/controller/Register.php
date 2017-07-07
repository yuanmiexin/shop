<?php

namespace app\bis\controller;

use think\Controller;
use think\Loader;

class Register extends Controller
{
   public function index()
   {
         $citys=model('City')->getNormalCity();
         $categorys=model('Category')->getCategorybyid();
         $this->assign([
             'citys'=>$citys,
             'categorys'=>$categorys,
         ]);
      return  $this->fetch();
   }

   public function add()
   {
       if(request()->isPost())
       {
           $data=input('post.');
           $validate=Loader::validate('Register');
           if(!$validate->check($data))
           {
               return $this->error($validate->getError());
           }
          $bis=[
              'name'=>$data['name'],
              'email'=>$data['email'],
              'logo'=>$data['logo'],
              'licence_logo'=>$data['licence_logo'],
              'introduction'=>$data['introduction'],
              'city_id'=>$data['city_id'],
              'city_path'=>empty($data['se_city_id'])?'':$data['se_city_id'],
              'bank_info'=>$data['bank_info'],
              'bank_name'=>$data['bank_name'],
              'bank_user'=>$data['bank_user'],
              'faren'=>$data['faren'],
              'faren_tel'=>$data['faren_tel'],
          ];
         // halt($bis);
         $bis_id = model('Bis')->add($bis);
        // halt($bis_id);
           $Location=[
               'name'=>$data['name'],
               'logo'=>$data['logo'],
               'address'=>$data['address'],
               'tel'=>$data['tel'],
               'contact'=>$data['contact'],
               'notes'=>$data['notes'],
               'bis_id'=>$bis_id ,
               'open_time'=>$data['open_time'],
               'api_address'=>$data['address'],
               'category_id'=>$data['category_id'],
               'category_path'=>empty($data['se_category_id'])?'':$data['se_category_id'],
               'city_id'=>$data['city_id'],
               'city_path'=>empty($data['se_city_id'])?'':$data['se_city_id'],
               'bank_info'=>$data['bank_info']
               ];
          model('BisLocation')->add($Location);
          $Accountresult=model('BisAccount')->getNormal($data['username']);
          if($Accountresult)
          {
              $this->error('用户名已注册，请重新注册');
          }
          $data['code']=mt_rand(100,10000);
          $Account=[
              'username'=>$data['username'],
              'password'=>md5($data['password'].$data['code']),
              'code'=>$data['code'],
              'bis_id'=>$bis_id,
              'technology'=>$data['technology'],
              'outlook'=>$data['outlook'],
              'base'=>$data['base'],
              'become'=>$data['become'],
          ];
          $bisAccount=model('BisAccount')->add($Account);
          if(!$bisAccount)
          {
              return $this->error('添加失败');
          }
          $url=request()->domain().url('bis/register/wcon',['id'=>$bis_id]);
          $title='注册验证';
          $content="请在24小时内完成验证激活，如需马上认证请点击<a href='.$url.' target='_blank'>链接</a>进行激活";
          \phpmailer\Email::send($data['email'],$title,$content);
          $this->success('注册成功，请激活',url('register/wcon',['id'=>$bis_id]));
       }

   }
    public function wcon($id)
    {

        if(!$id)
        {
              return $this->error('注册失败');
        }
        $detail = model('Bis')->get($id);
        $this->fetch('register/waiting',["detail"=>$detail]);

    }

    /**
     * 验证用户名
     */
    public function checkuser($username)
    {
        if($username=='')
        {
            return show(2,'miss');
        }else{
            $user=model('BisAccount')->getNormal($username);
        if(!$user)
        {
            return show(1,'success');
        }else{
            return show(0,'error');
        }
    }
        }
}
