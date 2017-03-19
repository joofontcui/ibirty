<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>囧囧方 | 404 error page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="__PUBLIC__/css/style_404.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<!-----start-wrap--------->
	<div class="wrap">
		<!-----start-content--------->
		<div class="content">
			<!-----start-logo--------->
			<div class="logo">
				<h1><a href="#"><img src="__PUBLIC__/images/discomplete_logo.png"/></a></h1>
				<span><img src="__PUBLIC__/images/discomplete_signal.png"/>Ni chou sha! Zhe ye wo hai mei zuo hao ne!</span>
			</div>
			<!-----end-logo--------->
			<!-----start-search-bar-section--------->
			<div class="buttom">
				<div class="seach_bar">
					<p>点击 <span><a href="<?php echo U('Index/Index/index');?>">home</a></span> 回到主页</p>
					<!-----start-sear-box--------->
					<div class="search_box">
					<form>
					   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
				    </form>
					 </div>
				</div>
			</div>
			<!-----end-sear-bar--------->
		</div>
		<!----copy-right-------------->
	<p class="copy_right">
	<!-- &#169; 2016 Template by<a href="<?php echo U('Index/Index/index');?>" target="_blank">&nbsp;CuijunLiufangfang</a>  -->
	&copy; 2016 <a>Joofont</a> Deign by <a>CuijunLiufangfang</a> &nbsp; &nbsp; 地址：<a>湖南科技大学逸夫教学楼</a><br/>
							<a>湘ICP备16007150号</a>
	</p>
	</div>
	
	<!---------end-wrap---------->
</body>
</html>