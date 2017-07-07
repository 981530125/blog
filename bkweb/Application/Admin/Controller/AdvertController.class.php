<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class AdvertController extends CommonController {
	Public function index(){
		$this->display();

	}
	Public function adlist(){
		$ad=M('advertisement')->select();
		$this->ad=$ad;
		$this->display();
	}
	Public function adone(){
		$ad=I('ad_content');
		$Link=I('ad_id');
		$data=array(
			'Ad'=>$ad,
			'Link'=>$Link
			);
		if(M('advertisement')->where(array('Did'=>1))->save($data)){
			$this->success('修改成功!');
		}else{
			$this->error('修改失败');
		}
	}
	Public function adtwo(){
		$ad=I('ad_content');
		$Link=I('ad_id');
		$data=array(
			'Ad'=>$ad,
			'Link'=>$Link
			);
		if(M('advertisement')->where(array('Did'=>2))->save($data)){
			$this->success('修改成功!');
		}else{
			$this->error('修改失败');
		}
	}
	Public function adthree(){
		$ad=I('ad_content');
		$Link=I('ad_id');
		$data=array(
			'Ad'=>$ad,
			'Link'=>$Link
			);
		if(M('advertisement')->where(array('Did'=>3))->save($data)){
			$this->success('修改成功!');
		}else{
			$this->error('修改失败');
		}
	}
}
?>