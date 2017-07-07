<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class BlogrankController extends Controller {
	//排行
    public function index(){
    	$articlerank=M("article")->limit(5)->order('SdTime desc')->select();
        $articlecount=M("user")->limit(5)->order('Articlecount desc')->select();
        $articlerecom=M("article")->limit(5)->order('CommentNum desc')->select();
        $articleview=M("article")->limit(5)->order('ViewNum desc')->select();
        $articlefa=D("article")->where(array('Fid'=>1))->limit(5)->order('SdTime desc')->select();
        $articlefb=D("article")->where(array('Fid'=>2))->limit(5)->order('SdTime desc')->select();
        $numa=$numb=$numc=$numd=$nume=$numf=1;
        $this->assign('numa',$numa);
        $this->assign('numb',$numb);
        $this->assign('numc',$numc);
        $this->assign('numd',$numd);
        $this->assign('nume',$nume);
        $this->assign('numf',$numf);
    	// $blogcount=M();
    	//var_dump($articlerank);die;
    	//var_dump($articleview);die;
    	$this->articlerank=$articlerank;
    	$this->articlecount=$articlecount;
    	$this->articlerecom=$articlerecom;
    	$this->articleview=$articleview;
    	$this->articlefa=$articlefa;
    	$this->articlefb=$articlefb;
    	$this->display();
    }
}
?>