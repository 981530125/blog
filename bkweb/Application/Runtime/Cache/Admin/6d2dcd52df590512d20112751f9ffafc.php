<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/bkweb/Public/admin/css/login.css">
<link rel="stylesheet" href="/bkweb/Public/admin/css/reset.css">
<script type="text/javascript" src="/bkweb/Public/admin/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/bkweb/Public/admin/js/login.js"></script>
</head>
<body>
<div class="login">
<div class="login_bgd"></div>
<div class="login_box">
<h4 class="login-title">账号登录</h4>
<form class="login_form" id="login_form" action="<?php echo U("admin/login/login");?>" method="post">
<input class="username" type="text" name="username" placeholder="输入账号或手机号"/>
<input class="password" type="password" name="password" placeholder="输入密码"/>
<input class="entry" type="submit" name="button" value="Sign ln"/>
</form>
<div class="register"><span>还没有博客帐号？ </span><a href="<?php echo U("home/reg/index");?>">立即注册</a></div>
</div>
</div>
</body>
</html>