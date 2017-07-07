<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="/bkweb/Public/admin/Css/public.css" />
<link rel="stylesheet" href="/bkweb/Public/admin/Css/reset.css" />
<script type="text/javascript">
window.UEDITOR_HOME_URL="/bkweb/Public/admin/data/editor/";
// 
window.onload=function(){
  window.UEDITOR_CONFIG.initialFrameWidth=1100;
  window.UEDITOR_CONFIG.initialFrameHeight=500;
  UE.getEditor("content").getContent();
}
</script>
<script src="/bkweb/Public/admin/data/editor/ueditor.config.js"></script>
<script src="/bkweb/Public/admin/data/editor/ueditor.all.min.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
</head>
<body>
<form action="<?php echo U("admin/blogsd/addblogshandle");?>" method="post">
    <table class="table">
    <tr>
      <th colspan="2" align="left">添加博客</th>
     </tr>
      <tr>
        <td align="right">标题：</td>
        <td>
          <input type="text" name="title" class="title"/>
        </td>

     </tr>
     <tr>
        <td align="right" width="10%">所属属性：</td>
        <td>
          <select name="Fid" class="typet">

            <?php if(is_array($articlefamily)): foreach($articlefamily as $key=>$v): ?><option value="<?php echo ($v["Fid"]); ?>"><?php echo ($v["familyname"]); ?></option><?php endforeach; endif; ?>
          </select>

        </td>

     </tr>
     <tr>
        <td align="right">博文分类：</td>
        <td>
          <select name="Cid" class="typet">
            <?php if(is_array($articletype)): foreach($articletype as $key=>$v): ?><option value="<?php echo ($v["Cid"]); ?>"><?php echo ($v["articleType_name"]); ?></option><?php endforeach; endif; ?>
          </select>
        </td>
     </tr>
     <tr>
       <td colspan="2" align="center">
          <textarea name="content" id="content" ></textarea>
        </td>
     </tr>
     <tr>
       <td align="center" colspan="2">
          <input class="subt" type="submit" value="添加保存"/>
       </td>
     </tr>
     </table>
  </form>
</body>
</html>