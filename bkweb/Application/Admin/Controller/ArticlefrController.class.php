<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class ArticlefrController extends CommonController {
	//分类列表
	Public function index(){
		$articletype=M('articletype')->order('Cid ASC')->select();
		// var_dump($articletype);
		$this->articletype=$articletype;
		$this->display();
	}
	//添加分类视图
    Public function addartfr(){
    	$this->display();
    }
    //添加分类处理
    Public function runAddartype(){
    	if(M('articletype')->add($_POST)){
    		$this->success("添加成功",U('admin/Articlefr/index'));
    	}else{
    		$this->error("添加失败");
    	}
    }
}
?>