<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="/bkweb/Public/admin/Css/public.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
</head>
<body>
<form action="<?php echo U("admin/advert/adone");?>" method="post">
  <table class="table">
    <tr>
      <th colspan="2" align="left">添加广告</th>
     </tr>
    <tr>
      <td align="right">广告1名称：</td>
      <td>
      <input type="text" name="ad_content"/>
      </td>
    </tr>
    <tr>
      <td align="right">博文id：</td>
      <td>
      <input type="text" name="ad_id"/>
      </td>
    </tr>
    <tr>
     <td colspan="2" align="center">
       <input class="subt" type="submit" value="添加保存"/>
    </tr>
   </table>
</form>
<form action="<?php echo U("admin/advert/adtwo");?>" method="post">
  <table class="table">
    <tr>
      <td align="right">广告2名称：</td>
      <td>
      <input type="text" name="ad_content"/>
      </td>
    </tr>
    <tr>
      <td align="right">博客id：</td>
      <td>
      <input type="text" name="ad_id"/>
      </td>
    </tr>
    <tr>
     <td colspan="2" align="center">
       <input class="subt" type="submit" value="添加保存"/>
    </tr>
   </table>
</form>
<form action="<?php echo U("admin/advert/adthree");?>" method="post">
  <table class="table">
    <tr>
      <td align="right">广告3名称：</td>
      <td>
      <input type="text" name="ad_content"/>
      </td>
    </tr>
    <tr>
      <td align="right">博客id：</td>
      <td>
      <input type="text" name="ad_id"/>
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