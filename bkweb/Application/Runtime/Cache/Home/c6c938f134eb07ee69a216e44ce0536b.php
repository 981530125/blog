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
  <table class="table">
<?php if(is_array($user)): foreach($user as $key=>$v): ?><tr>
      <th colspan="2" align="left">添加用户</th>
     </tr>
     <tr>
      <td align="right" style="width:18%">用户头像：</td>
      <td>
      <span name="Headimglink"><img src="/bkweb/Uploads<?php echo ($v["Headimglink"]); ?>"></span>
      </td>
    </tr>
    <tr>
      <td align="right" style="width:18%">用户名：</td>
      <td>
      <span name="UserName"><?php echo (session('UserName')); ?></span>
      </td>
    </tr>

    <tr>
      <td align="right">昵称：</td>
      <td>
      <span name="NickName"><?php echo ($v["NickName"]); ?></span>
      </td>
    </tr>
    <tr>
      <td align="right">性别：</td>
      <td>
            <span name="Sex"><?php echo ($v["Sex"]); ?></span>
      </td>
    </tr>
    <tr>
      <td align="right">年龄：</td>
      <td>
      <span name="age"><?php echo ($v["age"]); ?></span>
    </td>
    </tr>
    <tr>
      <td align="right">职业：</td>
      <td>
       <span name="occupation"><?php echo ($v["occupation"]); ?></span>
    </td>
    </tr>
    <tr>
      <td align="right">地址：</td>
      <td>
      <span name="address"><?php echo ($v["address"]); ?></span>
    </td>
    </tr>
    <tr>
      <td align="right">电子邮箱：</td>
      <td>
      <span name="Email"><?php echo ($v["Email"]); ?></span>
    </td>
    </tr>
    <tr>
      <td align="right">自我描述：</td>
      <td>
      <span name="Description"><?php echo ($v["Description"]); ?></span>
    </td>
    </tr><?php endforeach; endif; ?>
   </table>
</body>
</html>