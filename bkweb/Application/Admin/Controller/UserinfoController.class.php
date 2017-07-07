<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class UserinfoController extends CommonController {
	    //用户列表
    Public function useritem(){
        $useritem=M('user')->order('Uid ASC')->select();

         $this->useritem=$useritem;
         $this->display();
    }
    //设置用户状态
    Public function userstatus(){
        $id=I('id','','intval');
        $user=M('user');
        if($user->where(array('Uid'=>$id))->setField('Status','1')){
            $this->success('修改成功',U('admin/userinfo/useritem'));
        }else{
            $this->error('修改失败');
        }

    }
    Public function usernostatus(){
        $id=I('id','','intval');
        $user=M('user');
        if($user->where(array('Uid'=>$id))->setField('Status','0')){
            $this->success('修改成功',U('admin/userinfo/useritem'));
        }else{
            $this->error('修改失败');
        }

    }
    //修改用户
    Public function alteruser(){
    	$this->display();
    }
    Public function alteruserhandle(){
    	// $nickname=$_POST;
    	 // var_dump($nickname);
    	 $id=I('Uid');
    	 $nickname=I('NickName');
    	  // var_dump($id);
    	   $user = M("user");
    	 if($user->where(array('Uid'=>$id))->setField(array('NickName'=>$nickname))){
    	 	$this->success('修改成功',U('admin/userinfo/useritem'));
    	 }else{
    	 	$this->error('修改失败');
    	 }
    }
    //删除用户
    Public function deleteuser(){
    	$id=I('id','','intval');
        $User = M("user"); // 实例化User对象
         if($User->where(array('Uid'=>$id))->delete()){
         	$this->success('修改成功',U('admin/userinfo/useritem'));
         }else{
         	$this->error('修改成功');
         }
    }
    //增加用户
    Public function adduser(){
        $this->display();
    }

    Public function adduserhandle(){
        if(M('user')->add($_POST)){
            $this->success("添加成功",U('admin/userinfo/useritem'));
        }else{
            $this->error("添加失败");
        }
    }
}
?>