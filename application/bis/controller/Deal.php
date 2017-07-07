<?php

namespace app\bis\controller;

use think\Controller;
use think\Paginator;

class Deal extends Controller
{
    public function index()
    {
        $deals=model('Deal')->getLocationDeal(session('user')->bis_id);
        $category=model('Category')->getCategorybyid();
        foreach($category as $cate)
        {
            $categorys[$cate->id] =$cate->name;
        }
       // halt($categorys);
        $this->assign([
            'deals'=>$deals,
            'categorys'=>$categorys,
        ]);

        return $this->fetch();
    }

    public function add()
    {
        if(request()->isPost())
        {
           $data=input('post.');
           $datas=[
               'name'=>$data['name'],
               'category_id'=>$data['category_id'],
               'se_category_id'=>empty($data['se_category_id'])?'':$data['se_category_id'],
               'bis_id'=>session('user')->bis_id,
               'image'=>$data['image'],
               'description'=>$data['description'],
               'origin_price'=>$data['origin_price'],
               'city_id'=>$data['city_id'],
               'total_count'=>$data['total_count'],
               'bis_account_id'=>session('user')->id,
               'start_time'=>$data['start_time'],
           ];
            if (isset($data['id'])) {
                $datas=[
                    'id'=>$data['id'],
                    'name'=>$data['name'],
                    'category_id'=>$data['category_id'],
                    'se_category_id'=>empty($data['se_category_id'])?'':$data['se_category_id'],
                    'bis_id'=>session('user')->bis_id,
                    'image'=>$data['image'],
                    'description'=>$data['description'],
                    'origin_price'=>$data['origin_price'],
                    'city_id'=>$data['city_id'],
                    'total_count'=>$data['total_count'],
                    'bis_account_id'=>session('user')->id,
                    'start_time'=>$data['start_time'],
                ];
                $this->update($datas);
            }
          $deal=model('Deal')->add($datas);
          if($deal)
          {
             return $this->success('添加成功','Deal/index') ;
          }else
          {
              return $this->error('添加失败') ;
          }

        }
        $citys=model('City')->getNormalCity();
        $categorys=model('Category')->getCategorybyid();
        $location=model('BisLocation')->getNormal(session('user')->bis_id);
        $this->assign([
            'citys'=>$citys,
            'categorys'=>$categorys,
            'location'=>$location,
        ]);
        return $this->fetch();
    }


    public function edit($id)
    {

        $data=model('Deal')->get($id);
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
        $res = model('Deal')->save($data, ['id' => $data['id']]);
        if ($res) {
            return $this->success('更新成功','deal/index');
            exit;
        } else {
            return $this->error('更新失败');
            exit;
        }
    }



    public function listorder($id,$listorder)
    {
        // $this->result($_SERVER['HTTP_REFERER'],1,$id);

        $res = model('Deal')->save(['listorder'=>$listorder],['id'=>$id]);
        if($res)
        {
            $this->result($_SERVER['HTTP_REFERER'],1,'success');
        }else{
            $this->result($_SERVER['HTTP_REFERER'],0,'更新失败');
        }
    }
    public function status($id,$status)
    {
        $res = model('Deal')->save(['status'=>$status],['id'=>$id]);
        if($res)
        {
            $this->success('更新成功','index');
        }else{
            $this->error('更新失败');
        }

    }
}
