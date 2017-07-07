<?php

namespace app\api\controller;

use think\Controller;
use think\File;

class Image extends Controller
{
    public function upload()
    {

        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move('upload');
        if($info && $info->getPathname()){
            return '/shop/public/'.$info->getPathname();
        }else{
            // 上传失败获取错误信息
            return  'upload error';
        }


    }
}
