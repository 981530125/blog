<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class RegController extends Controller {
	//注册页
    public function index(){
    	//打印session   ，var_dump($_SESSION[UserName]);
    	$this->display();
    }
    
    // Public function addajax(){
		  // $username=I('username');
		  //  $use=M('user')->where(array('UserName'=>$username))->find();
		  //  if($use){
		  //  	echo 1 ;
		  // }else{
		  // 	echo 0;
		  // }
    //   }
    Public function reguser(){
    	if(IS_POST){
    	    $verify=I('post.code','');
		    if(!check_verify($verify)){
		    	$this->error("验证码错误",$this->site_url,4);
		    }	    		
    		$username=I('username');
		    $user=M('user')->where(array('UserName'=>$username))->find();
		if($user){
			$this->error('账号已存在,注册失败');
		}else{
			$ruser=array(
               'UserName'=>I('username'),
		       'Password'=>I('password','',''),
		       'NickName'=>I('username'),
		       'LastLoginTime'=> date('Y-m-d H:i:s',time()),
			   'Lastip'=> get_client_ip(),
    		  );
			// var_dump($ruser);
			if(M('user')->add($ruser)){
				$this->success('添加成功',U('home/index/index'));
		        session(C('USER_AUTH_KEY'),$user['Uid']);
		//session('Uid',$user['Uid']);
		        session('UserName',$user['UserName']);
		        session('NickName',$user['NickName']);
                session('LastLoginTime',date('Y-m-d H:i:s',$user['LastLoginTime']));
                session('Lastip',$user['Lastip']);
			 }else{
			 	$this->error('添加失败');
			 }
		   }
    	}	
    }
    Public function verify_c(){
		$Verify=new\Think\Verify();
		$Verify->fontSize=17;
		$Verify->length=1;
		$Verify->useNoise=false;
		$Verify->codeSet='0123456789';
		$Verify->imageW=90;
		$Verify->imageH=40;
		$Verify->entry();
	}
}