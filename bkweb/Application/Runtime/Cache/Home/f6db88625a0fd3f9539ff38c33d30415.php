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
<form action="<?php echo U("home/blogeditor/adduserhandle");?>" method="post">
  <table class="table">
    <tr>
      <th colspan="2" align="left">个人信息</th>
     </tr>
    <tr>
      <td align="right">用户名：</td>
      <td>
      <span name="UserName"><?php echo (session('UserName')); ?></span>
      </td>
    </tr>
    <tr>
      <td align="right">昵称：</td>
      <td>
      <input type="text" name="NickName"/>
      </td>
    </tr>
    <tr>
      <td align="right">性别：</td>
      <td>
      <input type="radio" name="Sex" value="男" checked="checked"/>男&nbsp;&nbsp;&nbsp;
      <input type="radio" name="Sex" value="女"/>女
    </td>
    </tr>
    <tr>
      <td align="right">年龄：</td>
      <td>
      <input type="text" name="age"/>
    </td>
    </tr>
    <tr>
      <td align="right">职业：</td>
      <td>
      <input type="text" name="occupation"/>
    </td>
    </tr>
    <tr>
      <td align="right">地址：</td>
      <td>
      <input type="text" name="address"/>
    </td>
    </tr>
    <tr>
      <td align="right">电子邮箱：</td>
      <td>
      <input type="text" name="Email"/>
    </td>
    </tr>
    <tr>
      <td align="right">自我描述：</td>
      <td>
      <textarea type="text" name="Description" style="width:350px;height:100px;"></textarea>
    </td>
    </tr>
    <tr>
     <td colspan="2" align="center">
       <input class="subt" type="submit" value="保存修改"/>
    </tr>
   </table>
   </form>
</body>
</html>