<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	//博客首页
    public function index(){
    	//首页图片
    	$leftimg=M('images')->where(array('tid'=>1))->find();
    	$rightimg=M('images')->where(array('tid'=>2))->find();
    	$this->assign('leftimg',$leftimg);
    	$this->assign('rightimg',$rightimg);
    	//$this->assign('page',$show);

    	// $aid=I('id');
		//$this->article=D('article')->relation(true)->select();
		// var_dump($article);die;
		//博客列表
		$count=D('article')->relation(true)->count();
		// $Page->setConfig('header','个会员');
		$Page=new\Think\Page($count,5);
		 $Page -> setConfig('header','<span class="rows">共 %TOTAL_ROW% 条记录</span>');
         $Page -> setConfig('first','首页');
         $Page -> setConfig('last','共%TOTAL_PAGE%页');
         $Page -> setConfig('prev','上一页');
         $Page -> setConfig('next','下一页');
         $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
         $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% &nbsp;&nbsp;&nbsp;&nbsp;%HEADER%');
		$show=$Page->show();
		// var_dump($show);
		$article=D('article')->relation(true)->order('SdTime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		//var_dump($list);
		//var_dump($article);die;
		 $this->assign('article',$article);
		 $this->assign('page',$show);
         //广告条
         $advert=M('advertisement')->select();
        $this->advert=$advert;
     	$this->display();
    }
}
?>