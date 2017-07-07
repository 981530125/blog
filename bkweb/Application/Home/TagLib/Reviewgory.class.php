<?php
//评论递归排序
  class Reviewgory{
  	Static Public function unlimitedForlevel($review,$html='回复',$R_pid=0,$level=0){
  		$arr=array();
  		foreach ($review as $v) {
  			if($v['R_pid']==$R_pid){
  				$v['level']=$level+1;
  				$v['html']=str_repeat($html, $level);
  				$arr[]=$v;
  				$arr=array_merge($arr,self::unlimitedForlevel($review,$html,$v['Rid'],$level+1));

  			}
  			
  		}
        return $arr;
  	}
  }
?>