<?php

/*
 * author : 安德兔
 * link : http://www.andetu.com/code/1861
 */

namespace app\home\controller;

use app\Common\model\Paywx;

error_reporting(0);
class Payw extends \think\Controller
{

    public function weixin()
    {
		if(request()->isPost()){
		    //echo 'ddd';die;
			$Pay = new Paywx();

			$result = $Pay->weixin([
				'body' => input('post.body/s','','trim,strip_tags'),
				'attach' => input('post.attach/s','','trim,strip_tags'),
				'out_trade_no' => input('post.orderid/s','','trim,strip_tags'),
				'total_fee' => input('post.total_fee/f',0,'trim,strip_tags')*100,//订单金额，单位为分，如果你的订单是100元那么此处应该为 100*100
				'time_start' => date("YmdHis"),//交易开始时间
				'time_expire' => date("YmdHis", time() + 604800),//一周过期
				'goods_tag' => '在线充值余额',
				'notify_url' => request()->domain().url('home/payw/weixin_notify'),
				'trade_type' => 'NATIVE',
				'product_id' => rand(1,999999),
			]);
           //halt($result);
			if(!$result['code']){
			    echo 'ss';die;
				return $this->error($result['msg']);
			}
			return $this->success($result['msg']);
		}
		$out_number=input('get.out_number');
		//halt($out_number);
		$this->view->orderid = $out_number.mt_rand(1000,9999);
		return $this->fetch();
    }

	public function weixin_notify()
	{
	    //echo 'ddd';die;
		$notify_data = file_get_contents("php://input");
		//halt($notify_data);
		if(!$notify_data){
			$notify_data = $GLOBALS['HTTP_RAW_POST_DATA'] ?: '';
		}
		if(!$notify_data){
			exit('');
		}
		$Pay = new Paywx();
		$result = $Pay->notify_weixin($notify_data);
		exit($result);
	}
}
