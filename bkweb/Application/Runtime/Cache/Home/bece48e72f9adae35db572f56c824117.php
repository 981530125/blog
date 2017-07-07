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
<link type="text/css"  rel="stylesheet"  href="/bkweb/Public/index/css/bkzj.css">
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
<div class="null"></div>
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

<article class="content clearfix">
  <div class="content_list">
    <h4 class="content_h4">推荐专家</h4>
    <div class="content_rank">
      <?php if(is_array($user)): foreach($user as $key=>$zj): ?><dl class="content_dl">
       <dt><a href="<?php echo U('/home/bloguser/index',array('id'=>$zj['Uid']));?>">
          <img class="content_userimg" src="/bkweb/Uploads<?php echo ($zj["Headimglink"]); ?>"></a>
       </dt><div class="hr1"></div>
       <dd>
         <a class="content_name" href="#"><?php echo ($zj["UserName"]); ?></a>
         <div class="content_adderss">
           <em><?php echo ($zj["address"]); ?></em>
           <b>|</b>
           <span><?php echo ($zj["occupation"]); ?></span></div>
         <div class="content_cout">
           <div class="content_coutl fl"><b><?php echo ($zj["Articlecount"]); ?></b><span>文章数</span></div>
           <div class="content_coutl fr"><b><?php $sumScore = M('article')->where(array('Uid'=>$zj['Uid']))->sum('ViewNum');echo $sumScore; ?></b><span>阅读量</span></div>
         </div>
<!-- 是否关注 -->
        <div class="content_btn">
         <?php
 $fexist=M('friend')->where(array('UserName'=>$_SESSION['UserName'],'friend_friendid'=>$zj['Uid']))->find(); if( $fexist){ ?>
        <input class="content_btnl" type="button" value="已关注" onclick="#">
        <?php }else{ ?>
        <a href="<?php echo U('home/blogzj/absorb',array('id'=>$zj['Uid']));?>"><input class="content_btnl" type="button" value="关注" onclick="#"></a><?php } ?>
        </div>
       </dd>
      </dl><?php endforeach; endif; ?>
  <!-- 布局结构类型 -->
<!--          <dl class="content_dl">
       <dt><a href="#">
          <img class="content_userimg" src="/bkweb/Public/index/images/user.jpg"></a>
       </dt><div class="hr1"></div>
       <dd>
         <a class="content_name" href="#">黄蓉</a>
         <div class="content_adderss">
           <em>北京</em>
           <b>|</b>
           <span>安卓高级工程师</span></div>
         <div class="content_cout">
           <div class="content_coutl fl"><b>78</b><span>文章数</span></div>
           <div class="content_coutl fr"><b>78</b><span>阅读量</span></div>
         </div>
         <div class="content_btn"><a href="#"><input class="content_btnl" type="button" value="关注" onclick="#"></a></div>
       </dd>
      </dl> -->
    </div>
  </div>
<!-- 所有专家 -->
  <div class="content_classify" id="tab-list">
    <ul id="ull">
    <li class="active">全部专家</li><li >移动开发</li><li>Web前端</li><li>编辑语言</li><li>互联网</li><li>数据库</li><li>综合</li>
    </ul>
<!-- 全部专家 -->
    <section class="content_classify_tabliast">
      <?php if(is_array($user)): foreach($user as $key=>$zj): ?><dl class="content_dl">
       <dt><a href="<?php echo U('/home/bloguser/index',array('id'=>$zj['Uid']));?>">
          <img class="content_userimg" src="/bkweb/Uploads<?php echo ($zj["Headimglink"]); ?>"></a>
       </dt><div class="hr1"></div>
       <dd>
         <a class="content_name" href="#"><?php echo ($zj["UserName"]); ?></a>
         <div class="content_adderss">
           <em><?php echo ($zj["address"]); ?></em>
           <b>|</b>
           <span><?php echo ($zj["occupation"]); ?></span></div>
         <div class="content_cout">
           <div class="content_coutl fl"><b><?php echo ($zj["Articlecount"]); ?></b><span>文章数</span></div>
           <div class="content_coutl fr"><b><?php $sumScore = M('article')->where(array('Uid'=>$zj['Uid']))->sum('ViewNum');echo $sumScore; ?></b><span>阅读量</span></div>
         </div>
<!-- 是否关注 -->
        <div class="content_btn">
         <?php
 $fexist=M('friend')->where(array('UserName'=>$_SESSION['UserName'],'friend_friendid'=>$zj['Uid']))->find(); if( $fexist){ ?>
        <input class="content_btnl" type="button" value="已关注" onclick="#">
        <?php }else{ ?>
        <a href="<?php echo U('home/blogzj/absorb',array('id'=>$zj['Uid']));?>"><input class="content_btnl" type="button" value="关注" onclick="#"></a><?php } ?>
        </div>
       </dd>
      </dl><?php endforeach; endif; ?>
      </section>


<!-- 移动开发 -->
    <section class="content_classify_tabliast hide">
       <?php if(is_array($yd)): foreach($yd as $key=>$y): ?><dl class="content_dl">
       <dt><a href="<?php echo U('/home/bloguser/index',array('id'=>$y['Uid']));?>">
          <img class="content_userimg" src="/bkweb/Uploads<?php echo ($y["Headimglink"]); ?>"></a>
       </dt><div class="hr1"></div>
       <dd>
         <a class="content_name" href="#"><?php echo ($y["UserName"]); ?></a>
         <div class="content_adderss">
         <?php $use=M('user')->where(array('Uid'=>$y['Uid']))->find();?>
           <em><?php echo $use['address'];?></em>
           <b>|</b>
           <span><?php echo $use['occupation'];?></span></div>
         <div class="content_cout">
           <div class="content_coutl fl"><b><?php echo $use['Articlecount'];?></b><span>文章数</span></div>
           <div class="content_coutl fr"><b><?php $sumScore = M('article')->where(array('Uid'=>$y['Uid']))->sum('ViewNum');echo $sumScore; ?></b><span>阅读量</span></div>
         </div>
          <div class="content_btn">
         <?php
 $fexist=M('friend')->where(array('UserName'=>$_SESSION['UserName'],'friend_friendid'=>$y['Uid']))->find(); if( $fexist){ ?>
        <input class="content_btnl" type="button" value="已关注" onclick="#">
        <?php }else{ ?>
        <a href="<?php echo U('home/blogzj/absorb',array('id'=>$y['Uid']));?>"><input class="content_btnl" type="button" value="关注" onclick="#"></a><?php } ?>
        </div>
       </dd>
      </dl><?php endforeach; endif; ?>
      </section>
<!-- Web前端 -->
      <section class="content_classify_tabliast hide">

      <?php if(is_array($qd)): foreach($qd as $key=>$q): ?><dl class="content_dl">
       <dt><a href="<?php echo U('/home/bloguser/index',array('id'=>$q['Uid']));?>">
          <img class="content_userimg" src="/bkweb/Uploads<?php echo ($q["Headimglink"]); ?>"></a>
       </dt><div class="hr1"></div>
       <dd>
         <a class="content_name" href="#"><?php echo ($q["UserName"]); ?></a>
         <div class="content_adderss">
         <?php $use=M('user')->where(array('Uid'=>$q['Uid']))->find();?>
           <em><?php echo $use['address'];?></em>
           <b>|</b>
           <span><?php echo $use['occupation'];?></span></div>
         <div class="content_cout">
           <div class="content_coutl fl"><b><?php echo $use['Articlecount'];?></b><span>文章数</span></div>
           <div class="content_coutl fr"><b><?php $sumScore = M('article')->where(array('Uid'=>$q['Uid']))->sum('ViewNum');echo $sumScore; ?></b><span>阅读量</span></div>
         </div>
          <div class="content_btn">
         <?php
 $fexist=M('friend')->where(array('UserName'=>$_SESSION['UserName'],'friend_friendid'=>$q['Uid']))->find(); if( $fexist){ ?>
        <input class="content_btnl" type="button" value="已关注" onclick="#">
        <?php }else{ ?>
        <a href="<?php echo U('home/blogzj/absorb',array('id'=>$q['Uid']));?>"><input class="content_btnl" type="button" value="关注" onclick="#"></a><?php } ?>
        </div>
       </dd>
      </dl><?php endforeach; endif; ?>
      </section>
<!-- 编辑语言 -->
          <section class="content_classify_tabliast hide">

      <?php if(is_array($bj)): foreach($bj as $key=>$j): ?><dl class="content_dl">
       <dt><a href="<?php echo U('/home/bloguser/index',array('id'=>$j['Uid']));?>">
          <img class="content_userimg" src="/bkweb/Uploads<?php echo ($j["Headimglink"]); ?>"></a>
       </dt><div class="hr1"></div>
       <dd>
         <a class="content_name" href="#"><?php echo ($j["UserName"]); ?></a>
         <div class="content_adderss">
         <?php $use=M('user')->where(array('Uid'=>$j['Uid']))->find();?>
           <em><?php echo $use['address'];?></em>
           <b>|</b>
           <span><?php echo $use['occupation'];?></span></div>
         <div class="content_cout">
           <div class="content_coutl fl"><b><?php echo $use['Articlecount'];?></b><span>文章数</span></div>
           <div class="content_coutl fr"><b><?php $sumScore = M('article')->where(array('Uid'=>$j['Uid']))->sum('ViewNum');echo $sumScore; ?></b><span>阅读量</span></div>
         </div>
          <div class="content_btn">
         <?php
 $fexist=M('friend')->where(array('UserName'=>$_SESSION['UserName'],'friend_friendid'=>$j['Uid']))->find(); if( $fexist){ ?>
        <input class="content_btnl" type="button" value="已关注" onclick="#">
        <?php }else{ ?>
        <a href="<?php echo U('home/blogzj/absorb',array('id'=>$j['Uid']));?>"><input class="content_btnl" type="button" value="关注" onclick="#"></a><?php } ?>
        </div>
       </dd>
      </dl><?php endforeach; endif; ?>
      </section>
<!-- 互联网 -->
          <section class="content_classify_tabliast hide">

      <?php if(is_array($hlw)): foreach($hlw as $key=>$h): ?><dl class="content_dl">
       <dt><a href="<?php echo U('/home/bloguser/index',array('id'=>$h['Uid']));?>">
          <img class="content_userimg" src="/bkweb/Uploads<?php echo ($h["Headimglink"]); ?>"></a>
       </dt><div class="hr1"></div>
       <dd>
         <a class="content_name" href="#"><?php echo ($h["UserName"]); ?></a>
         <div class="content_adderss">
         <?php $use=M('user')->where(array('Uid'=>$h['Uid']))->find();?>
           <em><?php echo $use['address'];?></em>
           <b>|</b>
           <span><?php echo $use['occupation'];?></span></div>
         <div class="content_cout">
           <div class="content_coutl fl"><b><?php echo $use['Articlecount'];?></b><span>文章数</span></div>
           <div class="content_coutl fr"><b><?php $sumScore = M('article')->where(array('Uid'=>$h['Uid']))->sum('ViewNum');echo $sumScore; ?></b><span>阅读量</span></div>
         </div>
          <div class="content_btn">
         <?php
 $fexist=M('friend')->where(array('UserName'=>$_SESSION['UserName'],'friend_friendid'=>$h['Uid']))->find(); if( $fexist){ ?>
        <input class="content_btnl" type="button" value="已关注" onclick="#">
        <?php }else{ ?>
        <a href="<?php echo U('home/blogzj/absorb',array('id'=>$h['Uid']));?>"><input class="content_btnl" type="button" value="关注" onclick="#"></a><?php } ?>
        </div>
       </dd>
      </dl><?php endforeach; endif; ?>
      </section>
<!-- 数据库 -->
          <section class="content_classify_tabliast hide">

      <?php if(is_array($sjk)): foreach($sjk as $key=>$k): ?><dl class="content_dl">
       <dt><a href="<?php echo U('/home/bloguser/index',array('id'=>$k['Uid']));?>">
          <img class="content_userimg" src="/bkweb/Uploads<?php echo ($k["Headimglink"]); ?>"></a>
       </dt><div class="hr1"></div>
       <dd>
         <a class="content_name" href="#"><?php echo ($k["UserName"]); ?></a>
         <div class="content_adderss">
         <?php $use=M('user')->where(array('Uid'=>$k['Uid']))->find();?>
           <em><?php echo $use['address'];?></em>
           <b>|</b>
           <span><?php echo $use['occupation'];?></span></div>
         <div class="content_cout">
           <div class="content_coutl fl"><b><?php echo $use['Articlecount'];?></b><span>文章数</span></div>
           <div class="content_coutl fr"><b><?php $sumScore = M('article')->where(array('Uid'=>$k['Uid']))->sum('ViewNum');echo $sumScore; ?></b><span>阅读量</span></div>
         </div>
          <div class="content_btn">
         <?php
 $fexist=M('friend')->where(array('UserName'=>$_SESSION['UserName'],'friend_friendid'=>$k['Uid']))->find(); if( $fexist){ ?>
        <input class="content_btnl" type="button" value="已关注" onclick="#">
        <?php }else{ ?>
        <a href="<?php echo U('home/blogzj/absorb',array('id'=>$k['Uid']));?>"><input class="content_btnl" type="button" value="关注" onclick="#"></a><?php } ?>
        </div>
       </dd>
      </dl><?php endforeach; endif; ?>
      </section>
      <!-- 综合 -->
          <section class="content_classify_tabliast hide">

      <?php if(is_array($zoh)): foreach($zoh as $key=>$z): ?><dl class="content_dl">
       <dt><a href="<?php echo U('/home/bloguser/index',array('id'=>$z['Uid']));?>">
          <img class="content_userimg" src="/bkweb/Uploads<?php echo ($z["Headimglink"]); ?>"></a>
       </dt><div class="hr1"></div>
       <dd>
         <a class="content_name" href="#"><?php echo ($z["UserName"]); ?></a>
         <div class="content_adderss">
         <?php $use=M('user')->where(array('Uid'=>$z['Uid']))->find();?>
           <em><?php echo $use['address'];?></em>
           <b>|</b>
           <span><?php echo $use['occupation'];?></span></div>
         <div class="content_cout">
           <div class="content_coutl fl"><b><?php echo $use['Articlecount'];?></b><span>文章数</span></div>
           <div class="content_coutl fr"><b><?php $sumScore = M('article')->where(array('Uid'=>$z['Uid']))->sum('ViewNum');echo $sumScore; ?></b><span>阅读量</span></div>
         </div>
          <div class="content_btn">
         <?php
 $fexist=M('friend')->where(array('UserName'=>$_SESSION['UserName'],'friend_friendid'=>$z['Uid']))->find(); if( $fexist){ ?>
        <input class="content_btnl" type="button" value="已关注" onclick="#">
        <?php }else{ ?>
        <a href="<?php echo U('home/blogzj/absorb',array('id'=>$z['Uid']));?>"><input class="content_btnl" type="button" value="关注" onclick="#"></a><?php } ?>
        </div>
       </dd>
      </dl><?php endforeach; endif; ?>
      </section>
  </div>

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
</body>
</html>