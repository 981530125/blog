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
<link type="text/css"  rel="stylesheet"  href="/bkweb/Public/index/css/fenlei.css">
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
</div><div class="null"></div>
<!-- 导航 -->
   <div class="bar_box">
     <ul class="nav">
       <li><a href="<?php echo U('home/index/index');?>" name="blogtag">首页</a></li>
       <li><a href="<?php echo U('home/blogspecial/index');?>">博客专栏</a></li>
       <li><a href="<?php echo U('home/blogzj/index');?>">博客专家</a></li>
       <li><a href="<?php echo U('home/blogrank/index');?>">排行榜</a></li>
       <li><a href="<?php echo U('home/bloglist/index');?>">我的博客</a></li>
       <li><a href="<?php echo U('home/leavemess/index');?>">建议反馈</a></li>
     </ul>
   </div>

<div class="contents clearfix">
  <div class="leftbox">
  <div class="box_title">
    <h3><?php echo ($articleType_name); ?></h3>
    </div>
   <div class="blog_list_warp">
   <?php if(is_array($article)): foreach($article as $key=>$at): ?><dl class="blog_list">
       <dt><a href="#"><img class="headicon" src="/bkweb/Uploads<?php echo ($at["Headimglink"]); ?>"></a><a href="#"><?php echo ($at["UserName"]); ?></a></dt>
       <dd><h3 class="track_ad"><a href="<?php echo U('/home/'.$at['Aid']);?>"><?php echo ($at["Title"]); ?></a></h3><div class="blog_list_c"><?php echo ($at["Summery"]); ?>...</div>
    <div class="blog_list_d clearfix"><div class="blog_list_d_l"><a href="#"><?php echo ($at["articleType_name"]); ?></a></div><div class="blog_list_d_r"><?php echo ($at["SdTime"]); ?><span><i></i><em><?php echo ($at["ViewNum"]); ?></em></span></div></div></dd>
     </dl><?php endforeach; endif; ?>
   </div>
  </div>
  <div class="rightbox">
  <!-- articlefaimly -->
     

     <div class="fenl">
       <div class="mod_title">
         <div class=border_bar></div>
         <h3>专栏分类</h3>
       </div>
        <div class="contents_fenl">
            <ul class="fenl_list">
            <?php
 $typ_articletype=M('articletype')->order("")->select(); foreach ($typ_articletype as $typ_v): extract($typ_v); $url=U('/home/c_' . $Cid); ?><li><a href="<?php echo ($url); ?>"><?php echo ($articleType_name); ?></a></li>
<!--             <li><a href="">前端开发</a></li>
            <li><a href="">架构设计</a></li>
            <li><a href="">编程语言</a></li>
            <li><a href="">互联网</a></li>
            <li><a href="">数据库</a></li>
            <li><a href="">研发管理</a></li>
            <li><a href="">综合</a></li> --><?php endforeach;?>
            </ul>
        </div>
     </div> 

     <!-- articlefaimly -->

     <!--  hotrank -->
          <div class="fenr">
       <div class="modr_title">
         <div class=border_barr></div>
         <h3>热文排行</h3>
       </div>
        <div class="contents_fenr">
            <ul class="fenr_list">
            <?php $field=array("Aid","Title","ViewNum");$hot_article=M("article")->field($field)->limit(8)->order("ViewNum desc")->select();foreach ($hot_article as $hot_v):extract($hot_v);$url=U("/home/" . $Aid);?><li><a href="<?php echo ($url); ?>"><?php echo ($Title); ?></a></li><?php endforeach;?>
<!--             <li><a href="">linux下tomcat的shutdown命令杀不死进</a></li>
            <li><a href="">linux下tomcat的shutdown命令杀不死进</a></li>
            <li><a href="">linux下tomcat的shutdown命令杀不死进</a></li>
            <li><a href="">linux下tomcat的shutdown命令杀不死进</a></li>
            <li><a href="">linux下tomcat的shutdown命令杀不死进</a></li> -->
            </ul>
        </div>
     </div>


       <div class="fenr">
       <div class="modr_title">
         <div class=border_barr></div>
         <h3>友情链接</h3>
       </div>
        <div class="contents_fenr">
            <ul class="fenr_list_link">
            <li><a href="">csdn</a></li>
            <li><a href="">后盾网</a></li>
            <li><a href="">慕课网</a></li>
            <li><a href="">百度</a></li>
            <li><a href="">新浪</a></li>
            </ul>
        </div>
     </div>
  </div>
</div>

<div class="footer clearfix">
   <div class="footer_a clearfix">
     <dl>      
       <dd><a href="">公司简介</a><span class="sl">|</span></dd>
       <dd><a href="">招贤纳士</a><span class="sl">|</span></dd>
       <dd><a href="">广告服务</a><span class="sl">|</span></dd>
       <dd><a href="">联系方式</a><span class="sl">|</span></dd>
       <dd><a href="">版权声明</a><span class="sl">|</span></dd>
       <dd><a href="">合作伙伴</a></dd>
     </dl>
   </div>
      <div class="footer_b clearfix">
      <p> Copyright©1999-2017, ctrip.com. All rights reserved. | ICP证：xxxxxxxxxx</p>
   </div>
</div>
</body>
</html>