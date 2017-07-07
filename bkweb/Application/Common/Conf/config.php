<?php
return array(
	//'配置项'=>'配置值'
    //公用配置文件
	'APP_GROUP_LIST' => 'Home,Admin',
    //默认分组
    'DEFAULT_GROUP' => 'Home',
    //数据库链接参数
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'127.0.0.1',
    'DB_USER'=>'root',
    'DB_PWD'=>'root',
    'DB_NAME'=>'myblog',
    'DB_PREFIX'=>'tb_',
    'URL_MODEL'=>1,
    'DEFAULT_FILTER'=>'htmlspecialchars',
    // 'DB_CHARSET' => 'utf8',
    //默认点语法解析

    'TMPL_VAR_IDENTIFY'=>'array',

    //可以减少一个文件夹目录

    'TMPL_FILE_DEPR'=>'-',  
    //自定义SESSION数据库存储
    'SESSION_TYPE'=>'Db',
    'URL_ROUTER_ON'=>true,
    'URL_ROUTE_RULES'=>array(
         '/^c_(\d+)$/'=>'Blogtype/index?id=:1',
         ':id\d'=>'Blogcontent/index',
        )
);