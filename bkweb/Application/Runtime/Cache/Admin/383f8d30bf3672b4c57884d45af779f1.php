<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="/bkweb/Public/admin/Css/public.css" />
<link rel="stylesheet" href="/bkweb/Public/admin/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
  <table class="table">
    <tr>
      <th>ID</th>
      <th>博文标题</th>
      <th>博文属性</th>
      <th>博文类别</th>
      <th>点击次数</th>
      <th>发布时间</th>
      <th>发布人</th>
      <th>操作</th>
    </tr>
    <?php if(is_array($article)): foreach($article as $key=>$vo): ?><tr>
        <td><?php echo ($vo["Aid"]); ?></td>
        <td class="atitle" width="17%"><?php echo ($vo["Title"]); ?></td>
        <td width="8%"><?php echo ($vo["familyname"]); ?></td>
        <td><?php echo ($vo["articleType_name"]); ?></td>
        <td><?php echo ($vo["ViewNum"]); ?></td>
        <td><?php echo ($vo["SdTime"]); ?></td>
        <td><?php echo ($vo["UserName"]); ?></td>
        <td>
           [<a href="<?php echo U('admin/blogsd/readblog',array('id'=>$vo['Aid']));?>">内容预览</a>]
           [<a href="<?php echo U('admin/blogsd/deleblog',array('id'=>$vo['Aid']));?>">删除</a>]
        </td>
      </tr><?php endforeach; endif; ?>
  </table>

</body>
</html>