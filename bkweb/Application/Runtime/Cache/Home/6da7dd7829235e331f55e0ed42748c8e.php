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
<link rel="stylesheet" href="/bkweb/Public/index/css/header.css">
<link rel="stylesheet" href="/bkweb/Public/index/css/list.css">
<link rel="stylesheet" href="/bkweb/Public/index/css/footer.css">
<script type="text/javascript" src="/bkweb/Public/index/js/style.js"></script>
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
  <article>
    <div id="tab-list">
    <ul id="ull">
        <li class="active">最新</li><li>关注</li><form method="post" action="#" id="search_form"><input type="text" class="search" placeholder="搜索博客"/></form>
    </ul>
    <section>
     <?php if(is_array($articlelist)): foreach($articlelist as $key=>$al): ?><div class="article-list">
      <div class="list-title"><a href="<?php echo U('/home/'.$al['Aid']);?>" ><?php echo ($al["Title"]); ?></a></div>
      <div class="list-content">
      <p> <?php echo ($al["Summery"]); ?></p>
      </div>
      <div class="list-read"><span class="list-time"><?php echo ($al["SdTime"]); ?></span><span><a href="#">阅读次数</a>(<?php echo ($al["ViewNum"]); ?>)</span><span><a href="#">评论</a>(<?php echo ($al["CommentNum"]); ?>)</span></div>
     </div><?php endforeach; endif; ?>
    </section>   

    <section class="hide">
      <?php if(is_array($absorbblog)): foreach($absorbblog as $key=>$ab): $articleblog=M('article')->where(array('Aid'=>$ab['Aid']))->find();?>
      <div class="article-list">
      <div class="list-title"><a href="<?php echo U('/home/'.$ab['Aid']);?>"><?php echo $articleblog['Title'];?></a></div>
      <div class="list-content">
      <p><?php echo $articleblog['Summery']?></p>
      </div>
      <div class="list-read"><span class="list-time"><?php echo $articleblog['SdTime'] ?></span><span><a href="#">阅读次数</a>(<?php echo $articleblog['ViewNum']?>)</span><span><a href="#">评论</a>(<?php echo $articleblog['CommentNum']?>)</span></div>
     </div><?php endforeach; endif; ?>
    </section>    
</div>
  <div class="pages"></div>
  </article>
<aside> 
  <dl class="content_dl">
    <dt><a href="#">
     <img class="content_userimg" src="/bkweb/Uploads<?php echo ($Headimglink); ?>"></a>
    </dt><div class="hr1"></div>
     <dd>
      <a class="content_name" href="#"><?php echo ($NickName); ?></a>
     <div class="content_btn"><a href="<?php echo U('home/blogeditor/addblogs');?>"><input class="btn" type="button" value="写博客" onclick="#"></a></div>
     <div class="down"></div>
     <div class="sort">
       <div class="title"><span class="fl">分类</span><em class="numn">共<?php echo ($count); ?>篇</em></div>
       <div class="list">
        <ul>
          
            <?php $__FOR_START_16210__=1;$__FOR_END_16210__=8;for($i=$__FOR_START_16210__;$i < $__FOR_END_16210__;$i+=1){ $user=M('user')->where(array('UserName'=>$_SESSION[UserName]))->find(); $sum=D('article')->where(array('Cid'=>$i,'Uid'=>$user['Uid']))->count(); $type=M('articletype')->where(array('Cid'=>$i))->find(); ?>
             <a href="#">
            <span class="name"><?php echo $type['articleType_name'] ?></span><em class="num"><?php
 echo $sum ?></em>
            </a><?php } ?>

          </ul></div>
     </div>
     </dd>
  </dl>
  </aside>
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