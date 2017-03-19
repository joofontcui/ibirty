<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="__GO__/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__GO__/js/index.js"></script>
<link rel="stylesheet" href="__GO__/css/public.css" />
<link rel="stylesheet" href="__GO__/css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="menu">
			<a href="<?php echo U('Go/System/Index');?>">系统面板</a>
			<a href="<?php echo U('Go/Admin/Index');?>">管理面板</a>
			<a href="<?php echo U('Go/Member/Index');?>">会员面板</a>
			<a href="<?php echo U('Go/Foods/Index');?>">商品面板</a>
			<a href="<?php echo U('Go/News/Index');?>">新闻面板</a>
		</div>
		<div class="exit">
			<a href="<?php echo U('Go/Index/Index');?>" target="_self">刷新</a>
			<a href="<?php echo U('Baby/Index/Index');?>" target="_blank">前台</a>
			<a href="<?php echo U('Go/Index/Adminquit');?>" target="_self">退出</a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>系统面板</dt>
			<dd><a href="<?php echo U('Go/System/Index');?>">系统参数</a></dd>
			<dd><a href="<?php echo U('Go/Admin/Index');?>">管理员系统</a></dd>
		</dl>
		<dl>
			<dt>会员管理面板</dt>
			<dd><a href="<?php echo U('Go/Member/Index');?>">会员系统</a></dd>
		</dl>
		<dl>
			<dt>商品管理面板</dt>
			<dd><a href="<?php echo U('Go/Foods/Index');?>">商品系统</a></dd>
		</dl>
		<dl>
			<dt>新闻管理面板</dt>
			<dd><a href="<?php echo U('Go/News/Index');?>">新闻系统</a></dd>
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="<?php echo U('Go/System/Index');?>"></iframe>
	</div>
</body>
</html>