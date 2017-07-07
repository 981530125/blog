<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="/bkweb/Public/index/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/bkweb/Public/index/Js/index.js"></script>
<link rel="stylesheet" href="/bkweb/Public/index/Css/public.css" />
<link type="text/css"  rel="stylesheet"  href="/bkweb/Public/index/css/pop.css">
<link rel="stylesheet" href="/bkweb/Public/index/Css/badmin.css" />
<link type="text/css"  rel="stylesheet"  href="/bkweb/Public/index/css/reset.css">
<link rel="Stylesheet" type="text/css" href="/bkweb/Public/index/css/loginDialog.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body style="background:#fff;">
</head>
<body>
<!-- 登录 -->
<div class="header_bar">
   <div class="top_bar">
      <div class="header fl"><a href="<?php echo U('home/index/index');?>"  target="_self" >博客</a></div>
    <div class="header_d fr" id="login_exe">
    <?php if(!isset($_SESSION['UserName'])): ?><a href="##" id="login_dl">[登 录]</a>
    <a href="<?php echo U('home/reg/index');?>">[注 册]</a>
    <?php else: ?>
    <span id="login_dl">您好！<?php echo (session('UserName')); ?></span>
    <a href="<?php echo U('home/login/loginout');?>" target="_self">退出</a><?php endif; ?>
      <span class="search_a"><img src="/bkweb/Public/index/images/search1.png"></span>
      <span class="menu_a" id="menu_a"><img src="/bkweb/Public/index/images/menu2.jpg" ><img src="/bkweb/Public/index/images/menu1.jpg" style="display:none"></span>
      </div>
   </div>
   <div class="menu_pop" id="menu_pop">
      <ul class="pop_content">
        <li><a href="<?php echo U('home/index/index');?>" target="_self">博客首页</a></li>
        <li><a href="<?php echo U('home/blogadmin/index');?>" target="_self">个人管理</a></li>
        <li><a href="<?php echo U('home/blogeditor/addblogs');?>" target="_self">撰写博客</a></li>
        <li><a href="<?php echo U('home/bloglist/index');?>" target="_self">博客列表</a></li>
        <!-- <li><a href="###" target="_self">关注好友</a></li>      -->    
      </ul>
   </div>
</div>
<!-- 点击登录，弹出窗口 -->
    <div id="LoginBox">
      <form id="formid" action="<?php echo U('home/login/login');?>" method="post">
        <div class="row1">
            登录账号<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeBtn">×</a>
        </div>
        <div class="row">
            用户名: <span class="inputBox">
                <input type="text" id="txtName" name="username" placeholder="账号/邮箱" autocomplete="off"/>
            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn">不能为空</a>
        </div>
        <div class="row">
            密&nbsp;&nbsp;&nbsp;&nbsp;码: <span class="inputBox">
                <input type="password" id="txtPwd" name="password" placeholder="密码" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn2">不能为空</a>
        </div>
        <div class="row">
            <input type="submit" id="loginbtn" value="登录">
        </div>
        </form>
    </div>
    <div class="tag">
      <span class="wrimg"><a href="<?php echo U('home/blogeditor/addblogs');?>" target="_self" style="text-decoration:none;"><img class="write_img" src="/bkweb/Public/index/images/write_blog.png" alt="撰写博客"><p class="writeblog">撰写博客</p></a></span>
      <span class="backtop"><a href="#blogtag" style="text-decoration:none;"><img class="backimg" src="/bkweb/Public/index/images/back_top.png" alt="回到顶部"><p class="back_top">回到顶部</p></a></span>
    </div>
  <script type="text/javascript" src="/bkweb/Public/index/js/poplogin.js"></script> 
	<div id="left" style="height:526px;">
	    <dl>
			<dt>个人信息管理</dt>
			<dd><a href="<?php echo U('home/blogeditor/useriflist');?>">查看个人资料</a></dd>
			<dd><a href="<?php echo U('home/blogeditor/userimg');?>">头像上传</a></dd>
			<dd><a href="<?php echo U('home/blogeditor/userinfo');?>">修改个人资料</a></dd>
			<dd><a href="<?php echo U('home/blogeditor/paswd');?>">修改密码</a></dd>
		</dl>
		<dl>
			<dt>博客管理</dt>
			<dd><a href="<?php echo U('home/blogeditor/addblogs');?>" target="_self">发表博客</a></dd>
			<dd><a href="<?php echo U('home/blogeditor/index');?>">文章列表</a></dd>
		</dl>
		<dl>
			<dt>评论管理</dt>
			<dd><a href="<?php echo U('home/blogadmin/reviewblog');?>">参与评论</a></dd>
		</dl>
		<dl>
			<dt>好友管理</dt>
			<dd><a href="<?php echo U('home/blogadmin/friendlist');?>">好友列表</a></dd>
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="<?php echo U('home/blogeditor/useriflist');?>"></iframe>
	</div>
</body>
</html>