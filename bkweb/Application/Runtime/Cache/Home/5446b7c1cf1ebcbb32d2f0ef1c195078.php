<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css"  rel="stylesheet"  href="/bkweb/Public/index/css/reset.css">
<link type="text/css"  rel="stylesheet"  href="/bkweb/Public/index/css/pop.css">
<link type="text/css"  rel="stylesheet"  href="/bkweb/Public/index/css/footer.css">
<script type="text/javascript" src="/bkweb/Public/index/js/jquery-1.7.2.min.js"></script>
<link rel="Stylesheet" type="text/css" href="/bkweb/Public/index/css/loginDialog.css" />
<title>博客</title>
<!-- 头部 -->
<link rel="stylesheet" href="/bkweb/Public/index/Css/public.css" />

<script type="text/javascript">
window.UEDITOR_HOME_URL="/bkweb/Public/index/data/editor/";
// 
window.onload=function(){
  window.UEDITOR_CONFIG.initialFrameWidth=1100;
  window.UEDITOR_CONFIG.initialFrameHeight=500;
  UE.getEditor("content").getContent();
}
</script>
<script src="/bkweb/Public/index/data/editor/ueditor.config.js"></script>
<script src="/bkweb/Public/index/data/editor/ueditor.all.min.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
</head>
<body>
<!-- 登录 -->
<div class="header_bar">
   <div class="top_bar">
      <div class="header fl"><a href="<?php echo U('home/index/index');?>"  target="_self" >博客</a></div>
    <div class="header_d fr" id="login_exe">
    <?php if(!isset($_SESSION['UserName'])): ?><a href="##" id="login_dl">[登 录]</a>
    <a href="<?php echo U('home/reg/index');?>">[注 册]</a>
    <?php else: ?>
    <span id="login_dl">您好！<?php echo (session('UserName')); ?></span>
    <a href="<?php echo U('home/login/loginout');?>" target="_self">退出</a><?php endif; ?>
      <span class="search_a"><img src="/bkweb/Public/index/images/search1.png"></span>
      <span class="menu_a" id="menu_a"><img src="/bkweb/Public/index/images/menu2.jpg" ><img src="/bkweb/Public/index/images/menu1.jpg" style="display:none"></span>
      </div>
   </div>
   <div class="menu_pop" id="menu_pop">
      <ul class="pop_content">
        <li><a href="<?php echo U('home/index/index');?>" target="_self">博客首页</a></li>
        <li><a href="<?php echo U('home/blogadmin/index');?>" target="_self">个人管理</a></li>
        <li><a href="<?php echo U('home/blogeditor/addblogs');?>" target="_self">撰写博客</a></li>
        <li><a href="<?php echo U('home/bloglist/index');?>" target="_self">博客列表</a></li>
        <!-- <li><a href="###" target="_self">关注好友</a></li>      -->    
      </ul>
   </div>
</div>
<!-- 点击登录，弹出窗口 -->
    <div id="LoginBox">
      <form id="formid" action="<?php echo U('home/login/login');?>" method="post">
        <div class="row1">
            登录账号<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeBtn">×</a>
        </div>
        <div class="row">
            用户名: <span class="inputBox">
                <input type="text" id="txtName" name="username" placeholder="账号/邮箱" autocomplete="off"/>
            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn">不能为空</a>
        </div>
        <div class="row">
            密&nbsp;&nbsp;&nbsp;&nbsp;码: <span class="inputBox">
                <input type="password" id="txtPwd" name="password" placeholder="密码" />
            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn2">不能为空</a>
        </div>
        <div class="row">
            <input type="submit" id="loginbtn" value="登录">
        </div>
        </form>
    </div>
    <div class="tag">
      <span class="wrimg"><a href="<?php echo U('home/blogeditor/addblogs');?>" target="_self" style="text-decoration:none;"><img class="write_img" src="/bkweb/Public/index/images/write_blog.png" alt="撰写博客"><p class="writeblog">撰写博客</p></a></span>
      <span class="backtop"><a href="#blogtag" style="text-decoration:none;"><img class="backimg" src="/bkweb/Public/index/images/back_top.png" alt="回到顶部"><p class="back_top">回到顶部</p></a></span>
    </div>
  <script type="text/javascript" src="/bkweb/Public/index/js/poplogin.js"></script> 
<form action="<?php echo U("home/blogeditor/addblogshandle");?>" method="post">
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
        <td align="right">摘要：</td>
        <td>
        <textarea name="Summery" id="Summery" ></textarea>
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