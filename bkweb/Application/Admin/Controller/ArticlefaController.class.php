<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class ArticlefaController extends CommonController {
	//属性列表
	Public function index(){
		$articlefa=M('articlefamily')->order('Fid ASC')->select();
		$this->articlefa=$articlefa;
		$this->display();
	}
	//添加属性视图
    Public function addfamily(){
    	$this->display();
    }
    //添加属性处理
    Public function addfamilyhandle(){
    	if(M('articlefamily')->add($_POST)){
    		$this->success("添加成功",U('admin/Articlefa/index'));
    	}else{
    		$this->error("添加失败");
    	}
    }
}
?>