<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class ImagesController extends CommonController {
	Public function index(){
		$this->display();
	}
    Public function logo(){
        $images=M('images')->where(array('tid'=>3))->find();
        $this->images=$images;
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
                $Aid=I('Aid');
                // var_dump($Headimglink);
                $data=array(
                	'blogid'=>$Aid,
                	'imageslink'=>$Headimglink
                	);
                if(M('images')->add($data)){
                		$this->success('上传成功!');

                }else{
                        $this->error('上传失败！');
                }
                // var_dump($img=M('images')->setField('imageslink',$Headimglink));
                // if(M('images')->setField('imageslink',$Headimglink)){
                // 	$this->success('上传成功!',U('home/blogeditor/useriflist'));
                // }else{
                // 	$this->error('上传失败！');
                // }
                
            }
        }
    }
    //首页图片修改
    Public function updata(){
    	$this->display();
    }
    //左图片
    Public function uploadleft(){
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
                $Aid=I('Aid');
                // var_dump($Headimglink);
                $data=array(
                	'blogid'=>$Aid,
                	'imageslink'=>$Headimglink
                	);
                if(M('images')->where(array('tid'=>1))->save($data)){
                		$this->success('修改成功!');

                }else{
                        $this->error('修改失败！');
                }
                // var_dump($img=M('images')->setField('imageslink',$Headimglink));
                // if(M('images')->setField('imageslink',$Headimglink)){
                // 	$this->success('上传成功!',U('home/blogeditor/useriflist'));
                // }else{
                // 	$this->error('上传失败！');
                // }
                
            }
        }
    }
    //右图片
    Public function uploadright(){
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
                $Aid=I('Aid');
                // var_dump($Headimglink);
                $data=array(
                	'blogid'=>$Aid,
                	'imageslink'=>$Headimglink
                	);
                if(M('images')->where(array('tid'=>2))->save($data)){
                		$this->success('修改成功!');

                }else{
                        $this->error('修改失败！');
                }
                // var_dump($img=M('images')->setField('imageslink',$Headimglink));
                // if(M('images')->setField('imageslink',$Headimglink)){
                // 	$this->success('上传成功!',U('home/blogeditor/useriflist'));
                // }else{
                // 	$this->error('上传失败！');
                // }
                
            }
        }
    }
    //logo图片
    Public function uploadlogo(){
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
                // var_dump($Headimglink);
                $data=array(
                    'imageslink'=>$Headimglink
                    );
                if(M('images')->where(array('tid'=>3))->save($data)){
                        $this->success('修改成功!');

                }else{
                        $this->error('修改失败！');
                }
                // var_dump($img=M('images')->setField('imageslink',$Headimglink));
                // if(M('images')->setField('imageslink',$Headimglink)){
                //  $this->success('上传成功!',U('home/blogeditor/useriflist'));
                // }else{
                //  $this->error('上传失败！');
                // }
                
            }
        }
    }
}
?>