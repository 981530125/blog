<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="/bkweb/Public/index/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/bkweb/Public/index/Js/index.js"></script>
<link rel="stylesheet" href="/bkweb/Public/index/Css/public.css" />
<link rel="stylesheet" href="/bkweb/Public/index/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
<form action="<?php echo U("home/blogeditor/paswdhandle");?>" method="post">
  <table class="table">
    <tr>
      <th colspan="2" align="left">修改密码</th>
     </tr>
    <tr>
      <td align="right">用户名：</td>
      <td>
      <span name="UserName"><?php echo (session('UserName')); ?></span>
      </td>
    </tr>
    <tr>
      <td align="right">新密码：</td>
      <td>
      <input type="password" name="Password"/>
      </td>
    </tr>
    <tr>
      <td align="right">再次输入新密码：</td>
      <td>
      <input type="password" name="againPassword"/>
      </td>
    </tr>
    <tr>
     <td colspan="2" align="center">
       <input class="subt" type="submit" value="添加保存"/>
    </tr>
   </table>
</form>
</body>
</html>