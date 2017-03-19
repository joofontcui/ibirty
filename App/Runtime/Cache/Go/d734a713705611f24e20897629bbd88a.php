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

	<div class="cj-div-2">会员列表：</div>
	<div class="cj-div-1">
		<table class="cj-table">
			<tr>
				<th>用户名</th>
				<th>密码</th>
				<th>性别</th>
				<th>邮箱</th>
				<th>账户余额</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
				<th><?php echo ($vo["username"]); ?></th>
				<th><?php echo ($vo["password"]); ?></th>
				<th><?php echo ($vo["sex"]); ?></th>
				<th><?php echo ($vo["email"]); ?></th>
				<th><?php echo ($vo["face"]); ?></th>
				<th>
				<a href="#cj-1">添加</a><br/>
				<a href="#cj-2">修改</a><br/>
				<a href="<?php echo U('Go/Member/DeleteMember',array('username'=>$vo['username']));?>">删除</a><br/>
				</th>
			</tr><?php endforeach; endif; ?>
		</table>
	</div>

	<div class="cj-div-2" id="cj-1">添加面板：</div>
	<div class="cj-div-1">
		<div class="cj-div-0">
			<form action="<?php echo U('Go/Member/Insertmember');?>" method="post">
				<ul><i>*</i><span>用户名称</span><input type="text" name="username" class="username" value="username"></ul>
				<ul><i>*</i><span>密码</span><input type="password" name="password" class="password" value="password"></ul>
				<ul><i>*</i><span>性别</span>
					<select name="sex">
					<option value="1">男</option>
					<option value="2">女</option>
					</select>
				</ul>
				<ul><i>*</i><span>邮箱</span><input type="text" name="email" class="email" value="email"></ul>
				<ul><i>*</i><span>账户余额</span><input type="text" name="face" class="face" value="face"></ul>
				<ul><input type="submit" value="立即添加" align="center"></ul>
			</form>
		</div>
	</div>

	<div class="cj-div-2" id="cj-2">修改面板：</div>
	<div class="cj-div-1">
		<div class="cj-div-0">
			<form action="<?php echo U('Go/Member/Updatemember');?>" method="post">
				<ul><i>*</i><span>要修改的用户</span><input type="text" name="username" class="username" value="username"></ul>
				<ul><i>*</i><span>密码</span><input type="password" name="password" class="password" value="password"></ul>
				<ul><i>*</i><span>性别</span>
					<select name="sex">
					<option value="1">男</option>
					<option value="2">女</option>
					</select>
				</ul>
				<ul><i>*</i><span>邮箱</span><input type="text" name="email" class="email" value="email"></ul>
				<ul><i>*</i><span>账户余额</span><input type="text" name="face" class="face" value="face"></ul>
				<ul><input type="submit" value="立即修改" align="center"></ul>
			</form>
		</div>
	</div>

</body>
</html>