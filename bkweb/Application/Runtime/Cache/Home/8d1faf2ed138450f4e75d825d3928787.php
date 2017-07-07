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
<link rel="stylesheet" href="/bkweb/Public/index/css/article.css">
<link rel="stylesheet" href="/bkweb/Public/index/css/footer.css">
<script type="text/javascript" src="/bkweb/Public/index/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/bkweb/Public/index/js/review.js"></script>
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



<!-- 主题 -->
<div id="logo">
        <div id="logo_text">
          <h1><a href="index.html"><?php echo ($NickName); ?><span class="logo_colour">的博客</span></a></h1>
          <h2>一切重新开始</h2>
        </div>
      </div>
     <div id="menubar">
        <ul id="menu">
          <li class="selected"><a href="<?php echo U('home/blogeditor/addblogs');?>" target="_self">写博客</a></li>
          <li><?php if($nid): ?><a href="###">已关注</a><?php else: ?><a href="<?php echo U('home/blogcontent/concern',array('id'=>$aid));?>">关注</a><?php endif; ?></li>
        </ul> 
      </div>
<aside>
<div class="grtitle">个人资料</div>
 <div class="personinf"><img src="/bkweb/Uploads<?php echo ($Headimglink); ?>"><div><span><strong><?php echo ($NickName); ?></strong></span></div> </div>
 <div class="person-inform">
    <div class="inform-content">
    <ul>
    <li>原创：<?php echo ($county); ?>篇</li>
    <li>转载：<?php echo ($countx); ?>篇</li>
    <li>文章：<?php echo ($countz); ?>篇</li>
    <li>评论：<?php echo ($reviewnum); ?>条</li> 
    <li>访问：<?php echo ($readnum); ?>次</li> 
    </ul>
</div>
 </div>
 <div class="person-item">
   文章分类
   <ul class="inform-item">
      <?php $__FOR_START_12767__=1;$__FOR_END_12767__=9;for($i=$__FOR_START_12767__;$i < $__FOR_END_12767__;$i+=1){ $article=D('article')->where(array('Aid'=>$_GET['id']))->relation(true)->find(); $sum=D('article')->where(array('Cid'=>$i,'Uid'=>$article['Uid']))->count(); $type=M('articletype')->where(array('Cid'=>$i))->find(); ?>
          <li>
            <span class="name"><?php echo $type['articleType_name'];?></span><em class="num">(<?php
 echo $sum ?>)</em>
            </li><?php } ?>
<!--             <li><a href="#">
            <span class="name">日常记录</span><em class="num">(10)</em>
            </a></li>
            <li><a href="#">
            <span class="name">转载文章</span><em class="num">(10)</em>
            </a></li>
            <li><a href="#">
            <span class="name">前    端</span><em class="num">(10)</em>
            </a></li>
            <li><a href="#">
            <span class="name">工作日志</span><em class="num">(10)</em>
            </a></li> -->
          </ul>
 </div>
  <div class="person-rank">
   阅读排行
   <ul class="inform-rank">
      <?php if(is_array($readrank)): foreach($readrank as $key=>$rr): ?><li><a href="<?php echo U('/home/'.$rr['Aid']);?>">
            <span class="viewrank"><?php echo ($rr["Title"]); ?></span><em class="viewnum">(<?php echo ($rr["ViewNum"]); ?>)</em>
            </a></li><?php endforeach; endif; ?>
          </ul>
 </div>
<div class="person-rank">
   评论排行
   <ul class="inform-rank">
       <?php if(is_array($commentrank)): foreach($commentrank as $key=>$cr): ?><li><a href="<?php echo U('/home/'.$cr['Aid']);?>">
            <span class="viewrank"><?php echo ($cr["Title"]); ?></span><em class="viewnum">(<?php echo ($cr["CommentNum"]); ?>)</em>
            </a></li><?php endforeach; endif; ?>
          </ul>
 </div>
</aside>
<article>
<section>
   <h2><span class="familycolor"><?php echo ($familyname); ?></span><a href="#"><?php echo ($Title); ?></a></h2>
    <div class="list-read"><span class="list-time"><?php echo ($SdTime); ?></span><span><a href="#">阅读次数</a>(<?php echo ($ViewNum); ?>)</span><span><a href="#">评论</a>(<?php echo ($CommentNum); ?>)</span><span><a href="#"><?php echo ($articleType_name); ?></a></span></div>
</section>
<section>
<div class="text-content"><?php echo ($Content); ?></div>
<?php M('article')->where(array('Aid'=>$_GET['id']))->setInc('ViewNum'); ?>
</section>
   <div class="blogs-related">
      <h4>相关博客</h4>
      <div class="panel-body">
       <?php if(is_array($articleblog)): foreach($articleblog as $key=>$ab): ?><div class="relate-item">
          <div class="author-info">
          <a href="<?php echo U('/home/'.$ab['Aid']);?>" class="item-title"><?php echo ($ab["Title"]); ?></a>
            <span class="icon"><img src="/bkweb/Uploads<?php echo ($ab["Headimglink"]); ?>"></span>
               <?php echo ($ab["UserName"]); ?>
            </div>    
            <div class="relate-data text-right">
            <i class="icon-see"><img src="/bkweb/Public/index/images/see.png"><?php echo ($ab["ViewNum"]); ?></i>
            <i class="icon-mail"><img src="/bkweb/Public/index/images/mail.png"><?php echo ($ab["CommentNum"]); ?></i></div>
       </div><?php endforeach; endif; ?>
<!--         <div class="relate-item ">
          <div class="author-info">
          <a href="##" class="item-title">常用前端命名规范</a>
            <span class="icon"><img src="/bkweb/Public/index/images/user.jpg"></span>
               Rolle
            </div>    
            <div class="relate-data text-right"><i class="icon-see"><img src="/bkweb/Public/index/images/see.png">1221</i><i class="icon-mail"><img src="/bkweb/Public/index/images/mail.png">1221</i></div>
       </div>

        <div class="relate-item ">
          <div class="author-info">
          <a href="##" class="item-title">常用html、CSS、javascript命名规范</a>
            <span class="icon"><img src="/bkweb/Public/index/images/user.jpg"></span>
               Rolle
            </div>    
            <div class="relate-data text-right"><i class="icon-see"><img src="/bkweb/Public/index/images/see.png">1221</i><i class="icon-mail"><img src="/bkweb/Public/index/images/mail.png">1221</i></div>
       </div> -->


      </div>
      </div>
   <h4>评论(<?php echo ($count); ?>)</h4>


   <div class="comment-list">
     <?php if(is_array($review)): foreach($review as $key=>$rv): ?><div class="comment-leave">
       <div class="comment-user">
         <img src="/bkweb/Uploads<?php echo ($rv["Headimglink"]); ?>">
       </div>
       <div class="layout-column">
         <div class="layout-name"><?php if($rv[R_pid] != 0): echo ($rv["NickName"]); ?><span class="ison"><?php echo ($rv["html"]); ?>楼上</span>
      <?php else: echo ($rv["NickName"]); endif; ?><span id="returnrv">

            <img title="回复" class="returnrv" src="/bkweb/Public/index/images/mail.png">

        <!--  <a href="<?php echo U('home/blogcontent/returnreview',array('pid'=>$rv[R_pid]));?>"><img title="回复" src="/bkweb/Public/index/images/mail.png"></a> -->


         </span></div>
         <div class="layout-date"><span><?php echo ($number++); ?></span><span>楼 <?php echo ($rv["R_time"]); ?></span></div>
         <div class="layout-content"><?php echo ($rv["R_content"]); ?></div>
       </div>
          <div class="blog-comment" name="blogcomment" id="blog-comment" style="display:none">
    <?php if(!isset($_SESSION['UserName'])): ?><span class="isin">您还没有登录,请[登录]或[注册]!!</span>
      <?php else: ?>
      <form action="<?php echo U('home/blogcontent/returnreview');?>" method="post">
     <input type="hidden" name="Aid" value="<?php echo ($aid); ?>">
     <textarea class="txtarea" name="txtarea" autocomplete="off"></textarea>
    <!--  <span class="hint" id="hint"></span> -->
     <input type="hidden" name="R_pid" name="R_pid" value="<?php echo ($rv["Rid"]); ?>">
     <input type="submit" class="btn" name="btn" value="发布评论">
     </form><?php endif; ?>
   </div> 
     </div><?php endforeach; endif; ?>

    <!--  <div class="comment-leave">
       <div class="comment-user">
         <img src="/bkweb/Public/index/images/user.jpg">
       </div>
       <div class="layout-column">
         <div class="layout-name">王宁</div>
         <div class="layout-date"><span>2</span><span>楼 2017/01/18</span></div>
         <div class="layout-content">小程序之三元运算 </div>
       </div>
     </div>

     <div class="comment-leave">
       <div class="comment-user">
         <img src="/bkweb/Public/index/images/user.jpg">
       </div>
       <div class="layout-column">
         <div class="layout-name">王宁</div>
         <div class="layout-date">
           <span>3</span>
           <span>楼 2017/01/18</span>
         </div>
         <div class="layout-content">小程序之三元运小程序之三元运算小程序之三元小程序之三元运算小程序之三元运算小程序之三元运算运算小程序之三元运算小程序之三元运算小程序之三元运算算 </div>
       </div>
     </div>

     <div class="comment-leave">
       <div class="comment-user">
         <img src="/bkweb/Public/index/images/user.jpg">
       </div>
       <div class="layout-column">
         <div class="layout-name">王宁</div>
         <div class="layout-date">
           <span>4</span>
           <span>楼 2017/01/18</span>
         </div>
         <div class="layout-content">小程序之三元运算 </div>
       </div>
     </div>

     <div class="comment-leave">
       <div class="comment-user">
         <img src="/bkweb/Public/index/images/user.jpg">
       </div>
       <div class="layout-column">
         <div class="layout-name">王宁</div>
         <div class="layout-date">
             <span>5</span><span>楼 2017/01/18</span>
         </div>
            <div class="layout-content">小程序之三元运算 </div>
       </div>
     </div> -->

   </div>
 <!--   <form action="" method="post" id="form"> -->  
   <div class="blog-comment" name="blog-comment">
    <?php if(!isset($_SESSION['UserName'])): ?><span class="isin">您还没有登录,请[登录]或[注册]!!</span>
      <?php else: ?>
     <input type="hidden" id="hideid" value="<?php echo ($aid); ?>">
     <textarea class="txtarea" id="txtarea" autocomplete="off"></textarea>
     <span class="hint" id="hint"></span>
     <input type="hidden" name="R_pid" id="R_pid" value="0">
     <input type="submit" class="btn" id="btn" value="发布评论"><?php endif; ?>
   </div> 
   
 <!--   </form> -->
</article>
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
<!-- <script type="text/javascript">
//    window.onload=function(){
//     var form=document.getElementById("form");
//     var formvalue=form.value;
//     if("")
// }
window.onload=function(){
  var aid=document.getElementById('hideid');
  var btn=document.getElementById('btn');
  var hint=document.getElementById('hint');
  btn.onclick=function(){
    var Aid=aid.value;
   var txtarea=document.getElementById('txtarea').value;
     if(!txtarea){
      hint.innerHTML="*内容不能为空";
     }else{
     var xhr=new XMLHttpRequest();
   xhr.open('post','blogcontent/ajaxreview',true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send('Aid='+Aid+'&&txtarea='+txtarea);
    xhr.onreadystatechange=function(){
      if(xhr.readyState==4 && xhr.status==200){
        if(xhr.responseText=="success"){
          hint.innerHTML="上传成功";
        }
        if(xhr.responseText=="error"){
          hint.innerHTML="上传失败";
        }
      }
    }
     }

  }
}
</script> -->
</body>
</html>