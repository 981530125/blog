<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	  $this->display();

    }
    public function login(){
    	if(!IS_POST) E('页面不存在');	
		 $username=I('username');
		 $pwd=I('password','','');
		  $user=M('user')->where(array('UserName'=>$username))->find();
		if(!$user||$user['Password']!=$pwd){
			$this->error('账号或密码错误');
		}
		if(!$user['Status']) $this->error('用户未激活');
		$data=array(
			'Uid'=> $user['Uid'],
			'LastLoginTime'=> date('Y-m-d H:i:s',time()),
			'Lastip'=> get_client_ip(),
			);
		// var_dump($data);
		 M('user')->save($data);
		//session(C('USER_AUTH_KEY'),$user['Uid']);
		//session('Uid',$user['Uid']);
		session('Admin_USER',$user['UserName']);
       session('LastLoginTime',date('Y-m-d H:i:s',$user['LastLoginTime']));
       session('Lastip',$user['Lastip']);

        $this->redirect('admin/index/index');
    }
}
?>