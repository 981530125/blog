<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class BloguserController extends Controller {
	//排行
    public function index(){
    	  $uid=I('id','','intval');
          $this->assign('uid',$uid);
    	if($uid){
    		$use=M('user')->where(array('Uid'=>$uid))->find();
    		$this->assign('NickName',$use['NickName']);
            $this->assign('Headimglink',$use['Headimglink']);
            //博客列表
            $count=D('article')->where(array('Uid'=>$uid))->relation(true)->count();
		    $Page=new\Think\Page($count,5);
		    $Page -> setConfig('header','<span class="rows">共 %TOTAL_ROW% 条记录</span>');
            $Page -> setConfig('first','首页');
            $Page -> setConfig('last','共%TOTAL_PAGE%页');
            $Page -> setConfig('prev','上一页');
            $Page -> setConfig('next','下一页');
            $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
            $Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% &nbsp;&nbsp;&nbsp;&nbsp;%HEADER%');
		    $show=$Page->show();
			$articlelist=D('article')->where(array('Uid'=>$uid))->relation(true)->order('SdTime desc')->limit($Page->firstRow.','.$Page->listRows)->select();	
			$this->assign('articlelist',$articlelist);
		    $this->assign('page',$show);                   
            //用户博客总数，原创文章量，转载文章量
    		$countz=D('article')->where(array('Uid'=>$uid))->count();
            $this->assign('countz',$countz);
            $county=D('article')->where(array('Uid'=>$uid,'Fid'=>'1'))->count();
            $this->assign('county',$county);
            $countx=D('article')->where(array('Uid'=>$uid,'Fid'=>'2'))->count();
            $this->assign('countx',$countx);
            //评论总数
            $reviewnum=M('article')->where(array('Uid'=>$uid))->sum('CommentNum');
            $this->assign('reviewnum',$reviewnum);
            //阅读总数
            $readnum=M('article')->where(array('Uid'=>$uid))->sum('ViewNum');
            $this->assign('readnum',$readnum);
            //文章阅读排行
            $readrank=D('article')->where(array('Uid'=>$uid))->order("ViewNum desc")->limit(5)->relation(true)->select();
            $this->readrank=$readrank;
            //文章评论排行
            $commentrank=D('article')->where(array('Uid'=>$uid))->order("CommentNum desc")->limit(5)->relation(true)->select();
            $this->commentrank=$commentrank;

    	  }else{
    		$this->error("输入404错误！！",U('home/blogrank/index'));
    	  }
          //关注作者
          $fexist=M('friend')->where(array('UserName'=>$_SESSION['UserName'],'friend_friendid'=>$uid))->find();
           if( $fexist){
            $frid=1;
            $this->assign('frid',$frid);
           }
    	$this->display();
    }
}
?>