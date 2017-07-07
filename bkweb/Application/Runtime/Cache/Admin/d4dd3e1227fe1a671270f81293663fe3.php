<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="/bkweb/Public/admin/Css/yread.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
</head>
<body>
  <div class="bcg">
  <?php if(is_array($article)): foreach($article as $key=>$v): ?><h2 class="ytitle"><?php echo ($v["Title"]); ?></h2>
    
    <div class="ytitle">
     <span>【来源：<?php echo ($v["articleType_name"]); ?>  作者：<?php echo ($v["UserName"]); ?>  时间：<?php echo ($v["SdTime"]); ?>  浏览：<?php echo ($v["ViewNum"]); ?>】</span>
    </div>
    <div class="ycontent">
    <p><?php echo ($v["Content"]); ?></p>
    </div><?php endforeach; endif; ?>
  </div>
</body>
</html>