<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>北鼻网 | 宠物家园欢迎你</title>

<!--js-->
<script src="__BABY__/js/jquery-1.8.2.min.js"></script>
<script src="__BABY__/js/common.js"></script>
<script src="__BABY__/js/ddsmoothmenu.js"></script>
<script src="__BABY__/js/html5.js"></script>
<script type="text/javascript">$(document).ready(function(){$(".inline").colorbox({inline:true, width:"50%"});});</script>
<!--end js-->

<!-- Mobile Specific Metas ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS ================================================== -->

<link rel="stylesheet" href="__BABY__/css/style2.css">
<link rel="stylesheet" href="__BABY__/css/orange.css">
<style type="text/css">
	.about-tao{
    width: 100%;
    height: 42px;
    line-height: 42px;
}
.gary-text{
    color: #9c9c9c;
}
.tao-man{
    float: right;
}
.footer{
    width: 1190px;
    height: 150px;
    margin: 0 auto 10px;
    text-align:center
}
.footer-right{
    float: left;
    width: 94%;
    height: 100%;
}
</style>


<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

</head>
<body>
<table width="1350" height="100" border="0" align="center">
  <tr>
    <th width="1392" height="91" bgcolor="#C81623" scope="col"><a href="<?php echo U('Baby/Index/Index');?>"><img src="__BABY__/img/city.jpg" width="1000px" height="100px"></a> <span class="STYLE1"></span></th>
  </tr>
</table>
<div class="mainContainer sixteen container">
<!--Header Block-->
<!--Content Block-->
<section class="content-wrapper">
	<div class="content-container container">
	  <div class="col-left">
			<div class="block man-block">
				<div class="block-title">狗狗</div>
				<ul>
					<li><a href="<?php echo U('Baby/Detail/Index');?>" title="SWEATERS">狗狗</a></li>
					<li><a href="<?php echo U('Baby/Detail/Index');?>" title="KNIT TOPS">比熊</a></li>
					<li><a href="<?php echo U('Baby/Detail/Index');?>" title="SHIRTS & BLOUSES">金毛</a></li>
					<li><a href="<?php echo U('Baby/Detail/Index');?>" title="TEE SHIRTS">拉布拉</a></li>
					<li><a href="<?php echo U('Baby/Detail/Index');?>" title="OUTERWEAR & JACKETS">萨摩耶</a></li>
				</ul>
			</div>
			<div class="block shop-by-block">
				<div class="block-title">分类</div>
				<ul>
					<li>按价格</li>
					<li><a href="<?php echo U('Baby/Detail/Index');?>" title="$300.00 - $399.99 (1)">￥300.00 -￥399.99 </a></li>
					<li><a href="<?php echo U('Baby/Detail/Index');?>" title="$300.00 - $399.99 (1)">￥300.00 - ￥399.99 </a></li>
					<li><a href="<?php echo U('Baby/Detail/Index');?>" title="$300.00 - $399.99 (1)">￥300.00 - ￥399.99 </a></li>
					<li><a href="<?php echo U('Baby/Detail/Index');?>" title="$300.00 - $399.99 (1)">￥300.00 -￥399.99 </a></li>
				</ul>
			</div>
			<div class="block compare-block">
				<div class="block-title">产品对比</div>
				<ul>
					<li>您没有可以进行比对的项目</li>
				</ul>
			</div>
			<div class="block community-block">
				<div class="block-title">产品调查</div>
				<ul>
				  你最喜欢的颜色是什么？
				  <li class="question-row"></li>
				  <li><input type="radio">
				    <a href="<?php echo U('Baby/Detail/Index');?>" title="Green">绿色</a></li>
					<li><input type="radio">
					  <a href="<?php echo U('Baby/Detail/Index');?>" title="Red">红色</a></li>
					<li><input type="radio">
					  <a href="<?php echo U('Baby/Detail/Index');?>" title="Black">黑色</a></li>
					<li><input type="radio">
					  <a href="<?php echo U('Baby/Detail/Index');?>" title="Magenta">品红</a></li>
					<li class="vote-row">
					  <button title="Vote">支付</button>
					</li>
				</ul>
			</div>
			<div class="paypal-block"></div>
		</div>
		<div class="col-main">
			<div class="category-banner"></div>
			<div class="pager-container">
				
				<div class="view-by-block">
					<ul class="view-by">
						<li>当前位置 -> 主页 -> 商品详情页</li>
						<li><a href="<?php echo U('Baby/Detail/Index');?>" title="Grid" class="grid">Grid</a></li>
						<li><a href="<?php echo U('Baby/Detail/Index');?>" title="List" class="list">List</a></li>
					</ul>
					<div class="short-by">
						<label>分类方式</label>
						<select><option>Position</option></select>
					</div>
				</div>
			</div>
			<div class="new-product-block">
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><!-- 	<?php echo ($key); ?> -->
			<!--<?php endforeach; endif; ?>
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?>-->
				<ul class="product-grid">
					<li>
						<div class=""><a href="<?php echo U('Baby/Detail/Index',array('id'=>$vo['id']));?>"><img title="<?php echo ($vo["foodname"]); ?>" alt="<?php echo ($vo["foodname"]); ?>" src="__BABY__/foods/<?php echo ($vo["foodno"]); ?>.jpg" width="430px"/></a></div>
						<div class="pro-content">
						  <p><?php echo ($vo["foodname"]); ?></p>
						</div>
						<div class="pro-price"><?php echo ($vo["foodname"]); ?> : <?php echo ($vo["foodmoney"]); ?></div>
						<div class="pro-btn-block"><?php echo ($vo["foodtext"]); ?></div><hr/>
						<div class="pro-btn-block">
							<a class="add-cart left" href="<?php echo U('Baby/Detail/Index',array('id'=>$vo['id']));?>" title="加入购物车">加入购物车</a>
							<a class="add-cart right quickCart inline" href="<?php echo U('Baby/Detail/Index',array('id'=>$vo['id']));?>" title="快速浏览">快速浏览</a><br/></div>
						
					</li>
					<li>
						<div class=""><a href="<?php echo U('Baby/Detail/Index',array('id'=>$vo['id']));?>"><img title="<?php echo ($vo["foodname"]); ?>" alt="<?php echo ($vo["foodname"]); ?>" src="__BABY__/foods/<?php echo ($vo["foodno"]); ?>.jpg" width="430px"/></a></div>
						<div class="pro-content">
						  <p><?php echo ($vo["foodname"]); ?></p>
						</div>
						<div class="pro-price"><?php echo ($vo["foodname"]); ?> : <?php echo ($vo["foodmoney"]); ?></div>
						<div class="pro-btn-block"><?php echo ($vo["foodtext"]); ?></div><hr/>
						<div class="pro-btn-block">
							<a class="add-cart left" href="<?php echo U('Baby/Detail/Index',array('id'=>$vo['id']));?>" title="加入购物车">加入购物车</a>
							<a class="add-cart right quickCart inline" href="<?php echo U('Baby/Detail/Index',array('id'=>$vo['id']));?>" title="快速浏览">快速浏览</a><br/></div>
						
					</li>
<!-- 					{/if}
					{if $key % 3 == 0} -->
					<li>
						<div class=""><a href="<?php echo U('Baby/Detail/Index',array('id'=>$vo['id']));?>"><img title="<?php echo ($vo["foodname"]); ?>" alt="<?php echo ($vo["foodname"]); ?>" src="__BABY__/foods/<?php echo ($vo["foodno"]); ?>.jpg" width="430px"/></a></div>
						<div class="pro-content">
						  <p><?php echo ($vo["foodname"]); ?></p>
						</div>
						<div class="pro-price"><?php echo ($vo["foodname"]); ?> : <?php echo ($vo["foodmoney"]); ?></div>
						<div class="pro-btn-block"><?php echo ($vo["foodtext"]); ?></div><hr/>
						<div class="pro-btn-block">
							<a class="add-cart left" href="<?php echo U('Baby/Detail/Index',array('id'=>$vo['id']));?>" title="加入购物车">加入购物车</a>
							<a class="add-cart right quickCart inline" href="<?php echo U('Baby/Detail/Index',array('id'=>$vo['id']));?>" title="快速浏览">快速浏览</a><br/></div>
						
					</li>
<!-- 					{/if} -->
				</ul><?php endforeach; endif; ?>	
			</div>
			<div class="pager-container">
				
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="news-letter-container">
			    
	<div class="footer">
        <div class="footer-right">
            
            <div class="about-tao">
                <a href="<?php echo U('Baby/Commodity/index');?>">关于北鼻</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">合作伙伴</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">营销中心</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">廉正举报</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">联系客服</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">开放平台</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">诚征英才</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">联系我们</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">网站地图</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">法律声明</a>
            </div>
            <p class="gary-text">© 2016 Baby Deign by Baby Team   <br/>   湘ICP备16007150号  <br/> 地址：湖南科技大学逸夫教学楼</p>
        </div>
        <div class="tao-man">
            <img src="__BABY__/img/baby.jpg" />
        </div>
    </div>
		</div>	
	</div>
</section>
</div>
    <!--快速浏览 Block-->
<script type="text/javascript">
jQuery (function(){
	var tabContainers=jQuery('div.tabs > div');
	tabContainers.hide().filter(':first').show();
	jQuery('div.tabs ul.tabNavigation a').click(function(){
		tabContainers.hide();
		tabContainers.filter(this.hash).show();
		jQuery('div.tabs ul.tabNavigation a').removeClass('selected');
		jQuery(this).addClass('selected');
		return false;
		}).filter(':first').click();
	});
</script>


</body>
</html>