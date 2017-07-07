<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class BloglistController extends CommonController {
	//个人文章列表
    public function index(){
    	//文章列表
    	$user=M('user')->where(array('UserName'=>$_SESSION[UserName]))->find();
        $this->assign('Headimglink',$user['Headimglink']);
    	$this->assign('NickName',$user['NickName']);
    	$articlelist=D('article')->where(array('Uid'=>$user['Uid']))->order('SdTime desc')->select();
    	$this->articlelist=$articlelist;
    	//分类
    	$count=D('article')->where(array('Uid'=>$user['Uid']))->count();
    	$this->assign('count',$count);
    //     for ($i=1;$i<6;$i+=1){
    //     $sum=D('article')->where(array('Cid'=>$i))->count();
    //     $type=M('articletype')->where(array('Cid'=>$i))->find();
    //     var_dump($type['articleType_name']);
    //     var_dump($sum);
    // } 
    	//关注
        $absorbblog=M('favoriteblog')->where(array('Uid'=>$user['Uid']))->select();
        $this->absorbblog=$absorbblog;

    	$this->display();
    }
}
?>