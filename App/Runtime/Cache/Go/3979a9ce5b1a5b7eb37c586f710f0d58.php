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
	
	<div class="cj-div-2" style="width:900px;">在线商品：</div>
	<div class="cj-div-1" style="width:900px;">
		<table class="cj-table">
			<tr>
				<th>id</th>
				<th>商品名</th>
				<th>商品描述</th>
				<th>价格</th>
				<th>编号</th>
				<th>图片</th>
				<th>操作</th>
			</tr>
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
				<th><?php echo ($vo["id"]); ?></th>
				<th><?php echo ($vo["foodname"]); ?></th>
				<th><?php echo ($vo["foodtext"]); ?></th>
				<th><?php echo ($vo["foodmoney"]); ?></th>
				<th><?php echo ($vo["foodno"]); ?></th>
				<th><img src="__ROOT__/Baby/foods/<?php echo ($vo["foodno"]); ?>.jpg" width="50px" height="57px"></th>
				<th>
				<a href="#cj-1">添加</a><br/>
				<a href="#cj-2">修改</a><br/>
				<a href="<?php echo U('Go/Foods/Deletefoods',array('id'=>$vo['id']));?>">删除</a><br/>
				</th>
			</tr><?php endforeach; endif; ?>
		</table>
	</div>

	<div class="cj-div-2" id="cj-1">添加面板：</div>
	<div class="cj-div-1">
		<div class="cj-div-0">
			<form action="<?php echo U('Go/Foods/Insertfoods');?>" method="post" enctype="multipart/form-data">
				<ul><i>*</i><span>商品id</span><input type="text" name="id" class="id" value="id"></ul>
				<ul><i>*</i><span>商品名</span><input type="text" name="foodname" class="foodname" value="foodname"></ul>
				<ul><i>*</i><span>商品描述</span><textarea rows="10" cols="30" name="foodtext" class="foodtext" value="foodtext"></textarea></ul>
				<ul><i>*</i><span>商品价钱</span><input type="text" name="foodmoney" class="foodmoney" value="foodmoney"></ul>
				<ul><i>*</i><span>商品编号</span><input type="text" name="foodno" class="foodno" value="foodno"></ul>
				<ul><i>*</i><span>添加图片</span><input type="file" name="file" id="file" /></ul>
				<ul><input type="submit" value="立即添加" align="center"></ul>
			</form>
		</div>
	</div>

	<div class="cj-div-2" id="cj-2">修改面板：</div>
	<div class="cj-div-1">
		<div class="cj-div-0">
			<form action="<?php echo U('Go/Foods/Updatefoods');?>" method="post">
				<ul><i>*</i><span>商品id</span><input type="text" name="id" class="id" value="id"></ul>
				<ul><i>*</i><span>商品名</span><input type="text" name="foodname" class="foodname" value="foodname"></ul>
				<ul><i>*</i><span>商品描述</span><textarea rows="10" cols="30" name="foodtext" class="foodtext" value="foodtext"></textarea></ul>
				<ul><i>*</i><span>商品价钱</span><input type="text" name="foodmoney" class="foodmoney" value="foodmoney"></ul>
				<ul><i>*</i><span>商品编号</span><input type="text" name="foodno" class="foodno" value="foodno"></ul>
				<ul><i>*</i><span>添加图片</span><input type="file" name="file" id="file" /></ul>
				<ul><input type="submit" value="立即修改" align="center"></ul>
			</form>
		</div>
	</div>

</body>
</html>