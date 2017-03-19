<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>北鼻网 | 宠物家园欢迎你</title>

<!-- css -->
<link id="css" href="__BABY__/css/public.css" rel="stylesheet" type="text/css">

<!-- js -->
<script type="text/javascript" src="__BABY__/js/jquery.min.js"></script>
<script type="text/javascript" src="__BABY__/js/sl.js"></script>
<script type="text/javascript" src="__BABY__/js/set.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
	  	$.focus("#focus001");
		$.focus("#focus002");
	});

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
</script>

</head>
<body>

<!-- banner -->
<div class="cj-banner">
  <span><a href="<?php echo U('Baby/Index/Index');?>"><img src="__BABY__/img/logo.jpg" width="250" height="100"></a></span>
</div>

<!-- 已购买的商品-->
<div class="cj-foods">
  
</div>

<div class="t1"><br />
<iframe id="lastFrame" name="lastFrame" frameborder="0" style="display:none"></iframe>
<p style="float:left;"><img src="__BABY__/img/water.jpg" width="200px"></p>
<p style="float:left;font-size:40px;">&nbsp;&nbsp;<a href="<?php echo U('Baby/Index/Index');?>">恭喜，购买成功！点击继续购买</a></p>
        <p>&nbsp;</p><br/>
        <p style="float:left;font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;本次购买花销：<?php echo ($data); ?></p>
        <p style="float:left;font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp; 剩余金额：<?php echo ($over); ?></p>
</div>

<!-- 评论 -->
<div class="t1"><br />
<iframe id="lastFrame" name="lastFrame" frameborder="0" style="display:none"></iframe>
  <form id="postform" name="postform" method="post" action="runpost.php?act=write" onsubmit="return postChk(this)" target="lastFrame">

  <p>欢迎你一下评论，前人栽树，后人乘凉！</p>
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