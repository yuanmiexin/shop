<?php

namespace app\admin\controller;

use think\Controller;

class Category extends Common
{
    protected $db;

    public function _initialize()
    {
        parent::_initialize();
        $this->db = new \app\common\model\Category();
    }

    public function index()
    {
        $category = $this->db->getCategory();
        //halt($category);
        $this->assign([
            'category' => $category
        ]);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            //halt(input('post.'));
            $data = input('post.');
            // halt($data);
            if (isset($data['id'])) {
                $this->update($data);
            }
            $res = $this->db->add($data);
            if ($res['valid']) {
                return $this->success($res['msg']);
                exit;
            } else {
                return $this->error($res['msg']);
                exit;
            }
        }
        return $this->fetch();
    }

    public function edit($id)
    {
        //halt($id);
        $category = $this->db->get($id);
        $this->assign('category', $category);
        return $this->fetch();
    }

    public function update($data)
    {
        $res = $this->db->save($data, ['id' => $data['id']]);
        if ($res) {
            return $this->success('更新成功');
            exit;
        } else {
            return $this->error('更新失败');
            exit;
        }
    }

    public function listorder($id, $listorder)
    {
        // $this->result($_SERVER['HTTP_REFERER'],1,$id);

        $res = $this->db->save(['listorder' => $listorder], ['id' => $id]);
        if ($res) {
            $this->result($_SERVER['HTTP_REFERER'], 1, 'success');
        } else {
            $this->result($_SERVER['HTTP_REFERER'], 0, '更新失败');
        }
    }

    public function status($id, $status)
    {
        $res = $this->db->save(['status' => $status], ['id' => $id]);
        if ($res) {
            $this->success('更新成功', 'index');
        } else {
            $this->error('更新失败');
        }

    }
}