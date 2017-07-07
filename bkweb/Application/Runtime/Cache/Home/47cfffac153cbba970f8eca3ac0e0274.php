<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="/bkweb/Public/index/Css/public.css" />
<link rel="stylesheet" href="/bkweb/Public/index/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
  <table class="table">
    <tr>
      <th style="width:28%">标题</th>
      <th style="width:20%"">作者</th>
      <th style="width:20%">时间</th>
      <th>操作</th>
    </tr>
    <?php if(is_array($review)): foreach($review as $key=>$rv): ?><tr>
      <td><a href="<?php echo U('/home/'.$rv['R_articleid']);?>"  target="_blank"><?php echo ($rv["Title"]); ?></a></td>
      <td><?php echo (session('UserName')); ?>&nbsp;||&nbsp;<?php echo ($rv["NickName"]); ?></td>
      <td><?php echo ($rv["R_time"]); ?></td>
      <td><a href="<?php echo U('home/blogadmin/delereview',array('Rid'=>$rv['Rid']));?>">[删除]</a></td>
    </tr>
    <tr>
      <td colspan="4" style="background-color:#F9F9F9"><?php echo ($rv["R_content"]); ?></td>
    </tr><?php endforeach; endif; ?>
  </table>

</body>
</html>