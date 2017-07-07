<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    //登录页
	//判断是否登录
    // public function session_state(){
    // 	echo json_encode($_SESSION);
    // }
    //登录
   public function login(){
    	if(!IS_POST) E('页面不存在');	
		 $username=I('username');
		 $pwd=I('password','','');
		  $user=M('user')->where(array('UserName'=>$username))->find();
		if(!$user||$user['Password']!=$pwd){
			$this->error('账号未注册或密码错误');
		}
		$data=array(
			'Uid'=> $user['Uid'],
			'LastLoginTime'=> date('Y-m-d H:i:s',time()),
			'Lastip'=> get_client_ip(),
			);
		// var_dump($data);
		 M('user')->save($data);
		session(C('USER_AUTH_KEY'),$user['Uid']);
		//session('Uid',$user['Uid']);
		session('UserName',$user['UserName']);
        session('LastLoginTime',date('Y-m-d H:i:s',$user['LastLoginTime']));
        session('Lastip',$user['Lastip']);
        // $this->($_SESSION[UserName]);
        $this->success('登录成功');
        // $this->redirect('home/index/index');
    }
    //退出
    Public function loginout(){
		@setcookie('auto',time()-1,'/');
		session_unset();
		session_destroy();
		$this->redirect('home/index/index');
	}




    // Public function login_exe(){
    // 	$data=array(
    // 		'UserName'=>$_POST['username'],
    // 		'Password'=>$_POST['password'],
    // 		// 'flag'=>array('neq',0)
    // 		);
    // 	 // var_dump($data);
    // 	// var_dump(M('user')->where($data)->find());
    // 	if(M('user')->where($data)->find()){
    // 		$_SESSION['homeuser']=$_POST['username'];
    // 		$_SESSION['islogin']=2;
    // 		 echo "1";
    // 		 $this->success("登录成功",U('home/index/index'));
    // 		 // var_dump($_SESSION);

    // 	}else{
    // 		 $this->error("登录失败！，请重新登录",U('home/index/index'));
    // 	}
    // }
}
?>