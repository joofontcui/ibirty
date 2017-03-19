<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>北鼻网 | 宠物家园欢迎你</title>

<link rel="stylesheet" href="__BABY__/css/style3.css"/>
<link type="text/css" rel="stylesheet" href="__BABY__/style/reset.css">
<link type="text/css" rel="stylesheet" href="__BABY__/style/main.css">
<style type="text/css">
<!--
.STYLE1 {
	font-size: 36px;
	color: #FFFFFF;
}
-->
</style>

<script type="text/javascript" src="__BABY__/js/demo.js"></script>

</head>
<body>
<table width="1398" height="100" border="0" align="center">
  <tr>
    <th width="1392" height="91" bgcolor="#C81623" scope="col"><a href="<?php echo U('Baby/Index/Index');?>"><img src="__BABY__/img/logo.jpg" width="250" height="100"></a> <span class="STYLE1"></span></th>
  </tr>
</table>
<br/>
<div class="catbox">

	<table id="cartTable">
		<thead>
			<tr>
				<th><label><input class="check-all check" type="checkbox"/>&nbsp;全选</label></th>
				<th>商品</th>
				<th>单价</th>
				<th>数量</th>
				<th>小计</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
		<form action="<?php echo U('Baby/Contact/Index');?>" method="post">
			<tr>
				<td class="checkbox"><input class="check-one check" type="checkbox"/></td>
				<td class="goods"><img src="__BABY__/img/6.7.jpg" alt=""/><span>一只唐柳 / 单核250型号</span></td>
				<td class="price" >10￥</td>
				<td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1" name="price1"/><span class="add">+</span></td>
				<td class="subtotal">10￥</td>
				<td class="operation"><span class="delete">删除</span></td>
			</tr>
			<tr>
				<td class="checkbox"><input class="check-one check" type="checkbox"/></td>
				<td class="goods"><img src="__BABY__/img/youfei.jpg" alt=""/><span>邮费</span></td>
				<td class="price" >5￥</td>
				<td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1" name="price2"/><span class="add">+</span></td>
				<td class="subtotal">5￥</td>
				<td class="operation"><span class="delete">删除</span></td>
			</tr>
			<tr>
				<td class="checkbox"><input class="check-one check" type="checkbox"/></td>
				<td class="goods"><img src="__BABY__/img/baoxian.jpg" alt=""/><span>意外保险</span></td>
				<td class="price" >10￥</td>
				<td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1" name="price3"/><span class="add">+</span></td>
				<td class="subtotal">10￥</td>
				<td class="operation"><span class="delete">删除</span></td>
			</tr>
			<tr>
				<td class="checkbox"><input class="check-one check" type="checkbox"/></td>
				<td class="goods"><img src="__BABY__/img/baozhuang.jpg" alt=""/><span>托运包装</span></td>
				<td class="price" >11￥</td>
				<td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1" name="price4"/><span class="add">+</span></td>
				<td class="subtotal">11￥</td>
				<td class="operation"><span class="delete">删除</span></td>
			</tr>
			<tr> 
<!-- 			<input type="submit" name="submit" value="11"/> -->
			</tr>
			
		</tbody>
	</table>
	
	<div class="foot" id="foot">
		<label class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;全选</label>
		<a class="fl delete" id="deleteAll" href="javascript:;">删除</a>
		<div class="fr closing">
			<!-- <input type="button" onclick="cj()" value="22"> -->
			<a><input type="submit" name="submit" value="结算" style="margin-top:10px;"></a>
			<!-- {:U('Baby/Contact/Purchase -->
		</div>
		<div class="fr total">合计：￥<span id="priceTotal">0.00</span></div>
		<div class="fr selected" id="selected">已选商品<span id="selectedTotal">0</span>件<span class="arrow up">︽</span><span class="arrow down">︾</span></div>
		<div class="selected-view">
			<div id="selectedViewList" class="clearfix">
				<div><img src="__BABY__/images/1.jpg"><span>取消选择</span></div>
			</div>
			<span class="arrow">◆<span>◆</span></span>
		</div>
	</div>	
</form>
</div>
<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">购go简介</a><i>|</i><a href="#">购go公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-400-4000</p>
	<p>Copyright &copy; 0000 - 9999 购go版权所有&nbsp;&nbsp;&nbsp;京ICP备00000000号&nbsp;&nbsp;&nbsp;京ICP证00000000号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789</p>
</div>
</body>
</html>