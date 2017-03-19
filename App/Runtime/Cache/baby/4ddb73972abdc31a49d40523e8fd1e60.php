<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>登陆</title>
<link type="text/css" rel="stylesheet" href="__BABY__/style/reset.css">
<link type="text/css" rel="stylesheet" href="__BABY__/style/main.css">
<style type="text/css">
<!--
.STYLE1 {
	font-size: 36px;
	color: #FFFFFF;
}
-->
</style>
</head>

<body>
<table width="1398" height="100" border="0" align="center">
  <tr>
    <th width="1392" height="91" bgcolor="#C81623" scope="col"><a href="<?php echo U('Baby/Index/Index');?>"><img src="__BABY__/img/logo.jpg" width="250" height="100"></a> <span class="STYLE1">欢迎您登录</span></th>
  </tr>
</table>
<div class="loginBox">
	<div class="login_cont">
		<ul class="login">
		<form action="<?php echo U("Baby/Login/Login");?>" method="post">
			<li class="l_tit">邮箱/用户名/手机号</li>
			<li class="mb_10"><input type="text" class="login_input user_icon" name="username" id="txt1" /></li>
			<li class="l_tit">密码</li>
			<li class="mb_10"><input type="password" class="login_input user_icon" name="password" id="pwd1" /></li>
			<li class="autoLogin"><input type="checkbox" id="a1" class="checked"><label for="a1">自动登陆</label></li>
			<li>
			  <table width="400" border="0" align="center">
			    <tr>
			      <td width="270">
			        <input  type="submit" value=""  style="background:url(__BABY__/icon/key02.png) no-repeat; width:140px; height:50px;"/>&nbsp;&nbsp;<a href="<?php echo U('Baby/Register/Index');?>"><input type="button" value=""  style="background-image: url(__BABY__/icon/key01.png); width:140px;height:50px;"></input></a>
			      </td>
		        </tr>
		      </table>
			</li>
		</form>	
		</ul>
		<div class="login_partners">
			<p class="l_tit">使用合作方账号登陆网站</p>
			<ul class="login_list clearfix">
				<li><a href="#">QQ</a></li>
				<li><span>|</span></li>
				<li><a href="#">网易</a></li>
				<li><span>|</span></li>
				<li><a href="#">新浪微博</a></li>
				<li><span>|</span></li>
				<li><a href="#">腾讯微薄</a></li>
				<li><span>|</span></li>
				<li><a href="#">新浪微博</a></li>
				<li><span>|</span></li>
				<li><a href="#">腾讯微薄</a></li>
			</ul>
		</div>
	</div>
	<a class="reg_link" href="#"></a>
</div>

<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">购go简介</a><i>|</i><a href="#">购go公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-400-4000</p>
	<p>Copyright &copy; 0000 - 9999 购go版权所有&nbsp;&nbsp;&nbsp;京ICP备00000000号&nbsp;&nbsp;&nbsp;京ICP证00000000号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789</p>
</div>
</body>
</html>