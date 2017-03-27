<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funuy Day</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/index.min.css">
	<script src="__PUBLIC__/js/index.min.js"></script>
</head>
<body>
	<!-- header -->
	<!-- nav -->
	<div class="nav">
		<!-- navigation -->
		<div class="navigation">
			<div class="nav-left">
				<span class="nav-left-one">ibirty</span>
				<span class="nav-left-two">微专业</span>
				<span class="nav-left-two">课程体系</span>
				<span class="nav-left-two">企业版</span>
				<span class="nav-left-two">下载App</span>
			</div>
			<div class="nav-right">
				<input type="button" class="button" value="注册/登录"/>
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
				<img src="">
			</div>
			<div class="classifi-circle circle-left">
				<img src="">
			</div>
			<div class="classifi-circle circle-left">
				<img src="">
			</div>
			<div class="classifi-circle circle-left">
				<img src="">
			</div>
			<div class="classifi-circle circle-left">
				<img src="">
			</div>
			<div class="classifi-circle circle-left">
				<img src="">
			</div>
		</div>
	</div>

	<!-- delivery 1st-->
	<div class="deOne">
		<div class="deOne-up">
			<span class="deOne-up-1">推荐</span>
			<span class="deOne-up-2">案例作品</span>
			<span class="deOne-up-3">查看更多</span>
		</div>
		<div class="deOne-in">
			<div class="deOne-1">
				<img src="__PUBLIC__/images/a.jpg">
				<span class="title-main">这里是很长的主标题这里是这里是很长的主标题这里是</span>
				<span class="title-tag">原创作品 - 插画 - 绘画习作</span>
				<span class="title-sub">这里是很短的富标题这里是很短...</span>
				<span class="title-time">发布时间：3月27日</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
			<div class="deOne-2">
				<img src="__PUBLIC__/images/b.jpg">
				<span class="title-main">这里是很长的主标题这里是...</span>
				<span class="title-tag">设计文章 - 原创 - 中/长篇漫画 </span>
				<span class="title-sub">这里是很短的富标题这里是很短...</span>
				<span class="title-time">发布时间：3月27日</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
			<div class="deOne-3">
				<img src="__PUBLIC__/images/c.jpg">
				<span class="title-main">这里是很长的主标题这里是...</span>
				<span class="title-tag">原创作品 - 插画 - 绘画习作</span>
				<span class="title-sub">这里是很短的富标题这里是很短...</span>
				<span class="title-time">发布时间：3月27日</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
			<div class="deOne-4">
				<img src="__PUBLIC__/images/d.jpg">
				<span class="title-main">这里是很长的主标题这里是...</span>
				<span class="title-tag">设计文章 - 原创 - 中/长篇漫画 </span>
				<span class="title-sub">这里是很短的富标题这里是很短...</span>
				<span class="title-time">发布时间：3月27日</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
		</div>
	</div>

	<!-- delivery 2ed-->
	<div class="deTwo">
		<div class="deOne-up">
			<span class="deOne-up-1">人气</span>
			<span class="deOne-up-2">案例作品</span>
			<span class="deOne-up-3">查看更多</span>
		</div>
		<div class="deOne-in">
			<div class="deOne-1">
				<img src="__PUBLIC__/images/a.jpg">
				<span class="title-main">这里是很长的主标题这里是这里是很长的主标题这里是</span>
				<span class="title-tag">原创作品 - 插画 - 绘画习作</span>
				<span class="title-sub">这里是很短的富标题这里是很短...</span>
				<span class="title-time">发布时间：3月27日</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
			<div class="deOne-2">
				<img src="__PUBLIC__/images/b.jpg">
				<span class="title-main">这里是很长的主标题这里是...</span>
				<span class="title-tag">设计文章 - 原创 - 中/长篇漫画 </span>
				<span class="title-sub">这里是很短的富标题这里是很短...</span>
				<span class="title-time">发布时间：3月27日</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
			<div class="deOne-3">
				<img src="__PUBLIC__/images/c.jpg">
				<span class="title-main">这里是很长的主标题这里是...</span>
				<span class="title-tag">原创作品 - 插画 - 绘画习作</span>
				<span class="title-sub">这里是很短的富标题这里是很短...</span>
				<span class="title-time">发布时间：3月27日</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
			<div class="deOne-4">
				<img src="__PUBLIC__/images/d.jpg">
				<span class="title-main">这里是很长的主标题这里是...</span>
				<span class="title-tag">设计文章 - 原创 - 中/长篇漫画 </span>
				<span class="title-sub">这里是很短的富标题这里是很短...</span>
				<span class="title-time">发布时间：3月27日</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
		</div>
	</div>

	<!-- delivery 3rd-->
	<div class="deTwo">
		<div class="deOne-up">
			<span class="deOne-up-1">精品</span>
			<span class="deOne-up-2">案例作品</span>
			<span class="deOne-up-3">查看更多</span>
		</div>
		<div class="deOne-in">
			<div class="deOne-1">
				<img src="__PUBLIC__/images/a.jpg">
				<span class="title-main">这里是很长的主标题这里是这里是很长的主标题这里是</span>
				<span class="title-tag">原创作品 - 插画 - 绘画习作</span>
				<span class="title-sub">这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述</span>
				<span class="title-time">发布时间：2017-03-27</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
			<div class="deOne-2">
				<img src="__PUBLIC__/images/b.jpg">
				<span class="title-main">这里是很长的主标题这里是这里是很长的主标题这里是</span>
				<span class="title-tag">设计文章 - 原创 - 中/长篇漫画 </span>
				<span class="title-sub">这这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述</span>
				<span class="title-time">发布时间：2017-03-27</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
			<div class="deOne-3">
				<img src="__PUBLIC__/images/c.jpg">
				<span class="title-main">这里是很长的主标题这里是这里是很长的主标题这里是</span>
				<span class="title-tag">原创作品 - 插画 - 绘画习作</span>
				<span class="title-sub">这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述</span>
				<span class="title-time">发布时间：2017-03-27</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
			<div class="deOne-4">
				<img src="__PUBLIC__/images/d.jpg">
				<span class="title-main">这里是很长的主标题这里是这里是很长的主标题这里是</span>
				<span class="title-tag">设计文章 - 原创 - 中/长篇漫画 </span>
				<span class="title-sub">这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述这里是很长的描述</span>
				<span class="title-time">发布时间：2017-03-27</span>
				<span class="title-popular">926人气 / 52评论 / 12收藏</span>
			</div>
		</div>
	</div>

	<!-- delivery 3rd-->
	<div class="deFour">
		<div class="deFour-in">
			<input type="button" value="查看更多" class="deFour-button">
		</div>
	</div>

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