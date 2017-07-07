<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class BlogzjController extends Controller {
	//专家页
    public function index(){
        //推荐专家，全部专家
    	$user=M('user')->limit(8)->order('Articlecount desc')->select();
    	 $friend=M('user')->where(array('UserName'=>$_SESSION['UserName']))->find();
    	 $friendexist=M('friend')->where(array('Userid'=>$friend['Uid']))->select();
    	//var_dump($friendexist);

    	// $this->assgin('exist',$friendexsit);
    	// $this->assign('numa',$numa);
    	// $article=;
    	// $sumScore = M('article')->where(array('Uid'=>$user['Uid']))->sum('ViewNum');
    	// var_dump($sumScore);
    	// $userread=D('article')->where(array('Uid'=>1))->
    	// for($i=0;$i<$articlecount;$i+=1){

    	// }
    	//var_dump($user[4]['Uid']);
    	$this->user=$user;

        //移动开发专家
        $yd=D('article')->where(array('Cid'=>1))->group('Uid')->relation(true)->order('SdTime desc')->select();
          $this->yd=$yd;
          // 前端开发
          $qd=D('article')->where(array('Cid'=>2))->group('Uid')->relation(true)->order('SdTime desc')->select();
          $this->qd=$qd;
          //编辑语言
          $bj=D('article')->where(array('Cid'=>4))->group('Uid')->relation(true)->order('SdTime desc')->select();
          $this->bj=$bj;
          //互联网
          $hlw=D('article')->where(array('Cid'=>5))->group('Uid')->relation(true)->order('SdTime desc')->select();
          $this->hlw=$hlw;
          //数据库
          $sjk=D('article')->where(array('Cid'=>6))->group('Uid')->relation(true)->order('SdTime desc')->select();
          $this->sjk=$sjk;
          //综合
          $zoh=D('article')->where(array('Cid'=>8))->group('Uid')->relation(true)->order('SdTime desc')->select();
          $this->zoh=$zoh;


    $this->display();
    }
    public function absorb(){
    	$id=I('id','','intval');
    	if(!isset($_SESSION['UserName'])){
 		$this->error('用户未登录，请先登录！！！');
 		
 	}else{
 		$user=M('user')->where(array('UserName'=>$_SESSION['UserName']))->find();
 		$absorbuser=M('user')->where(array('Uid'=>$id))->find();
 		$data=array(
 			'Userid'=>$user['Uid'],
 			'UserName'=>$_SESSION['UserName'],
 			'friend_friendid'=>$id,
 			'friend_nickname'=>$absorbuser['NickName']
 			);
 		if(M('friend')->add($data)){
 			$this->success('关注成功',U('home/blogzj/index'));
 		}else{
 			$this->error('关注失败');
 		}
 		// var_dump($id);
 		// M()
 	}
    }
    // public function allzj(){

    // }
}
?>