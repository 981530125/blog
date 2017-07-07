<?php
namespace home\Model;
use Think\Model;
use Think\Model\RelationModel;	
Class ArticleModel extends RelationModel{

	Protected $tableName='article';
	Protected $_link=array(
	  'articletype' => array(
      'mapping_type'  => self::BELONGS_TO,
      'foreign_key'   => 'Cid',
      'mapping_fields'=>'articleType_name',
      'as_fields'=>'articleType_name',
      ),
      'articlefamily' => array(
      'mapping_type'  => self::BELONGS_TO,
      'foreign_key'   => 'Fid',
      'mapping_fields'=>'familyname',
      'as_fields'=>'familyname',
      ),
      'user' => array(
      'mapping_type'  => self::BELONGS_TO,
      'foreign_key'   => 'Uid',
      'mapping_fields'=>'UserName,NickName,Headimglink',
      'as_fields'=>'UserName,NickName,Headimglink',
      ),

  );
}


?>