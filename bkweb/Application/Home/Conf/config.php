<?php
return array(
	//'配置项'=>'配置值'
	//前台配置
	'index'=>'this is index config',
	'TMPL_PARSE_STRING'  =>array(
     '__PUBLIC__' => __ROOT__.'/'.'Public'.'/'.'index',
     ),
	'URL_HTML_SUFFIX'=>'',
	// 'APP_AUTOLOAD_PATH'=>'@.'
     'APP_AUTOLOAD_PATH'=>'@.TagLib',
     'TAGLIB_BUILD_IN' => 'Cx,Home\TagLib\My',
      //加载自定义标签
	);
?>