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
      <th style="width:28%">博文标题</th>
      <th>博文属性</th>
      <th style="width:10%">博文类别</th>
      <th style="width:8%">点击次数</th>
      <th>发布时间</th>
      <th>操作</th>
    </tr>
    <?php if(is_array($article)): foreach($article as $key=>$vo): ?><tr>
        <td class="atitle" width="17%"><?php echo ($vo["Title"]); ?></td>
        <td width="8%"><?php echo ($vo["familyname"]); ?></td>
        <td><?php echo ($vo["articleType_name"]); ?></td>
        <td><?php echo ($vo["ViewNum"]); ?></td>
        <td><?php echo ($vo["SdTime"]); ?></td>
        <td>
           [<a href="<?php echo U('home/blogadmin/readblog',array('id'=>$vo['Aid']));?>">内容预览</a>]
           [<a href="<?php echo U('home/blogeditor/deleteblog',array('id'=>$vo['Aid']));?>">删除</a>]
           <?php if($vo[recom]): ?>已推荐&nbsp;&nbsp;&nbsp;[<a href="<?php echo U('home/blogeditor/canceltuij',array('id'=>$vo['Aid']));?>">取消推荐</a>]<?php else: ?>未推荐&nbsp;&nbsp;&nbsp;[<a href="<?php echo U('home/blogeditor/tuij',array('id'=>$vo['Aid']));?>">推荐</a>]<?php endif; ?><!-- [<a href="<?php echo U('home/blogeditor/tuij',array('id'=>$vo['Aid']));?>">博客推荐</a>] -->
           
        </td>
      </tr><?php endforeach; endif; ?>
  </table>

</body>
</html>