<?php
//import('TagLib');
namespace Home\TagLib;
use Think\Template\TagLib;
//
class My extends TagLib{
	Protected $tags=array(
		'typ'=>array('attr'=>'limit,order','close'=>1),
		'hot'=>array('attr'=>'limit','close'=>1),
		'new'=>array('attr'=>'limit','close'=>1),
		);
	Public function _typ($attr,$content){
		  $attr=$this->$attr;
		$str= <<<str
<?php
   \$typ_articletype=M('articletype')->order("{$attr['order']}")->select();
   foreach (\$typ_articletype as \$typ_v):
   	extract(\$typ_v);
   \$url=U('/home/c_' . \$Cid);
?>
str;
		$str.=$content;
		$str.='<?php endforeach;?>';
		return $str;
	}
	Public function _hot($attr,$content){
		 // $attr = $this->$attr;
		 $limit=$attr['limit'];
       // var_dump($limit);
		$str='<?php ';

        $str.='$field=array("Aid","Title","ViewNum");';
        $str.='$hot_article=M("article")->field($field)->limit('. $limit .')->order("ViewNum desc")->select();';
        $str.='foreach ($hot_article as $hot_v):';
   // foreach (\$hot_article as \$hot_v):
        $str.='extract($hot_v);';
        $str.='$url=U("/home/" . $Aid);?>';
		$str.=$content;
		$str.='<?php endforeach;?>';
		return $str;
	}
		Public function _new($attr,$content){
		 // $attr=$this->$attr;
		 $limit=$attr['limit'];
		$str='<?php ';
        // $str.='$field=array("Aid","Title","SdTime","");';
        $str.='$new_article=D("article")->limit('.$limit.')->order("ViewNum desc")->relation(true)->select();';
        $str.='foreach ($new_article as $new_v):';
   // foreach (\$hot_article as \$hot_v):
        $str.='extract($new_v);';
        $str.='$url=U("/home/" . $Aid);?>';
		$str.=$content;
		$str.='<?php endforeach;?>';
		return $str;
	}

}
?>