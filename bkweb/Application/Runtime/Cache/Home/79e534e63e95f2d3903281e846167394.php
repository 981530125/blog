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
      <th style="width:28%">好友</th>
      <th style="width:20%">状态</th>
      <th>操作</th>
    </tr>
    <?php if(is_array($friends)): foreach($friends as $key=>$fs): ?><tr>
      <td><a href="<?php echo U('/home/bloguser/index',array('id'=>$fs['friend_friendid']));?>" target="_blank"><?php echo ($fs["friend_nickname"]); ?>&nbsp;&nbsp;&nbsp;(可点击查看)</a></td>
      <td>已关注</td>
      <td><a href="<?php echo U('home/blogadmin/friendhandle',array('friendid'=>$fs['friend_friendid']));?>">[取消关注]</a></td>
    </tr><?php endforeach; endif; ?>
  </table>

</body>
</html>