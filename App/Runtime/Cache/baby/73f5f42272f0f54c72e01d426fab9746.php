<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言帖吧 - 发表</title>
<link id="css" href="__BABY__/css/public.css" rel="stylesheet" type="text/css">
<meta name="keywords" content="jquery特效,JS代码,js特效代码大全,导航菜单代码,焦点幻灯片,企业网页设计欣赏" />
<meta name="description" content="懒人建站为您提供-基于jquery特效，jquery弹出层效果，js特效代码大全，JS广告代码，导航菜单代码，下拉菜单代码和jquery焦点图片代码。" />
<style type="text/css">
body {font-size:12px; color:#222; font-family:Verdana,Arial,Helvetica,sans-serif; background:#f0f0f0;}
ul,li {list-style:none; margin:0px; padding:0px;}
.lanrenzhijia{ width:950px; height:30px; line-height:0px; margin:0px auto;}
.lanrenzhijia li a{ color:#fff; text-decoration:none; display:block; float:left; height:30px; line-height:30px; padding:0px 15px; font-size:12px;background:#FF3300;}
.lanrenzhijia li a:hover{ background:#4b505a;}
.lanrenzhijia li{float:left;position:relative; height:30px; line-height:30px;}
.lanrenzhijia li .second{position:absolute;left:0;display:none;}
/* 仿QQ商城点击左右滚动jquery焦点图特效插件 */
.focus {width:530px; height:280px; overflow:hidden; position:relative;}
.focus ul {height:380px; position:absolute;}
.focus ul li {float:left; width:530px; height:280px; overflow:hidden; position:relative; background:#000;}
.focus ul li div {position:absolute; overflow:hidden;}
.focus .btnBg {position:absolute; width:500px; height:20px; left:0; bottom:0; background:#000; display:none;}
.focus .btn {position:absolute; width:600px; height:23px; padding:0px 10px 0px 10px; right:0; bottom:6px; text-align:right;}
.focus .btn span {display:inline-block; _display:inline; _zoom:1; width:25px; height:24px; line-height:24px; text-align:center; _font-size:0; margin-left:5px; cursor:pointer; background:#fff;}
.focus .btn span.on {background:#fff;}
.focus .preNext {width:45px; height:100px; position:absolute; top:90px; background:url(__BABY__/img/sprite.png) no-repeat 0 0; cursor:pointer;}
.focus .pre {left:0;}
.focus .next {right:0; background-position:right top;}
.STYLE27 {font-size: 18px; color: #FFFFFF; font-family: "新宋体"; }
</style>
<script type="text/javascript" src="__BABY__/js/jquery.min.js"></script>
<script type="text/javascript" src="__BABY__/js/sl.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  	$.focus("#focus001");
		$.focus("#focus002");
	});
</script>
<script language="javascript" src="__BABY__/js/set.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
<!--
window.onload=function(){
  var chk=window.location.href.replace(/^.*(\?|\#)post=(\d+).*$/i,'$2');
  var areaIs=document.getElementById('p'+chk+'');
  if(areaIs!=null) areaIs.checked='checked';
}

function postChk(theForm){
  var con=theForm.content.value.replace(/^\s+|\s+$/g,'');
  if(con==''){
    alert('留言内容不能为空白！');
	theForm.content.focus();
    return false;
  }
  if(finderr=con.match(/<a[^>]+href[^>]+>.*<\/a>/)){
    alert('留言本不支持此代码'+finderr+'！提交无用');
	theForm.content.focus();
    return false;
  }
  if(con.length > 400){
    alert('请缩短你的留言内容至400字符以下。现在为'+con.length+'字符，大约得减'+(con.length-400)+'字符');
	theForm.content.focus();
    return false;
  }
  return true;
}
-->
</script>

</head>

<body>

<table width="950" border="0" align="center">
  <tr>
    <th height="62" scope="col">
	<div class="lanrenzhijia">
  <li>
  <a href='http://www.baidu.com'>我的购go</a>
  <div class="second">
  <a href='http://www.baidu.com'>买到宝贝</a>
  <a href='http://www.baidu.com'>我的足迹</a>
  <a href='http://www.baidu.com'>爱逛街&nbsp;&nbsp;&nbsp;&nbsp;</a>
  <a href='http://www.baidu.com'>购go达人</a>  </div>
  </li>
  <li>
  <a href='http://www.baidu.com'>购物车</a>
  <div class="second">
  <a href='http://www.baidu.com'>1</a>
  <a href='http://www.baidu.com'>2</a>
  <a href='http://www.baidu.com'>3</a>
  <a href='http://www.baidu.com'>4</a>  </div>
  </li>
  <li>
  <a href='http://www.baidu.com'>收藏夹</a>
  <div class="second">
  <a href='http://www.baidu.com'>宝贝</a>
  <a href='http://www.baidu.com'>店铺</a>  </div>
  </li>
  <li>
  <a href='http://www.baidu.com'>联系客服</a>  </li>
  <li>
  <a href='http://www.baidu.com'>网站导航</a>  </li>
  <li><a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </a></li>
    <li>
  <a href='shop_register.html'>注册</a>  </li>
    <li>
  <a href='shop_login.html'>登录</a>  </li>
    </div>
	<script src="http://www.lanrenzhijia.com/ajax__BABY__/js/jquery.min.js"></script>
    <script>
$(function(){
	var lanrenzhijia = 0; // 默认值为0，二级菜单向下滑动显示；值为1，则二级菜单向上滑动显示
	if(lanrenzhijia ==0){
		$('.lanrenzhijia li').hover(function(){
			$('.second',this).css('top','30px').show();
		},function(){
			$('.second',this).hide();
		});
	}else if(lanrenzhijia ==1){
		$('.lanrenzhijia li').hover(function(){
			$('.second',this).css('bottom','30px').show();
		},function(){
			$('.second',this).hide();
		});
	}
});
    </script>	</th>
  </tr>
</table>
<table width="951" border="0" align="center">
  <tr>
    <th width="950" height="43" scope="col"><a href="http://www.sina.com"><img src="__BABY__/img/three_pig.png" width="943" height="90" /></a></th>
  </tr>
</table>
<table width="950" height="117" border="0" align="center">
  <tr>
    <th width="174" height="113" scope="col"><a href="shop_index.html"><img src="__BABY__/img/145705307292200 (2).png" width="250" height="100" /></a></th>
    <th width="648" scope="col"><table width="578" height="95" border="0">
      <tr>
        <th width="499" colspan="2" scope="col"><div align="left" class="STYLE2">  &nbsp;&nbsp;<a href="http://www.taobao.com">宝贝</a> | <a href="http://www.taobao.com">淘宝</a>| <a href="http://www.taobao.com">店铺</a> | </div></th>
      </tr>
      <tr>
			<td height="51" bgcolor="#FF3300"><form action="http://www.baidu.com" method=GET>
          <input name="a1" type="text" value="" size="70" style="width:470px; height:40px; vertical-align:middle; padding:0px; margin:0px; margin-top:12px;" />
        </form></td>
        <td bgcolor="#FF3300"><input name="搜索" type="image" src="__BABY__/images/Q_{639{WPMM5ZF5(KG6JZ8P.png" style="width: 70px; height: 40px; background:red; border:0; cursor:pointer; margin-top:0px;"/></td>
      </tr>
      <tr>
        <td colspan="2"> <span class="STYLE22">&nbsp;秋季打底衫 毛呢大衣 羽绒服 套装裙 秋款男外套 健身器材</span></td>
      </tr>
    </table></th>
    <th width="114" scope="col"><img src="__BABY__/img/2wm.png" width="97" height="111"></th>
  </tr>
</table>
<table width="975" height="647" border="0">
  <tr>
    <td width="601" height="2" bgcolor="#FF3300">&nbsp;</td>
  </tr>
  <tr>
    <td height="601"><img src="__BABY__/images/banji.jpg" width="968" height="599"  alt=""/></td>
  </tr>
  <tr>
    <td height="2" bgcolor="#FF3300">&nbsp;</td>
  </tr>
</table>


<div class="t1"><br />
<iframe id="lastFrame" name="lastFrame" frameborder="0" style="display:none"></iframe>
  <form id="postform" name="postform" method="post" action="runpost.php?act=write" onsubmit="return postChk(this)" target="lastFrame">

  <p>希望您留下观看意见，以便于我们与您进一步沟通。</p>
  <p>
    <label>
    <input type="radio" name="posttype" id="p1" value="1" checked="checked" />
    商品评价
    <input type="radio" name="posttype" id="p2" value="2" />挑错本站
    </label>
  </p>
  <p>
    <textarea name="content" rows="12" cols="92"></textarea>
  </p>
<p>
        请将您的描述分别控制在400字以内，更多内容请您分次提交。</p>
<table width="35%" border="0" cellspacing="0" cellpadding="0">
  <tr valign="top">
    <td width="60%">输入验证码：<input name="imcode" id="imcode" type="text" size="10" /></td>
    <td width="40%"><iframe src="__BABY__/js/imcode.html" id="imFrame" name="imFrame" frameborder="0" width="100" height="24" scrolling="No"></iframe></td>
  </tr>
</table>
<p>
          <input type="submit" value=" 提 交 " name="submit" />&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact_book.php" class="STYLE4">查看留言</a>      </p>
  </form>
        <p>&nbsp;</p>
</div>
<br />
</body>
</html>