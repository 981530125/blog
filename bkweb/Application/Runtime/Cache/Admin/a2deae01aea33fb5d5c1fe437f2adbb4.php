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
      <th>专题名称</th>
      <th>专题内容</th>
      <th>操作</th>
    </tr>
    <?php if(is_array($articletype)): foreach($articletype as $key=>$vo): ?><tr>
        <td><?php echo ($vo["Cid"]); ?></td>
        <td><?php echo ($vo["articleType_name"]); ?></td>
        <td><?php echo ($vo["articleType_info"]); ?></td>
        <td>
           [<a href="">修改</a>]
           [<a href="">删除</a>]
        </td>
      </tr><?php endforeach; endif; ?>
  </table>

</body>
</html>