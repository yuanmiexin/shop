<?php

namespace app\bis\controller;

use think\Controller;

class Location extends Controller
{
    public function index()
    {

        $lists=model('BisLocation')->getNormal(session('user')->bis_id);
        $this->assign('lists',$lists);
       return  $this->fetch();
    }
    public function add()
    {
        $citys=model('City')->getNormalCity();
        $categorys=model('Category')->getCategorybyid();
        $this->assign([
            'citys'=>$citys,
            'categorys'=>$categorys,
        ]);
        if(request()->isPost())
        {
            $data=input('post.');

            $datas=[
                'bis_id'=>session('user')->bis_id,
                'is_main'=>2,
                'name'=>$data['name'],
                'logo'=>$data['logo'],
                'address'=>$data['address'],
                'tel'=>$data['tel'],
                'contact'=>$data['contact'],
                'open_time'=>$data['open_time'],
                'api_address'=>$data['address'],
                'category_id'=>$data['category_id'],
                'category_path'=>empty($data['se_category_id'])?'':$data['se_category_id'],
                'city_id'=>$data['city_id'],
                'city_path'=>empty($data['se_city_id'])?'':$data['se_city_id'],
            ];

           // halt($data);
            if (isset($data['id'])) {
                $datas=[
                    'id'=>$data['id'],
                    'bis_id'=>session('user')->bis_id,
                    'is_main'=>$data['is_main'],
                    'name'=>$data['name'],
                    'logo'=>$data['logo'],
                    'address'=>$data['address'],
                    'tel'=>$data['tel'],
                    'contact'=>$data['contact'],
                    'open_time'=>$data['open_time'],
                    'api_address'=>$data['address'],
                    'category_id'=>$data['category_id'],
                    'category_path'=>empty($data['se_category_id'])?'':$data['se_category_id'],
                    'city_id'=>$data['city_id'],
                    'city_path'=>empty($data['se_city_id'])?'':$data['se_city_id'],
                ];
                $this->update($datas);
            }
          $res =  model('BisLocation')->add($datas);
          if($res)
          {
              return $this->success('添加成功');
          }else{
              return $this->success('添加失败');
          }
        }
        return  $this->fetch();
    }

    public function edit($id)
    {

        $data=model('BisLocation')->get($id);
       //halt($data);
         $citys=model('City')->getNormalCity();
        $categorys=model('Category')->getCategorybyid();
        $this->assign([
            'citys'=>$citys,
            'categorys'=>$categorys,
            'data'=> $data
        ]);

        return  $this->fetch();
    }

    public function update($data)
    {
        $res = model('BisLocation')->save($data, ['id' => $data['id']]);
        if ($res) {
            return $this->success('更新成功','location/index');
            exit;
        } else {
            return $this->error('更新失败');
            exit;
        }
    }

    public function listorder($id,$listorder)
    {
        // $this->result($_SERVER['HTTP_REFERER'],1,$id);

        $res = model('BisLocation')->save(['listorder'=>$listorder],['id'=>$id]);
        if($res)
        {
            $this->result($_SERVER['HTTP_REFERER'],1,'success');
        }else{
            $this->result($_SERVER['HTTP_REFERER'],0,'更新失败');
        }
    }
    public function status($id,$status)
    {
        $res = model('BisLocation')->save(['status'=>$status],['id'=>$id]);
        if($res)
        {
            $this->success('更新成功','index');
        }else{
            $this->error('更新失败');
        }

    }
}
