<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="/bkweb/Public/admin/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/bkweb/Public/admin/Js/index.js"></script>
<link rel="stylesheet" href="/bkweb/Public/admin/Css/public.css" />
<link rel="stylesheet" href="/bkweb/Public/admin/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
<img class="admin-logo" src="/bkweb/Public/admin/images/logo.png">
	<div id="top">
		<div class="menu">

			<a href="<?php echo U('admin/index/deploy');?>">配置信息</a>
			
		</div>
		<div class="exit">
			<a href="<?php echo U('admin/index/outlogin');?>" target="_self">退出</a>
			<a href="<?php echo U('home/index/index');?>" target="_blank">网站首页</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>博文管理</dt>
			<dd><a href="<?php echo U('admin/blogsd/index');?>">博文列表</a></dd>
			<dd><a href="<?php echo U('admin/blogsd/addblogs');?>">编辑博文</a></dd>
		</dl>
		<dl>
			<dt>属性管理</dt>
			<dd><a href="<?php echo U('admin/articlefa/index');?>">属性列表</a></dd>
			<dd><a href="<?php echo U('admin/articlefa/addfamily');?>">添加属性</a></dd>
		</dl>
		<dl>
			<dt>分类管理</dt>
			<dd><a href="<?php echo U('admin/articlefr/index');?>">分类列表</a></dd>
			<dd><a href="<?php echo U('admin/articlefr/addartfr');?>">添加分类</a></dd>
		</dl>
		<dl>
			<dt>用户管理</dt>
			<dd><a href="<?php echo U('admin/userinfo/useritem');?>">用户列表</a></dd>
			<dd><a href="<?php echo U('admin/userinfo/adduser');?>">增加用户</a></dd>			
		</dl>
		<dl>
			<dt>评论管理</dt>
			<dd><a href="<?php echo U('admin/review/index');?>">评论列表</a></dd>
			<dd><a href="#">功能标题</a></dd>
		</dl>
		<dl>
			<dt>图片管理</dt>
			<dd><a href="<?php echo U('admin/images/logo');?>">LOGO设置</a></dd>
			<dd><a href="<?php echo U('admin/images/index');?>">设置首页图片</a></dd>
			<dd><a href="<?php echo U('admin/images/updata');?>">修改图片</a></dd>
		</dl>
		<dl>
			<dt>链接管理</dt>
			<dd><a href="<?php echo U('admin/advert/index');?>">首页文字链接设置</a></dd>
			<dd><a href="<?php echo U('admin/advert/adlist');?>">首页文字链接列表</a></dd>
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="<?php echo U('admin/index/deploy');?>"></iframe>
	</div>
</body>
</html>