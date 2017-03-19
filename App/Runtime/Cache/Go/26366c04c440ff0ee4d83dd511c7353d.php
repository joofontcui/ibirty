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
		<table class="cj-table">
			<tr>
				<th>&nbsp;id&nbsp;</th>
				<th>&nbsp;管理员&nbsp;</th>
				<th>&nbsp;密码&nbsp;</th>
				<th>&nbsp;电话&nbsp;</th>
				<th>&nbsp;邮箱&nbsp;</th>
				<th>&nbsp;权值&nbsp;</th>
				<th>&nbsp;操作&nbsp;</th>
			</tr>
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
				<th><?php echo ($vo["id"]); ?></th>
				<th><?php echo ($vo["rootname"]); ?></th>
				<th><?php echo ($vo["password"]); ?></th>
				<th><?php echo ($vo["phone"]); ?></th>
				<th><?php echo ($vo["email"]); ?></th>
				<th><?php echo ($vo["power"]); ?></th>
				<th>
				<a href="#cj-1">添加</a><br/>
				<a href="#cj-2">修改</a><br/>
				<a href="<?php echo U('Go/Admin/Deleteadmin',array('id'=>$vo['id']));?>">删除</a>
				</th>
			</tr><?php endforeach; endif; ?>
		</table>
	</div>

	<div class="cj-div-2" id="cj-1">添加面板：</div>
	<div class="cj-div-1">
		<div class="cj-div-0">
			<form action="<?php echo U('Go/Admin/Insertadmin');?>" method="post">
				<ul><i>*</i><span>管理员id</span><input type="text" name="id" class="id" value="id"></ul>
				<ul><i>*</i><span>管理员名称</span><input type="text" name="rootname" class="rootname" value="rootname"></ul>
				<ul><i>*</i><span>密码</span><input type="password" name="password" class="password" value="password"></ul>
				<ul><i>*</i><span>电话</span><input type="text" name="phone" class="phone" value="phone"></ul>
				<ul><i>*</i><span>邮箱</span><input type="text" name="email" class="email" value="email"></ul>
				<ul><i>*</i><span>权值</span>
					<select name="power">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					</select>
				</ul>
				<ul><input type="submit" value="立即添加" align="center"></ul>
			</form>
		</div>
	</div>

	<div class="cj-div-2" id="cj-2">修改面板：</div>
	<div class="cj-div-1">
		<div class="cj-div-0">
			<form action="<?php echo U('Go/Admin/Updateadmin');?>" method="post">
				<ul><i>*</i><span>要修改的管理员id</span><input type="text" name="id" class="id" value="id"></ul>
				<ul><i>*</i><span>管理员名称</span><input type="text" name="rootname" class="rootname" value="rootname"></ul>
				<ul><i>*</i><span>密码</span><input type="password" name="password" class="password" value="password"></ul>
				<ul><i>*</i><span>电话</span><input type="text" name="phone" class="phone" value="phone"></ul>
				<ul><i>*</i><span>邮箱</span><input type="text" name="email" class="email" value="email"></ul>
				<ul><i>*</i><span>权值</span>
					<select name="power">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					</select>
				</ul>
				<ul><input type="submit" value="立即修改" align="center"></ul>
			</form>
		</div>
	</div>

</body>
</html>