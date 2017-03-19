<?php if (!defined('THINK_PATH')) exit();?><doctype html!>
<html>
	<head>
		<title>囧囧方| Welcome to our family</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />

		<!-- css -->
		<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css"/>

	</head>
	<body>
		<div class="header">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<div class="logo">
							<a class="navbar-brand" href="index.html">Joofont</a>
						</div>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav cl-effect-2">
						<li><a href="<?php echo U('Index/Index/index');?>"><span class="active" data-hover="Home">主页</span></a></li>
						<li><a href="<?php echo U('Index/About/index');?>"><span data-hover="AboutUs">我们 </span></a></li>
						<li><a href="<?php echo U('Index/Blog/index');?>"><span data-hover="Blog">博客</span></a></li>
						<li><a href="<?php echo U('Index/Discomplete/index');?>"><span data-hover="Opus">作品</span></a></li>
						<li><a href="<?php echo U('Index/Friend/index');?>"><span data-hover="Friends">亲友团</span></a></li>
						<li><a href="<?php echo U('Index/Contact/index');?>"><span data-hover="Contact">联系</span></a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
					<div class="clearfix"></div>
				</div><!-- /.container-fluid -->
			</nav>
		</div>
		<!--header-->
		<div class="contact_page">
			<h3>Contact</h3>
			<div class="container">
				<div class="col-md-6">
					<div class="contact_form">
							<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your text here...</textarea><br>
						<form>
							<input class="name" type="text" name="name" value="Your name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"><br>

							<input class="nuber" type="text" name="Phone number" value="Phone Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Number';}"><br>

							<input class="mail" type="text" name="email" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}"><br>

							<button type="clear" class="btn btn-info mrgn-can">Clear</button>
							<button type="submit" class="btn btn-info mrgn-can">Submit</button>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="map">
						<iframe  class="embed-responsive-item" src="__PUBLIC__/images/contact_1.jpg"frameborder="0" style="border:0" allowfullscreen height="190px"></iframe>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		<div class="container">
			<div class="div1">
				<div class="col-md-2 head">
					<h3>前端神器</h3>
					<ul class="inspired">
						<li><a href="https://pixabay.com/">高清图片：pixabay.com</a></li>
						<li><a href="http://hao.uisdc.com/">UI资源：hao.uisdc.com</a></li>
						<li><a href="http://baike.baidu.com/view/10701920.htm">IDE：Sublime Test3</a></li>
						<li><a href="http://baike.baidu.com/link?url=pIc7iSbSccjsfynYlpG_dH99UdP1IrFLXr-h4Y56P3DKPBBuUdY-tfDGkTudRPSJyJ75zVmFZXjvvQ80bFNRYq">辅助神器：<br/>faststone capture</a></li>
					</ul>
				</div>
				<div class="col-md-2 head">
					<h3>技术支持</h3>
					<ul class="customer">
						<li><a href="#">前端：刘方方</a></li>
						<li><a href="#">后端：崔俊</a></li>
					</ul>
				</div>
				<div class="col-md-2 head">
					<h3>内容主题</h3>
					<ul class="contents">
						<li><a href="#">相册照片</a></li>
						<li><a href="#">个人博客</a></li>
						<li><a href="#">简历</a></li>
						<li><a href="#">亲友团</a></li>
						<li><a href="#">作品集</a></li>
					</ul>
				</div>
				<div class="col-md-2 head">
					<h3>联系我们</h3>
					<ul class="sites">
						<li><a href="#">地址：湖南科技大学</a></li>
						<li><a href="#">邮编：411100</a></li>
						<li><a href="#">邮箱：000ahow@sina.com</a></li>
					</ul>
				</div>
				<div class="col-md-4 mail_soc">
					<div class="form_data">
						<form>
							<input class="mail2" type="text" name="email" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}">
							<input class="btn btn-default re_dsgn6" type="button" value="加入">
						</form>
						<p>收藏我们.</p>
					</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="div2">
							<p>&copy; 2016 <a>Joofont</a> Deign by <a>CuijunLiufangfang</a> &nbsp; &nbsp; 地址：<a>湖南科技大学逸夫教学楼</a></p>
							<p>湘ICP备16007150号</p>
						</div>
					</div>
				</div>
	</body>
</html>