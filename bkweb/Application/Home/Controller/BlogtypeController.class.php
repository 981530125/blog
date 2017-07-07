<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class BlogtypeController extends Controller {
	//分类页
    public function index(){
    	$Cid=$_GET['id'];
    	$this->article=D('article')->where(array('Cid'=>$Cid))->relation(true)->select();
       	$article_type = M('articletype')->where(array('Cid'=>$Cid))->find();
       	$articleType_name=$article_type['articleType_name'];
        $this->assign('articleType_name',$articleType_name);
    	$this->display();
    }
}
?>