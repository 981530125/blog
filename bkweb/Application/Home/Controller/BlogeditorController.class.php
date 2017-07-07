<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
class BlogeditorController extends CommonController {
	Public function useriflist(){
		$user=M('user')->where(array('UserName'=>$_SESSION[UserName]))->select();
		$this->user=$user;
		$this->display();
	}
//修改个人信息
	Public function userinfo(){
		$this->display();
	}
//个人信息处理
	Public function adduserhandle(){
		// $data=array(
		// 	'NickName'=>$_POST['NickName'],
		// 	'Sex'=>$_POST['Sex'],
		// 	'age'=>$_POST['age'],
		// 	'occupation'=>$_POST['occupation'],
		// 	'address'=>$_POST['address'],
		// 	'Email'=>$_POST['Email'],
		// 	'Description'=>$_POST['Description'],
		// 	);
		// var_dump($data);
		if($user=M('user')->where(array('UserName'=>$_SESSION[UserName]))->save($_POST)){
			$this->success('添加成功',U('home/blogeditor/useriflist'));
		}else{
			$this->error('添加失败');
		}
		
		//var_dump($user);
	}
	//头像
	Public function userimg(){
		$this->display();
	}
	Public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './'; // 设置附件上传根目录
        $upload->savePath  =     '/'; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            // $this->success('上传成功！');
            foreach($info as $file){
                $Headimglink=$file['savepath'].$file['savename'];
                if(M('user')->where(array('UserName'=>$_SESSION[UserName]))->setField('Headimglink',$Headimglink)){
                	$this->success('上传成功!',U('home/blogeditor/useriflist'));
                }else{
                	$this->error('上传失败！');
                }
                
            }
        }
    }

//文章列表
    public function index(){
    	$user=M('user')->where(array('UserName'=>$_SESSION[UserName]))->find();
    	// var_dump($user);
     	 $article=D('article')->relation(true)->where(array('Uid'=>$user['Uid']))->select();
		// // var_dump($article);
		// // $article=M('article')->order('Aid')->select();
		// var_dump($article);
		 $this->article=$article;
    	 $this->display();
    }
    //发表文章
    Public function addblogs(){
		$articlefamily=M('articlefamily')->order("Fid")->select();
		$this->articlefamily=$articlefamily;
		$articletype=M('articletype')->order('Cid ASC')->select();
		$this->articletype=$articletype;
		$this->display();

	}
	//添加处理
    Public function addblogshandle(){
		// var_dump($_POST);
		// $Article = D("article");
  //       $list = $User->relation(true)->Select();
		
		$user=M('user')->where(array('UserName'=>$_SESSION[UserName]))->find();
		// var_dump($user);
		$data=array(
			'Title'=>$_POST['title'],
			'Summery'=>$_POST['Summery'],
			'Content'=>$_POST['content'],
			'SdTime'=>date('Y-m-d H:i:s',time()),
			'Cid'=>$_POST['Cid'],
			'Fid'=>$_POST['Fid'],
			'Uid'=>$user['Uid'],
		 	);
		if($_POST['content']==''||$_POST['title']==''){
			$this->error('添加失败，内容或标题不能为空');
		}else{
		    if(M('article')->add($data)){
		     	  M('user')->where(array('Uid'=>$user['Uid']))->setInc('Articlecount');
		        	$this->success('添加成功',U('home/bloglist/index'));
		      }else{
		        	$this->error('添加失败');
	     	}
	    }
		// $result=$Article->relation(true)->add($data);
		// var_dump($result);
		// if($)
		// var_dump($data);
		// var_dump($_POST);
		// var_dump($_SESSION[UserName]);
	}
	//删除文章
	Public function deleteblog(){
		$Aid=I('id');
		if(M('article')->where(array('Aid'=>$Aid))->delete()){
			$this->success("删除成功");
		}else{
			$this->error('删除失败');
		}
	}
	//修改密码
	Public function paswd(){
		$this->display();

	}
	Public function paswdhandle(){
		$paswd=$_POST['Password'];
		$againpaswd=$_POST['againPassword'];
		//var_dump($paswd);
		$user=M('user');
		if($paswd==$againpaswd){
		   if($user->where(array('UserName'=>$_SESSION[UserName]))->setField('Password',$paswd)){
			   $this->success('修改成功',U('home/bloglist/index'));
		     }else{
		    	$this->error('修改失败');
		     }
		 }else{
		 	$this->error('两次密码不一致');
		 }
	}
	//推荐
	Public function tuij(){
		$aid=I('id','','intval');
		 $article=M('article');
        if($article->where(array('Aid'=>$aid))->setField('recom','1')){
            $this->success('推荐成功');
        }else{
            $this->error('推荐失败');
        }
	}
	Public function canceltuij(){
		$aid=I('id','','intval');
		 $article=M('article');
        if($article->where(array('Aid'=>$aid))->setField('recom','0')){
            $this->success('取消推荐');
        }else{
            $this->error('取消失败');
        }
	}
	//评论
	

}
?>