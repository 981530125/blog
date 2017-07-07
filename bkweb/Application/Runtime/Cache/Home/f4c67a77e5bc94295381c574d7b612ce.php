<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/bkweb/Public/index/css/reset.css">
<link rel="stylesheet" href="/bkweb/Public/index/css/register.css">
<script type="text/javascript" src="/bkweb/Public/index/js/jquery-1.7.2.min.js"></script>
<script>
var verifyURL='<?php echo U("home/reg/verify_c",'','');?>';
 var ajaxadd='<?php echo U("home/reg/addajax");?>';
</script>
<!-- <script type="text/javascript" src="/bkweb/Public/index/js/ajaxla.js"></script> -->
<script type="text/javascript" src="/bkweb/Public/index/js/reg.js"></script> 
</head>
<body>
<div class="login">
<div class="login_bgd"></div>
<div class="login_box">
<h4>注册账号</h4>
<form id="login_form" class="login_form" action="<?php echo U("home/reg/reguser");?>" method="post">
<ul>
<li><input id="username" class="username" type="text" name="username" placeholder="输入用户名或账号"/><span id="tip" class="error"></span></li>
<li><input class="password" type="password" name="password" placeholder="输入密码"/></li>
<li><input class="verify" type="text" name="code" placeholder="输入验证码"/><img  class="code" src="<?php echo U('home/reg/verify_c/');?>" id="code"/> <a class="huan" href="javascript:void(change_code(this));">看不清</a></li>
<li><input class="entry" type="submit" name="button" value="立即注册"/></li>
</form>
</div>
</div>
</body>
</html>