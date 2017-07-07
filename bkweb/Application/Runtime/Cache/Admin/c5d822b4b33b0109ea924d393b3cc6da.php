<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="/bkweb/Public/admin/Css/public.css" />
<link rel="stylesheet" href="/bkweb/Public/admin/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
</head>
<body>
  <table class="table">
    <tr>
      <th>广告序号</th>
      <th>广告名称</th>
      <th>广告文章id</th>
      
    </tr>
    <?php if(is_array($ad)): foreach($ad as $key=>$v): ?><tr>
        <td><?php echo ($v["Did"]); ?></td>
        <td><?php echo ($v["Ad"]); ?></td>
        <td><?php echo ($v["Link"]); ?></td>
      </tr><?php endforeach; endif; ?>
  </table>

</body>
</html>