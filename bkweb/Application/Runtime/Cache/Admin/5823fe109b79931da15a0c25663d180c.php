<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="/bkweb/Public/admin/Css/public.css" />
<link rel="stylesheet" href="/bkweb/Public/admin/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
<form action="/bkweb/index.php/Admin/Images/upload" enctype="multipart/form-data" method="post" >
  <table class="table">
    <tr>
      <th colspan="2" align="left">图片管理</th>
    </tr>
    <tr>
      <td style="width:40%" align="right">首页图片上传：</td>
      <td><input type="file" name="photo" /></td>
    </tr>
     <tr>
      <td style="width:40%" align="right">博文ID</td>
      <td><input type="text" name="Aid" /></td>
    </tr>  
    <tr>
      <td colspan="2" align="center"><input type="submit" value="提交" ></td>
    </tr> 
  </table>
  </form>
</body>
</html>