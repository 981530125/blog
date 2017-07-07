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
  <table class="table">
   <tr>
      <th colspan="7" align="left">添加栏目分类</th>
     </tr>
    <tr>
      <th>ID</th>
      <th>用户名</th>
      <th>昵称</th>
      <th>上次登录IP</th>
      <th>上次登录时间</th>
      <th>用户状态</th>
    </tr>
    <?php if(is_array($useritem)): foreach($useritem as $key=>$v): ?><tr>
        <td><?php echo ($v["Uid"]); ?></td>
        <td><?php echo ($v["UserName"]); ?></td>
        <td><?php echo ($v["NickName"]); ?></td>
        <td><?php echo ($v["Lastip"]); ?></td>
        <td><?php echo ($v["LastLoginTime"]); ?></td>
        <td><?php if($v[Status]): ?>激活&nbsp;&nbsp;&nbsp;[<a href="<?php echo U('admin/userinfo/usernostatus',array('id'=>$v['Uid']));?>">不激活</a>]<?php else: ?>未激活&nbsp;&nbsp;&nbsp;[<a href="<?php echo U('admin/userinfo/userstatus',array('id'=>$v['Uid']));?>">激活</a>]<?php endif; ?></td>
        <td>
           <a class="ml" href="<?php echo U('admin/userinfo/alteruser',array('id'=>$v['Uid']));?>">[修改昵称]</a>
           <a class="ml" href="<?php echo U('admin/userinfo/deleteuser',array('id'=>$v['Uid']));?>">[删除]</a>
        </td>
      </tr><?php endforeach; endif; ?>
  </table>

</body>
</html>