<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funuy Day</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/index.min.css">
	<script src="__PUBLIC__/js/index.min.js"></script>

	<script type="text/javascript">
        window.onload = function() {
            var oTab = document.getElementById("tab-show");
            var aH3 = oTab.getElementsByTagName("h3");
            var aDiv = oTab.getElementsByTagName("div");
            for (var i = 0; i < aH3.length; i++) {
                aH3[i].index = i;
                aH3[i].onclick = function() {
                    for (var i = 0; i < aH3.length; i++) {
                        aH3[i].className = "";
                        aDiv[i].style.display = "none";
                        aDiv[this.index].className = "";
                        aDiv[this.index].className = "tab-content";
                    }
                    this.className = "active";
                    aDiv[this.index].style.display = "block";
                };
            }
        };
	</script>
</head>
<body>
	<!-- header -->
	<!-- nav -->
	<div class="nav-top">
		<!-- navigation -->
		<div class="navigation">
			<div class="nav-left">
				<span class="nav-left-one">ibirty</span>
				<span class="nav-left-two">走进立创</span>
				<span class="nav-left-two">公司新闻</span>
				<span class="nav-left-two">经典案例</span>
				<span class="nav-left-two">服务项目</span>
				<span class="nav-left-two">加入立创</span>
				<span class="nav-left-two">联系我们</span>
			</div>
			<div class="nav-right">
				<!--<input type="button" class="button" value="注册/登录"/>-->
				<input type="text" name="research" class="research" />
				<input type="submit" value="" class="submit" />

			</div>
		</div>
	</div>



	<!-- runImage -->
	<div class="runImage">
		<div id="banner_tabs" class="flexslider">
			<ul class="slides">
				<li>
					<a title="" target="_blank" href="#">
						<img width="1920" height="482" alt="" style="background: url('__PUBLIC__/images/banner1.jpg') no-repeat center;" src="__PUBLIC__/images/alpha.png">
					</a>
				</li>
				<li>
					<a title="" href="#">
						<img width="1920" height="482" alt="" style="background: url('__PUBLIC__/images/banner2.jpg') no-repeat center;" src="__PUBLIC__/images/alpha.png">
					</a>
				</li>
				<li>
					<a title="" href="#">
						<img width="1920" height="482" alt="" style="background: url('__PUBLIC__/images/banner3.jpg') no-repeat center;" src="__PUBLIC__/images/alpha.png">
					</a>
				</li>
			</ul>
			<ul class="flex-direction-nav">
				<li><a class="flex-prev" href="javascript:;">Previous</a></li>
				<li><a class="flex-next" href="javascript:;">Next</a></li>
			</ul>
			<ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
				<li><a>1</a></li>
				<li><a>2</a></li>
				<li><a>2</a></li>
			</ol>
		</div>
	</div>
	<script src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
	<script src="__PUBLIC__/js/slider.js"></script>
	<script type="text/javascript">
        $(function() {
            var bannerSlider = new Slider($('#banner_tabs'), {
                time: 5000,
                delay: 400,
                event: 'hover',
                auto: true,
                mode: 'fade',
                controller: $('#bannerCtrl'),
                activeControllerCls: 'active'
            });
            $('#banner_tabs .flex-prev').click(function() {
                bannerSlider.prev()
            });
            $('#banner_tabs .flex-next').click(function() {
                bannerSlider.next()
            });
        })
	</script>



	<!-- classifi -->
	<div class="classifi">
		<div class="classifi-in">
			<div class="classifi-circle">
				<span class="classcirOne cla-cir-img"></span>
				<span class="cla-cir-title">3D签到墙</span>
				<span class="cla-cir-cont">微信扫码签到，精致心形签到墙上墙</span>
			</div>
			<div class="classifi-circle circle-left">
				<span class="classcirTwo cla-cir-img"></span>
				<span class="cla-cir-title">3D签到墙</span>
				<span class="cla-cir-cont">微信扫码签到，精致心形签到墙上墙</span>
			</div>
			<div class="classifi-circle circle-left">
				<span class="classcirTre cla-cir-img"></span>
				<span class="cla-cir-title">3D签到墙</span>
				<span class="cla-cir-cont">微信扫码签到，精致心形签到墙上墙</span>
			</div>
			<div class="classifi-circle circle-left">
				<span class="classcirFou cla-cir-img"></span>
				<span class="cla-cir-title">3D签到墙</span>
				<span class="cla-cir-cont">微信扫码签到，精致心形签到墙上墙</span>
			</div>
			<div class="classifi-circle circle-left">
				<span class="classcirFiv cla-cir-img"></span>
				<span class="cla-cir-title">3D签到墙</span>
				<span class="cla-cir-cont">微信扫码签到，精致心形签到墙上墙</span>
			</div>
			<div class="classifi-circle circle-left">
				<span class="classcirSix cla-cir-img"></span>
				<span class="cla-cir-title">3D签到墙</span>
				<span class="cla-cir-cont">微信扫码签到，精致心形签到墙上墙</span>
			</div>
		</div>
	</div>


	<!--tab for show begin-->
	<div class="tab-show-top"><span>经典案例</span></div>
	<div id="tab-show">
		<h3 class="active">教育</h3>
		<h3>娱乐</h3>
		<h3>汽车</h3>

		<div class="tab-content">教育内容</div>
		<div>娱乐内容</div>
		<div>汽车内容</div>
	</div>

	<!--tab for show end-->




	<!-- footer -->
	<div class="footer">
		<div class="footer-up">
			<div class="footer-up-1">
				<img src="__PUBLIC__/images/header-logo.png">
			</div>
			<div class="footer-up-2">
				<span class="footer-up-title">关于立创</span>

				<span class="footer-up-con">&nbsp;</span>
				<span class="footer-up-con">关于我们</span>
				<span class="footer-up-con">加入我们</span>
				<span class="footer-up-con">联系我们</span>
				<span class="footer-up-con">立创条款</span>
			</div>
			<div class="footer-up-3">
				<span class="footer-up-title">立创文化</span>

				<span class="footer-up-con">&nbsp;</span>
				<span class="footer-up-con">立创博客</span>
				<span class="footer-up-con">精品推荐</span>
				<span class="footer-up-con">功能简介</span>
			</div>
			<div class="footer-up-4">
				<span class="footer-up-title">FAQ</span>

				<span class="footer-up-con">&nbsp;</span>
				<span class="footer-up-con">设计师流程</span>
				<span class="footer-up-con">客户流程</span>
				<span class="footer-up-con">常见问题</span>
				<span class="footer-up-con">以往案例</span>
			</div>
			<div class="footer-up-5">
				<span class="footer-up-title">关注我们</span>

				<span class="footer-up-con">&nbsp;</span>
				<span class="footer-up-con">QQ</span>
				<span class="footer-up-con">微信</span>
				<span class="footer-up-con">微博图标</span>
				<span class="footer-up-con">产品反馈:012345678</span>
				<span class="footer-up-con">商务合作:987654321</span>
			</div>
		</div>
	</div>
	<div class="footer-down"><span class="footer-down-title">@copy;湖南立创文化有限公司 湘ICP备16003776号</span></div>
</body>
</html>