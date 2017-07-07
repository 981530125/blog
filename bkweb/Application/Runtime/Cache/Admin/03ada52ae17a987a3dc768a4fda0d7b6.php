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
<form action="<?php echo U("admin/articlefr/adduserhandle");?>" method="post">
  <table class="table">
    <tr>
      <th colspan="2" align="left">添加用户</th>
     </tr>
    <tr>
      <td align="right">用户名：</td>
      <td>
      <input type="text" name="UserName"/>
      </td>
    </tr>
    <tr>
      <td align="right">昵称：</td>
      <td>
      <input type="text" name="NickName"/>
      </td>
    </tr>
    <tr>
      <td align="right">密码：</td>
      <td>
      <input type="text" name="Password"/>
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