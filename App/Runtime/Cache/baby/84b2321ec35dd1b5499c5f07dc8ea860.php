<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>北鼻网 | 宠物家园欢迎你</title>
<link type="text/css" rel="stylesheet" href="__BABY__/style/reset.css">
<link type="text/css" rel="stylesheet" href="__BABY__/style/main.css">
<style type="text/css">
<!--
.STYLE2 {
	font-size: 36px;
	color: #FFFFFF;
}
-->
</style>

    <script type="text/javascript" src="__BABY__/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript">
        function change_code(obj){
          var URL = "<?php echo U('Go/Register/Verify','','');?>";
          $("#code").attr("src",URL + "/" + Math.random());
          return false;
        }
    </script>
</head>

<body>
<div >
<div >
<div >
<div >
<a href="#"></a>
<table width="1407" border="0" align="center">
  <tr>
    <th width="1401" height="100" bgcolor="#C81623" scope="col"><span class="STYLE2"><a href="<?php echo U('Baby/Index/Index');?>"><img src="__BABY__/img/logo.jpg" width="250" height="100" /></a>欢迎您注册</s pan></th>
  </tr>
</table>
</div>
<h3 class="welcome_title">欢迎注册</h3>
</div>
</div>
</div>

<div class="regBox">
<div class="login_cont">
<ul class="login">
<form action="<?php echo U("Baby/Register/Form");?>" method="post">
<li><span class="reg_item"><i>*</i>用户名：</span>
  <div class="input_item"><input type="text" class="login_input user_icon"  name="username" id="txt1" /></div></li>
<li><span class="reg_item"><i>*</i>密码：</span><div class="input_item"><input type="password" class="login_input user_icon"  name="password" id="pwd1" /></div></li>
<li><span class="reg_item"><i>*</i>确认密码：</span><div class="input_item"><input type="password" class="login_input user_icon" id="pwd2" /></div></li>
<li><span class="reg_item"><i>*</i>性别：</span><div class="reg_item2">
<input type="radio" name="sex" value="1">男&nbsp;<input type="radio" name="sex" value="2">女
</div></li>
<li><span class="reg_item"><i></i>邮箱：</span><div class="input_item"><input type="text" class="login_input user_icon" name="email" id="email" /></div></li>

<li><div style="margin-left:110px;"><input type="code" class="login_input2 user_icon" name="code"/> <img src="<?php echo U('Baby/Register/Verify');?>" id="code"/> <a href="javascript:void(change_code(this));">看不清</a></div></li>

<li class="autoLogin"> <span class="reg_item">&nbsp;</span>
  <table width="308" height="27" border="0" align="left" >
    <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="" align="center" style="background:url(__BABY__/icon/key01.png) no-repeat; width:140px; height:50px;"/></td>
      </tr>
  </table>
  </li>
  </form>
</ul>
</div>
</div>

<div class="hr_25"></div>
<div class="footer">
<p><a href="#">购go简介</a><i>|</i><a href="#">购go公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-400-4000</p>
<p>Copyright &copy; 0001 - 9999 <a href="#">购go</a>版权所有&nbsp;&nbsp;&nbsp;京ICP备00000000号&nbsp;&nbsp;&nbsp;京ICP证0000000号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789</p>
</div>
</body>
</html>