<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>囧囧方| Welcome to our family</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="__PUBLIC__/css/base.css" rel="stylesheet">
<link href="__PUBLIC__/css/index.css" rel="stylesheet">
<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css"/>

<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/sliders.js"></script>
<script src="__PUBLIC__/js/jquery-2.1.4.min.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<!-- 返回顶部调用 end-->
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
                <li><a href="<?php echo U('Index/Discomplete/index');?>"><span data-hover="Opus">作品</span></a></li>
                <li><a href="<?php echo U('Index/Friend/index');?>"><span data-hover="Friends">亲友团</span></a></li>
                <li><a href="<?php echo U('Index/Contact/index');?>"><span data-hover="Contact">联系</span></a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
            <div class="clearfix"></div>
          </div><!-- /.container-fluid -->
        </nav>
      </div>

<article>
  <div class="r_box f_r">
    <div class="banner">
      <div id="slide-holder">
        <div id="slide-runner"> <a href="#" target="_blank"><img id="slide-img-1" src="__PUBLIC__/images/blog/a1.jpg"  alt="" /></a> <a href="#" target="_blank"><img id="slide-img-2" src="__PUBLIC__/images/blog/a2.jpg" height="280px" width="670px" alt="" /></a> <a href="#" target="_blank"><img id="slide-img-3" src="__PUBLIC__/images/blog/a3.jpg" height="280px" width="670px" alt="" /></a> <a href="#" target="_blank"><img id="slide-img-4" src="__PUBLIC__/images/blog/a2.jpg" height="280px" width="670px" alt="" /></a>
          <div id="slide-controls">
            <p id="slide-client" class="text"><strong></strong><span></span></p>
            <p id="slide-desc" class="text"></p>
            <p id="slide-nav"></p>
          </div>
        </div>
      </div>
      <script>
	  if(!window.slider) {
		var slider={};
	}

	slider.data= [
    {
        "id":"slide-img-1", // 与slide-runner中的img标签id对应
        "client":"标题",
        "desc":"基于阿里云服务器ECS的建站过程" //这里修改描述
    },
    {
        "id":"slide-img-2",
        "client":"标题",
        "desc":"软件测试上机实验（一）"
    },
    {
        "id":"slide-img-3",
        "client":"标题",
        "desc":"PHP开发环境搭建"
    },
    {
        "id":"slide-img-4",
        "client":"标题",
        "desc":"软件测试上机实验（一）"
    } 
	];

	  </script> 
    </div>
    <!-- banner代码 结束 -->
    <div class="topnews">
      <h2><b>文章</b>推荐</h2>
      <div class="blogs">
        <figure><img src="__PUBLIC__/images/blog/01.jpg"></figure>
        <ul>
          <h3><a href="#">基于阿里云服务器ECS的建站过程</a></h3>
          <p>以前个人网站一直放在新浪SAE上的，5月1号放假闲来无聊，看了下阿里云，发现学生云服务器ECS9.87元/月，1G内存，1核cpu，15G流量，40G内存。感觉阿里云的的人都是在用心在做产品呀，暖暖的爱意，哈哈哈。建站过程：阿里云服务器ECS（1个月9.87元/12个月98.7元）+域名...</p>
          <p class="autor"><span class="lm f_l"><a href="/">web开发</a></span><span class="dtime f_l">2016-05-11</span><span class="viewnum f_r">浏览（<a href="/">4</a>）</span><span class="pingl f_r">评论（<a href="/">0</a>）</span></p>
        </ul>
      </div>
      <div class="blogs">
        <figure><img src="__PUBLIC__/images/blog/02.jpg"></figure>
        <ul>
          <h3><a href="#">软件测试上机实验（一）</a></h3>
          <p>软件测试上机实验（一） 注：部分参考资料来自上机指导书，侵删。 单元测试一般针对程序代码进行测试，这决定了其测试工具和特定的编程语言密切相关，所以单元测试工具基本是相对不同的编程语言而存在，多数集成开发环境（如Microsoft Visual Studio, Eclipse）会提供单元测试工具...</p>
          <p class="autor"><span class="lm f_l"><a href="/">软件测试</a></span><span class="dtime f_l">2016-05-11</span><span class="viewnum f_r">浏览（<a href="/">21</a>）</span><span class="pingl f_r">评论（<a href="/">0</a>）</span></p>
        </ul>
      </div>
      <div class="blogs">
        <figure><img src="__PUBLIC__/images/blog/03.jpg"></figure>
        <ul>
          <h3><a href="#">PHP开发环境搭建</a></h3>
          <p>曾经搭建过PHP环境，也用过php集成环境（XAMPP、wamp）。今天重新搭建的时候出现了很多问题，用搜索引擎查了很多搭建文章，浪费了很多不必要的时间。所以总结了一下，希望可以帮助遇到相同问题的同学。 环境： window7   ——   64位系统 apache ... </p>
          <p class="autor"><span class="lm f_l"><a href="/">环境配置</a></span><span class="dtime f_l">2016-04-03</span><span class="viewnum f_r">浏览（<a href="/">59</a>）</span><span class="pingl f_r">评论（<a href="/">0</a>）</span></p>
        </ul>
      </div>
       <div class="blogs">
        <figure><img src="__PUBLIC__/images/blog/01.jpg"></figure>
        <ul>
          <h3><a href="#">基于阿里云服务器ECS的建站过程</a></h3>
          <p>以前个人网站一直放在新浪SAE上的，5月1号放假闲来无聊，看了下阿里云，发现学生云服务器ECS9.87元/月，1G内存，1核cpu，15G流量，40G内存。感觉阿里云的的人都是在用心在做产品呀，暖暖的爱意，哈哈哈。建站过程：阿里云服务器ECS（1个月9.87元/12个月98.7元）+域名...</p>
          <p class="autor"><span class="lm f_l"><a href="/">web开发</a></span><span class="dtime f_l">2016-05-11</span><span class="viewnum f_r">浏览（<a href="/">4</a>）</span><span class="pingl f_r">评论（<a href="/">0</a>）</span></p>
        </ul>
      </div>
      <div class="blogs">
        <figure><img src="__PUBLIC__/images/blog/02.jpg"></figure>
        <ul>
          <h3><a href="#">软件测试上机实验（一）</a></h3>
          <p>软件测试上机实验（一） 注：部分参考资料来自上机指导书，侵删。 单元测试一般针对程序代码进行测试，这决定了其测试工具和特定的编程语言密切相关，所以单元测试工具基本是相对不同的编程语言而存在，多数集成开发环境（如Microsoft Visual Studio, Eclipse）会提供单元测试工具...</p>
          <p class="autor"><span class="lm f_l"><a href="/">软件测试</a></span><span class="dtime f_l">2016-05-11</span><span class="viewnum f_r">浏览（<a href="/">21</a>）</span><span class="pingl f_r">评论（<a href="/">0</a>）</span></p>
        </ul>
      </div>
      <div class="blogs">
        <figure><img src="__PUBLIC__/images/blog/03.jpg"></figure>
        <ul>
          <h3><a href="#">PHP开发环境搭建</a></h3>
          <p>曾经搭建过PHP环境，也用过php集成环境（XAMPP、wamp）。今天重新搭建的时候出现了很多问题，用搜索引擎查了很多搭建文章，浪费了很多不必要的时间。所以总结了一下，希望可以帮助遇到相同问题的同学。 环境： window7   ——   64位系统 apache ... </p>
          <p class="autor"><span class="lm f_l"><a href="/">环境配置</a></span><span class="dtime f_l">2016-04-03</span><span class="viewnum f_r">浏览（<a href="/">59</a>）</span><span class="pingl f_r">评论（<a href="/">0</a>）</span></p>
        </ul>
      </div>
      
    </div>
  </div>
  <div class="l_box f_l">
    <div class="tit01">
      <h3>关注我</h3>
      <div class="gzwm">
        <ul>
          <li><a class="xlwb" href="#" target="_blank"></a></li>
          <li><a class="txwb" href="#" target="_blank"></a></li>
          <li><a class="rss" href="#" target="_blank"></a></li>
          <li><a class="wx" href="#"></a></li>
        </ul>
        <ul><img src="__PUBLIC__/images/blog/07.jpg" width="300px" height="300px"></ul>
      </div>
    </div>
    <!--tit01 end-->
    <div class="moreSelect" id="lp_right_select"> 
      <script>
window.onload = function ()
{
/*	var oLi = document.getElementById("tab").getElementsByTagName("li");*/
	var oUl = document.getElementById("ms-main").getElementsByTagName("div");
	
	for(var i = 0; i < oLi.length; i++)
	{
		oLi[i].index = i;
		oLi[i].onmouseover = function ()
		{
			for(var n = 0; n < oLi.length; n++) oLi[n].className="";
			this.className = "cur";
			for(var n = 0; n < oUl.length; n++) oUl[n].style.display = "none";
			oUl[this.index].style.display = "block"
		}	
	}
}
</script>
      
      <!--ms-main end --> 
    </div>
    <!--切换卡 moreSelect end -->
    
    <div class="cloud">
      <h3>标签云</h3>
      <ul>
        <li><a href="/">个人博客</a></li>
        <li><a href="/">web开发</a></li>
        <li><a href="/">前端设计</a></li>
        <li><a href="/">Html</a></li>
        <li><a href="/">CSS3</a></li>
        <li><a href="/">Html5+css3</a></li>
        <li><a href="/">百度</a></li>
        <li><a href="/">Javasript</a></li>
        <li><a href="/">web开发</a></li>
        <li><a href="/">前端设计</a></li>
        <li><a href="/">Html</a></li>
        <li><a href="/">CSS3</a></li>
        <li><a href="/">Html5+css3</a></li>
        <li><a href="/">百度</a></li>
      </ul>
    </div>
    <div class="tuwen">
      <h3>图文推荐</h3>
      <ul>
        <li><a href="#"><img src="__PUBLIC__/images/blog/01.jpg"><b>基于阿里云服务器ECS的建站过程</b></a>
          <p><span class="tulanmu"><a href="/">web开发</a></span><span class="tutime">2016-05-11</span></p>
        </li>
        <li><a href="#"><img src="__PUBLIC__/images/blog/02.jpg"><b>软件测试上机实验（一）</b></a>
          <p><span class="tulanmu"><a href="/">软件测试</a></span><span class="tutime">2016-05-11</span></p>
        </li>
        <li><a href="#"><img src="__PUBLIC__/images/blog/03.jpg"><b>PHP开发环境搭建</b></a>
          <p><span class="tulanmu"><a href="/">环境配置</a></span><span class="tutime">2015-04-03</span></p>
        </li>
      </ul>
    </div>
    
  </div>
  <!--r_box end --> 
</article>



<footer>
<div class="footer">
    <div class="container">
      <div class="div1">
        <div class="col-md-2 head">
          <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;前端神器</h3>
          <ul class="inspired">
            <li><a href="https://pixabay.com/">高清图片：pixabay.com</a></li>
            <li><a href="http://hao.uisdc.com/">UI资源：hao.uisdc.com</a></li>
            <li><a href="http://baike.baidu.com/view/10701920.htm">IDE：Sublime Test3</a></li>
            <li><a href="http://baike.baidu.com/link?url=pIc7iSbSccjsfynYlpG_dH99UdP1IrFLXr-h4Y56P3DKPBBuUdY-tfDGkTudRPSJyJ75zVmFZXjvvQ80bFNRYq">辅助神器：<br/>faststone capture</a></li>
          </ul>
        </div>
        <div class="col-md-2 head">
          <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;技术支持</h3>
          <ul class="customer">
            <li><a href="#">前端：刘方方</a></li>
            <li><a href="#">后端：崔俊</a></li>
          </ul>
        </div>
        <div class="col-md-2 head">
          <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;内容主题</h3>
          <ul class="contents">
            <li><a href="#">相册照片</a></li>
            <li><a href="#">个人博客</a></li>
            <li><a href="#">简历</a></li>
            <li><a href="#">亲友团</a></li>
            <li><a href="#">作品集</a></li>
          </ul>
        </div>
        <div class="col-md-2 head">
          <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系我们</h3>
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
</footer>  
</body>
</html>