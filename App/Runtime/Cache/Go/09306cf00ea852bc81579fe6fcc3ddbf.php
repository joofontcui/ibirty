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
	
	<div class="cj-div-2" style="width:900px;">新闻列表：</div>
	<div class="cj-div-1" style="width:900px;">
		<table class="cj-table">
			<tr>
				<th>id</th>
				<th>新闻标题</th>
				<th>链接</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
				<th><?php echo ($vo["id"]); ?></th>
				<th><?php echo ($vo["newsname"]); ?></th>
				<th><a href="<?php echo ($vo["newsurl"]); ?>" target="_blank" ><?php echo ($vo["newsurl"]); ?></a></th>
				<th>
				<a href="#cj-1">添加</a><br/>
				<a href="#cj-2">修改</a><br/>
				<a href="<?php echo U('Go/News/DeleteNews',array('id'=>$vo['id']));?>">删除</a><br/>
				</th>
			</tr><?php endforeach; endif; ?>
		</table>
	</div>

	<div class="cj-div-2" id="cj-1">添加面板：</div>
	<div class="cj-div-1">
		<div class="cj-div-0">
			<form action="<?php echo U('Go/News/Insertnews');?>" method="post">
				<ul><i>*</i><span>id</span><input type="text" name="id" class="id" value="id"></ul>
				<ul><i>*</i><span>新闻标题</span><input type="text" name="newsname" class="newsname" value="newsname" style="width:400px;"></ul>
				<ul><i>*</i><span>链接</span><input type="text" name="newsurl" class="newsurl" value="newsurl" style="width:400px;"></ul>
				<ul><input type="submit" value="立即添加" align="center"></ul>
			</form>
		</div>
	</div>

	<div class="cj-div-2" id="cj-2">修改面板：</div>
	<div class="cj-div-1">
		<div class="cj-div-0">
			<form action="<?php echo U('Go/News/UpdateNews');?>" method="post">
				<ul><i>*</i><span>id</span><input type="text" name="id" class="id" value="id"></ul>
				<ul><i>*</i><span>新闻标题</span><input type="text" name="newsname" class="newsname" value="newsname" style="width:400px;"></ul>
				<ul><i>*</i><span>链接</span><input type="text" name="newsurl" class="newsurl" value="newsurl" style="width:400px;"></ul>
				<ul><input type="submit" value="立即修改" align="center"></ul>
			</form>
		</div>
	</div>

</body>
</html>