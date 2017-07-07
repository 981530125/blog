<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class BlogadminController extends CommonController {
	//后台首页
    public function index(){
    	$this->display();
    }
    Public function readblog(){
		$aid=I('id');
		$this->article=D('article')->where(array('Aid'=>$aid))->relation(true)->select();
		// $article=M('article')->where(array('Aid'=>$aid))->select();
		$this->display();
	}
	//评论
	Public function reviewblog(){
		 $user=M('User')->where(array('UserName'=>$_SESSION[UserName]))->find();
		// var_dump($user['Uid']);
		 $review=D('review')->where(array('R_authorID'=>$user['Uid']))->order('R_time desc')->relation(true)->select();
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
	//好友列表
	public function friendlist(){
		$user=M('User')->where(array('UserName'=>$_SESSION[UserName]))->find();
		$friends=M("friend")->where(array('Userid'=>$user['Uid']))->select();
		$this->friends=$friends;
		$this->display();
	}
	//好友关注
	Public function friendhandle(){
		$friendid=I('friendid','0','intval');
		if($friendlist=M('friend')->where(array('UserName'=>$_SESSION[UserName],'friend_friendid'=>$friendid))->delete()){
			$this->success('已取消关注');
		}else{
			$this->error('取消失败');
		}
	}
}
?>