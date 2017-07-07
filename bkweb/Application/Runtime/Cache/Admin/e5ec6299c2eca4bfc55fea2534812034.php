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
      <th>属性ID</th>
      <th>属性名称</th>
      <th>操作</th>
    </tr>
    <?php if(is_array($articlefa)): foreach($articlefa as $key=>$v): ?><tr>
        <td><?php echo ($v["Fid"]); ?></td>
        <td><?php echo ($v["familyname"]); ?></td>
        <td>
           [<a href="<?php echo U('admin/articlefa/addfamily');?>">增加</a>]
           [<a href="">删除</a>]
        </td>
      </tr><?php endforeach; endif; ?>
  </table>

</body>
</html>