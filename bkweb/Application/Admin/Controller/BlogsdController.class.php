<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class BlogsdController extends CommonController {
	//博文列表
	Public function index(){
		$article=D('article')->relation(true)->select();
		// var_dump($article);
		// $article=M('article')->order('Aid')->select();
		// var_dump($article);
		$this->article=$article;
		$this->display();

	}
	//博文预览
	Public function readblog(){
		$aid=I('id');
		$this->article=D('article')->where(array('Aid'=>$aid))->relation(true)->select();
		// $article=M('article')->where(array('Aid'=>$aid))->select();
		$this->display();
	}
	//添加博文
	Public function addblogs(){
		$articlefamily=M('articlefamily')->order("Fid")->select();
		$this->articlefamily=$articlefamily;
		$articletype=M('articletype')->order('Cid ASC')->select();
		$this->articletype=$articletype;
		$this->display();

	}
	//添加博文处理
	Public function addblogshandle(){
		// var_dump($_POST);
		// $Article = D("article");
  //       $list = $User->relation(true)->Select();
		
		$user=M('user')->where(array('UserName'=>$_SESSION[UserName]))->find();
		// var_dump($user);
		$data=array(
			'Title'=>$_POST['title'],
			'Content'=>$_POST['content'],
			'SdTime'=>date('Y-m-d H:i:s',time()),
			'Cid'=>$_POST['Cid'],
			'Fid'=>$_POST['Fid'],
			'Uid'=>$user['Uid'],
		 	);
		if(M('article')->add($data)){
			M('user')->where(array('Uid'=>$user['Uid']))->setInc('Articlecount');
			$this->success('添加成功',U('admin/blogsd/index'));
		}else{
			$this->error('添加失败');
		}
		// $result=$Article->relation(true)->add($data);
		// var_dump($result);
		// if($)
		// var_dump($data);
		// var_dump($_POST);
		// var_dump($_SESSION[UserName]);
	}
	 //删除博客
    Public function deleblog(){
    	$id=I('id','','intval');
        $Article = M("article"); // 实例化User对象
         if($Article->where(array('Aid'=>$id))->delete()){
         	M("review")->where(array('R_articleid'=>$id))->delete();
         	$this->success('删除成功');
         }else{
         	$this->error('删除失败');
         }
    }
}
?>