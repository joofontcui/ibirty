<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="" />

	<title>囧囧方| Welcome to our family</title>

	<!-- css -->
	<link href="__PUBLIC__/css/owl.carousel.css" rel="stylesheet">
	<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="__PUBLIC__/css/animate.css" rel="stylesheet" type="text/css" media="all"> 
	<link href="__PUBLIC__/css/swipebox.css" rel="stylesheet" > 
	
	<!-- 	
	<script type="text/javascript" src="__PUBLIC__/js/move-top.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/easing.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/wow.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/newindex.js"></script> 
    -->

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
					<ul class="nav navbar-nav cl-effect-2 active_hover">
						<li><a href="<?php echo U('Index/Index/index');?>"><span class="active" data-hover="Home">主页</span></a></li>
						<li><a href="<?php echo U('Index/About/index');?>"><span data-hover="AboutUs">我们</span></a></li>
						<li><a href="<?php echo U('Index/Blog/index');?>"><span data-hover="Blog">博客</span></a></li>
						<li><a href="#"><span data-hover="Opus">作品</span></a></li>
						<li><a href="<?php echo U('Index/Friend/index');?>"><span data-hover="Friends">亲友团</span></a></li>
						<li><a href="<?php echo U('Index/Contact/index');?>"><span data-hover="Contact">联系</span></a></li>
					</ul>
							<!-- <ul class="form_acess">
								<form class="re-disgn1">
								<input type="text" name="s" class="textbox" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
								<input type="submit" value="">
								</form>
							</ul> -->
						</div><!-- /.navbar-collapse -->
						<div class="clearfix"></div>
					</div><!-- /.container-fluid -->
				</nav>
				
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active  image-wid">
							<img src="__PUBLIC__/images/home_1.jpg" alt="..." />
							<div class="carousel-caption">
								<h3>Lorem Ipsum</h3>
								<p>Lorem Ipsum is simply dummy text of the typesetting industry</p>
								<button type="button" class="btn btn-info sld">Read more</button>
							</div>
						</div>
						<div class="item  image-wid">
							<img src="__PUBLIC__/images/home_2.jpg" alt="..." />
							<div class="carousel-caption">
								<h3>Lorem Ipsum</h3>
								<p>Lorem Ipsum is simply dummy text of the typesetting industry</p>
								<button type="button" class="btn btn-info sld">Read more</button>
							</div>
						</div>
						<div class="item  image-wid">
							<img src="__PUBLIC__/images/home_3.jpg" alt="..." />
							<div class="carousel-caption">
								<h3>Lorem Ipsum</h3>
								<p>Lorem Ipsum is simply dummy text of the typesetting industry</p>
								<button type="button" class="btn btn-info sld">Read more</button>
							</div>
						</div>
						<div class="item  image-wid">
							<img src="__PUBLIC__/images/home_4.jpg" alt="..." />
							<div class="carousel-caption">
								<h3>Lorem Ipsum</h3>
								<p>Lorem Ipsum is simply dummy text of the typesetting industry</p>
								<button type="button" class="btn btn-info sld">Read more</button>
							</div>
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>


			<div class="header-bottom-1">
				<div class="container">
					<div class="col-md-6 main_div">
						<div class="de-mar">
							<div class="col-md-2 icn_div">
								<span class="glyphicon glyphicon-sunglasses re_styl2-1" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 txt-div">
								<h4>Lorem Ipsum</h4>
								<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="de-mar">
							<div class="col-md-2 icn_div">
								<span class="glyphicon glyphicon-camera re_styl2-2" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 txt-div">
								<h4>Lorem Ipsum</h4>
								<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-6 main_div">
						<div class="de-mar">
							<div class="col-md-2 icn_div">
								<span class="glyphicon glyphicon-heart re_styl2-3" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 txt-div">
								<h4>Lorem Ipsum</h4>
								<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="de-mar">
							<div class="col-md-2 icn_div">
								<span class="glyphicon glyphicon-picture re_styl2-4" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 txt-div">
								<h4>Lorem Ipsum</h4>
								<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>


			<!--Blog-Starts-Here-->
			<div class="blog">
				<div class="container">
					<div class="blog-main">
						<div class="col-md-4 blog-left">
							<div class="blog-one wow bounceInLeft" data-wow-delay="0.4s">
								<img src="__PUBLIC__/images/blog-1.png" alt="" />
								<h3>RESUME</h3>
								<p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000</p>
							</div>
						</div>
						<div class="col-md-4 blog-left">
							<div class="blog-one wow bounce" data-wow-delay="0.1s">
								<img src="__PUBLIC__/images/blog-4.png" alt="" />
								<h3>BLOG</h3>
								<p>Random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 </p>
							</div>
						</div>
						<div class="col-md-4 blog-left active">
							<div class="blog-one wow bounceInRight" data-wow-delay="0.4s">
								<img src="__PUBLIC__/images/blog-3.png" alt="" />
								<h3>OTHERS</h3>
								<p>Lorem Ipsum is not simply random text. Latin literature from 45 BC, making it over 2000 years old</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--Blog-Ends-Here-->



			<div class="icons-grid">
				<div class="container">
					<div class="col-md-3 txt-grid">
						<span class="glyphicon glyphicon-shopping-cart re_styl3" aria-hidden="true"></span>
						<h4>Shop</h4>
					</div>
					<div class="col-md-3 txt-grid">
						<span class="glyphicon glyphicon-apple re_styl3" aria-hidden="true"></span>
						<h4>Joy</h4>
					</div>
					<div class="col-md-3 txt-grid">
						<span class="glyphicon glyphicon-eye-open re_styl3" aria-hidden="true"></span>
						<h4>Look Up</h4>
					</div>
					<div class="col-md-3 txt-grid">
						<span class="glyphicon glyphicon-bell re_styl3" aria-hidden="true"></span>
						<h4>Notify</h4>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</br>
	</br>

	<div class="header-bottom-2">
		<div class="container">
			<div class="col-md-6 main_div">
				<div class="de-mar">
					<div class="col-md-2 icn_div">
						<span class="glyphicon glyphicon-sunglasses re_styl2-1" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 txt-div">
						<h4>Lorem Ipsum</h4>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="de-mar">
					<div class="col-md-2 icn_div">
						<span class="glyphicon glyphicon-camera re_styl2-2" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 txt-div">
						<h4>Lorem Ipsum</h4>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-6 main_div">
				<div class="de-mar">
					<div class="col-md-2 icn_div">
						<span class="glyphicon glyphicon-heart re_styl2-3" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 txt-div">
						<h4>Lorem Ipsum</h4>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="de-mar">
					<div class="col-md-2 icn_div">
						<span class="glyphicon glyphicon-picture re_styl2-4" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 txt-div">
						<h4>Lorem Ipsum</h4>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>



	<div class="images_grid">
		<h3>our models</h3>
		<div class="container">
			<ul class="grid cs-style-2">
				<div class="col-md-4 pd">
					<li>
						<figure>
							<img src="__PUBLIC__/images/1f.jpg" alt="img02" />
							<figcaption>
								<h3>Music</h3>
								<span>Jacob Cummings</span>
								<a href="gallery.html">Take a look</a>
							</figcaption>
						</figure>
					</li>
				</div>
				<div class="col-md-4 pd">
					<li>
						<figure>
							<img src="__PUBLIC__/images/1g.jpg" alt="img02" />
							<figcaption>
								<h3>Music</h3>
								<span>Jacob Cummings</span>
								<a href="gallery.html">Take a look</a>
							</figcaption>
						</figure>
					</li>
				</div>
				<div class="col-md-4 pd">
					<li>
						<figure>
							<img src="__PUBLIC__/images/1h.jpg" alt="img02" />
							<figcaption>
								<h3>Music</h3>
								<span>Jacob Cummings</span>
								<a href="gallery.html">Take a look</a>
							</figcaption>
						</figure>
					</li>
				</div>
				<div class="col-md-4 pd">
					<li>
						<figure>
							<img src="__PUBLIC__/images/1i.jpg" alt="img02" />
							<figcaption>
								<h3>Music</h3>
								<span>Jacob Cummings</span>
								<a href="gallery.html">Take a look</a>
							</figcaption>
						</figure>
					</li>
				</div>
				<div class="col-md-4 pd">
					<li>
						<figure>
							<img src="__PUBLIC__/images/1j.jpg" alt="img02" />
							<figcaption>
								<h3>Music</h3>
								<span>Jacob Cummings</span>
								<a href="gallery.html">Take a look</a>
							</figcaption>
						</figure>
					</li>
				</div>
				<div class="col-md-4 pd">
					<li>
						<figure>
							<img src="__PUBLIC__/images/1e.jpg" alt="img02" />
							<figcaption>
								<h3>Music</h3>
								<span>Jacob Cummings</span>
								<a href="gallery.html">Take a look</a>
							</figcaption>
						</figure>
					</li>
				</div>
				<div class="clearfix"></div>
			</ul>
			<script src="__PUBLIC__/js/toucheffects.js"></script>
			<script src="__PUBLIC__/js/modernizr.custom.js"></script>
		</div>
	</div>




	<div class="logo_label">
		<div class="container">
			<div class="logo re_styl5">
				<a class="navbar-brand" href="#">Joofont</a>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="div1">
				<div class="col-md-2 head">
					<h3>get inspired</h3>
					<ul class="inspired">
						<li><a href="#">Head wear</a></li>
						<li><a href="#">mens</a></li>
						<li><a href="#">Unisex</a></li>
						<li><a href="#">Brand protection</a></li>
						<li><a href="#">investors</a></li>
					</ul>
				</div>
				<div class="col-md-2 head">
					<h3>support</h3>
					<ul class="customer">
						<li><a href="#">Terms and Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
				<div class="col-md-2 head">
					<h3>sites</h3>
					<ul class="sites">
						<li><a href="#">yyy.com</a></li>
						<li><a href="#">zzz.com</a></li>
						<li><a href="#">aaa.com</a></li>
					</ul>
				</div>
				<div class="col-md-2 head">
					<h3>contents</h3>
					<ul class="contents">
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="blog.html">Typo</a></li>
					</ul>
				</div>
				<div class="col-md-4 mail_soc">
					<div class="form_data">
						<form>
							<input class="mail2" type="text" name="email" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail';}">
							<input class="btn btn-default re_dsgn6" type="button" value="join">
						</form>
						<p>subscribe us.</p>
					</div>
								<!-- <div class="social">
									<ul>
										<li><a href="#" class="face"></a></li>
										<li><a href="#" class="twit"></a></li>
										<li><a href="#" class="gplus"></a></li>
										<li><a href="#" class="insta"></a></li>
									</ul>
								</div> -->
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="div2">
							<p>&copy; 2015 Hunk Deign by <a href="http://www.w3layouts.com" target="_blank">w3layouts</a></p>
						</div>
					</div>
				</div>
	<!-- js -->
	<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
	<script src="__PUBLIC__/js/bootstrap.min.js"></script>

</body>
</html>