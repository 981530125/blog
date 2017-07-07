<?php
namespace home\Model;
use Think\Model;
use Think\Model\RelationModel;	
Class ReviewModel extends RelationModel{

	Protected $tableName='review';
	Protected $_link=array(
	  'article' => array(
      'mapping_type'  => self::BELONGS_TO,
      'foreign_key'   => 'R_articleid',
      'mapping_fields'=>'Title',
      'as_fields'=>'Title',
      ),
      'user' => array(
      'mapping_type'  => self::BELONGS_TO,
      'foreign_key'   => 'R_authorID',
      'mapping_fields'=>'NickName,Headimglink',
      'as_fields'=>'NickName,Headimglink',
      ),

);
}


?>