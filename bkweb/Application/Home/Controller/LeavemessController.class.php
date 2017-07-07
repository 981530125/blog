<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class LeavemessController extends Controller {
	//博客首页
    public function index(){
    	// var_dump(111);
    	$leave=M('message')->order('Leavetime desc')->select();
    	$this->leave=$leave;
    	
    	$this->display();
    }
    public function lemess(){
    	$Content=I('content');
    	$user=M('user')->where(array('UserName'=>$_SESSION[UserName]))->find();
    	if($user){
    	if($Content){
    		$data=array(
    		'Nickname'=>$user['NickName'],
    		'Content'=>$Content,
    		'Leavetime'=>date('Y-m-d H:i:s',time())
    		);
    	if(M('message')->add($data)){
    		$this->success("发布成功");
    	}else{
    		$this->error("发布失败");
    	}
    }else{
    	$this->error("内容不能为空，请输入内容");
    }
}else{
	$this->error("用户未登录，请登录！");
}
    	
    }
}
?>