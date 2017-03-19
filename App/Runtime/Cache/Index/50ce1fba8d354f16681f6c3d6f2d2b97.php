<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>	
<head>
<title>云端车</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="__PUBLIC__/css/style_login.css" rel='stylesheet' type='text/css' />
<script src="__PUBLIC__/js/global.js"></script>
</head>
<body>
<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.login-form').fadeOut('slow', function(c){
	  		$('.login-form').remove();
		});
	});	  
});
</script>
 <!--SIGN UP-->
<h1 style="color:#fff;font-weight:bold;font-family:Microsoft YaHei;">智能停车场服务端系统</h1>
<div class="login-form">
	<div class="close"> </div>
		<div class="head-info">
			<label class="lbl-1"> </label>
			<label class="lbl-2"> </label>
			<label class="lbl-3"> </label>
		</div>
			<div class="clear"> </div>
	<div class="avtar">
		<img src="__PUBLIC__/images/avtar.png" />
	</div>
			<form>
					<input type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
						<div class="key">
					<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						</div>
			</form>
	<div class="signin">
		<a href="<?php echo U('Index/Home/index');?>"><input type="submit" value="Login" ></a>
	</div>
</div>


</body>
</html>