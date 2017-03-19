<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="__GO__/css/cj.css">
</head>
<body>
<div class="cj-div-top">
欢迎您，管理员：<?php echo $_SESSION["rootname"];?><br/></div>

<div class="cj-div-2">当前系统：</div>
<div class="cj-div-1">
PHP版本：<?php echo ($data['data1']); ?><br/>
MySQL版本：<?php echo ($data['data2']); ?><br/>
Apache版本：<?php echo ($data['data3']); ?><br/></div>

<div class="cj-div-2">信息统计：</div>
<div class="cj-div-1">
会员人数：<?php echo ($data['data4']); ?><br/>
管理员人数：<?php echo ($data['data5']); ?><br/>
新闻数：<?php echo ($data['data6']); ?><br/>
商品数：<?php echo ($data['data7']); ?><br/></div>

<div class="cj-div-2">开发团队：Baby Team&nbsp;</div>
<div class="cj-div-1">
前端：崔俊、刘方方&nbsp;<br/>
后端：唐柳、韩丽、崔俊&nbsp;<br/><br/>

鸣谢：湖南科技大学逸夫楼&nbsp;<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;课程设计指导老师：王志喜&nbsp;</div>
</div>
</body>
</html>