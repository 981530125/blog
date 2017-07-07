<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class ReviewController extends CommonController {
	//评论列表
	Public function index(){	
		// $user=M('User')->where(array('UserName'=>$_SESSION[UserName]))->find();
		// var_dump($user['Uid']);
		 $review=D('review')->order('R_time desc')->relation(true)->select();
		 $this->review=$review;
		 // var_dump($review);
		 // die;
		$this->display();
	}
	//删除评论
	public function delereview(){
		$rid=I('Rid','0','intval');
		//var_dump($rid);
		if($review=D('review')->where(array('Rid'=>$rid))->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}
}
?>