<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="/bkweb/Public/admin/Css/public.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
</head>
<body>
<form action="<?php echo U("admin/articlefa/addfamilyhandle");?>" method="post">
  <table class="table">
    <tr>
      <th colspan="2" align="left">添加属性</th>
     </tr>
    <tr>
      <td align="right">属性名称：</td>
      <td>
      <input type="text" name="articleType_name"/>
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