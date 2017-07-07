<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class BlogspecialController extends Controller {
	//专栏
    public function index(){
    	//文章推荐
    	$viewmax=D('article')->max('ViewNum');
    	$recommend=D('article')->where(array('ViewNum'=>$viewmax))->order('SdTime desc')->relation(true)->find();
    	$this->assign('Aid',$recommend['Aid']);
    	$this->assign('Title',$recommend['Title']);
    	$this->assign('Summery',$recommend['Summery']);
    	//优秀文章
    	 $count=D('article')->where(array('recom'=>1))->relation(true)->count();
		    $Page=new\Think\Page($count,9);
		    $Page -> setConfig('header','<span class="rows">共 %TOTAL_ROW% 条记录</span>');
            $Page -> setConfig('first','首页');
            $Page -> setConfig('last','共%TOTAL_PAGE%页');
            $Page -> setConfig('prev','上一页');
            $Page -> setConfig('next','下一页');
            $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
            $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% &nbsp;&nbsp;&nbsp;&nbsp;%HEADER%');
		    $show=$Page->show();
		    $recomblog=D('article')->where(array('recom'=>1))->relation(true)->order('SdTime desc')->limit($Page->firstRow.','.$Page->listRows)->select();	
			$this->assign('recomblog',$recomblog);
		    $this->assign('page',$show); 

    	$this->display();
    }
}
?>