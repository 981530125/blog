<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class BlogcontentController extends Controller{
	//文章内容
    public function index(){
        //导入TagLib/Reviewgory类
        import('Reviewgory',APP_PATH."/Home/TagLib");
        //content
    	$article=D('article')->where(array('Aid'=>$_GET['id']))->relation(true)->find();

        $Aid=$_GET['id'];
        $username=$_SESSION[UserName];
        $img=M('User')->where(array('Uid'=>$article['Uid']))->find();
        if($username){
            $user=M('User')->where(array('UserName'=>$username))->find();
            $Uid=$user['Uid'];
            $conblog=M('favoriteblog')->where(array('Uid'=>$Uid,'Aid'=>$Aid))->find();
            if($conblog){
                $nid=1;
                $this->assign('nid',$nid);
            }else{
                $nid=0;
                $this->assign('nid',$nid);
            }
        }
        //find()查询符合条件的一条数据
    	//var_dump($article['Title']);
        $typeid=$article['Cid'];
    	$this->assign('Title',$article['Title']);
    	$this->assign('Content',$article['Content']);
    	$this->assign('SdTime',$article['SdTime']);
    	$this->assign('ViewNum',$article['ViewNum']);
        $this->assign('CommentNum',$article['CommentNum']);
        $this->assign('familyname',$article['familyname']);
        $this->assign('NickName',$article['NickName']);
        $this->assign('Headimglink',$img['Headimglink']);
    	$this->assign('articleType_name',$article['articleType_name']);
        $this->assign('aid',$Aid);
        //var_dump($article);
    	//die;
        //var_dump($article['Uid']);
        //类别原创还是转载
        $countz=D('article')->where(array('Uid'=>$article['Uid']))->count();
        $this->assign('countz',$countz);
        $county=D('article')->where(array('Uid'=>$article['Uid'],'Fid'=>'1'))->count();
        $this->assign('county',$county);
        $countx=D('article')->where(array('Uid'=>$article['Uid'],'Fid'=>'2'))->count();
        $this->assign('countx',$countx);
        //相关博客
        $articleblog=D('article')->where(array('Cid'=>$typeid))->limit(3)->order('rand()')->relation(true)->select();
        //find()查询符合条件的多条数据
        $this->articleblog=$articleblog;
        //评论
        $review=D('review')->where(array('R_articleid'=>$Aid))->relation(true)->select();
        $count=D('review')->where(array('R_articleid'=>$Aid))->relation(true)->count();
        $this->assign('count',$count);
        $number=1;
        $this->assign('number',$number);
        //评论总数
        $reviewnum=M('article')->where(array('Uid'=>$article['Uid']))->sum('CommentNum');
        $this->assign('reviewnum',$reviewnum);
        //var_dump($review);die;
        // return $Aid;
        $id=I('pid','0','intval');
        $this->pid=$id;
        $review= \Reviewgory::unlimitedForlevel($review);
        //var_dump(APP_PATH."/Home/TagLib");
       // var_dump($review);
       // die;
        $this->review=$review;
        //文章阅读排行
        $readrank=D('article')->where(array('Uid'=>$article['Uid']))->order("ViewNum desc")->limit(5)->relation(true)->select();
        $this->readrank=$readrank;
        //阅读总数
        $readnum=M('article')->where(array('Uid'=>$article['Uid']))->sum('ViewNum');
        $this->assign('readnum',$readnum);
        //文章评论排行
        $commentrank=D('article')->where(array('Uid'=>$article['Uid']))->order("CommentNum desc")->limit(5)->relation(true)->select();
        $this->commentrank=$commentrank;
    	$this->display();
    }
    //评论
    Public function ajaxreview(){
        // var_dump($_GET['id']);
        $Aid=$_POST['Aid'];
        $content=$_POST['txtarea'];
        $pid=$_POST['pid'];

        $article=D('article')->where(array('Aid'=>$Aid))->relation(true)->find();
       // var_dump($_SESSION[UserName]);
        //$CommentNum=$article['CommentNum'];
        $user=M('user')->where(array('UserName'=>$_SESSION[UserName]))->find();
         // if($content!=''){
            $data=array(
            'R_articleid'=>$Aid,
            'R_userid'=>$article['Uid'],
            'R_authorID'=>$user['Uid'],
            'R_content'=>$content,
            'R_time'=> date('Y-m-d H:i:s',time()),
            'R_pid'=>$pid
            );
         //   var_dump($date);die;
            if(M('review')->add($data)){
                M('article')->where(array('Aid'=>$Aid))->setInc('CommentNum');
                echo "success";
            }else{
                echo "error";
            }
      //  var_dump($data);
        // }else{
        //     echo "isnull";
        // }
        //var_dump($user['Uid']);  
    }
    //评论回复
    Public function returnreview(){
       // var_dump($_POST);
        $Aid=$_POST['Aid'];
        $content=$_POST['txtarea'];
        $pid=$_POST['R_pid'];
        $article=D('article')->where(array('Aid'=>$Aid))->relation(true)->find();
       // var_dump($_SESSION[UserName]);
        $user=M('user')->where(array('UserName'=>$_SESSION[UserName]))->find();
         // if($content!=''){
            $data=array(
            'R_articleid'=>$Aid,
            'R_userid'=>$article['Uid'],
            'R_authorID'=>$user['Uid'],
            'R_content'=>$content,
            'R_time'=> date('Y-m-d H:i:s',time()),
            'R_pid'=>$pid
            );
             if(M('review')->add($data)){
                M('article')->where(array('Aid'=>$Aid))->setInc('CommentNum');
                $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
        //var_dump($id);
        // $this->display();
    }
    //关注
    Public function concern(){
        $aid=I('id','','intval');
        $username=$_SESSION[UserName];
        if($username){
            $user=M('User')->where(array('UserName'=>$username))->find();
            $Uid=$user['Uid'];
                $concernblog=array(
                    'Uid'=>$Uid,
                    'Aid'=>$aid
                    );
                if(M('favoriteblog')->add($concernblog)){
                        $this->success('关注成功');
                    }else{
                        $this->error('关注失败');
                    }   
                
            }else{
            $this->error('请用户先登录');
        }
     }
     // Public function disconcern(){
     //    $aid=I('id','','intval');
     //    $username=$_SESSION[UserName];
     //    var_dump($aid);
     //    var_dump($username);
     //    if($username){
     //        $user=M('User')->where(array('UserName'=>$username))->find();
     //        $Uid=$user['Uid'];
     //        var_dump($Uid);
     //        $conblog=M('favoriteblog')->where(array('Uid'=>$Uid,'Aid'=>$aid))->find();
     //        if($conblog){
     //            $nid=1;
     //            $this->assign('nid',$nid);
     //        }else{
     //            $nid=0;
     //            $this->assign('nid',$nid);
     //        }

     //    }else{
     //        $this->error('请用户先登录');
     //    }
     // }
}
?>