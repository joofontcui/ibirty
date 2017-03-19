<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>北鼻网 | 宠物家园欢迎你</title>
    <link rel="stylesheet" href="__BABY__/css/reset.css"/>
    <link rel="stylesheet" href="__BABY__/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="__BABY__/css/style.css"/>
    <style type="text/css">
    .td{
        margin:20px;
    }

    .font_bk{
        border:1px solid #ccc;
        margin:20px;
    }

    </style>
    <style type="text/css">
table.gridtable {
    font-family: verdana,arial,sans-serif;
    font-size:11px;
    color:#333333;
    border-width: 1px;
    border-color: #666666;
    border-collapse: collapse;
}
table.gridtable th {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #666666;
    background-color: #dedede;
}
table.gridtable td {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #666666;
    background-color: #ffffff;
}
</style>

<!-- Table goes in the document BODY -->


</head>
<body>
    <!--scroll-head-->
    <div class="scroll-head"></div>
    <!--top-->
    <div class="top-wrapper">
        <div class="top-info">
            <div class="top-left">
                <div data-toggle="arrowdown" id="arrow1" class="user-name">
                    <a href="<?php echo U('Baby/Commodity/index');?>">管理员</a>
                    <span class="down-icon"></span>
                </div>
                <div data-toggle="arrowdown" id="arrow2" class="msg-info">
                    <i class="fa fa-envelope fa-gray"></i>
                    <a href="<?php echo U('Baby/Commodity/index');?>">消息</a>
                    <span class="down-icon"></span>
                </div>
                <!--hidden-box-->
                <div data-toggle="hidden-box" id="nav-box1" class="user-box">
                    <img class="my-head" src="__BABY__/img/user-head.jpg" />
                    <div class="my-grow">
                        <h1><a href="<?php echo U('Baby/Commodity/index');?>">账号管理</a>&nbsp;|&nbsp;<a href="<?php echo U('Baby/Commodity/index');?>">退出</a></h1>
                        <p>
                            <h2><a href="<?php echo U('Baby/Commodity/index');?>">查看我会员特权</a></h2>
                            <a href="<?php echo U('Baby/Commodity/index');?>">我的成长</a>
                        </p>
                    </div>
                    <p style="height: 10px; clear: both;">&nbsp;</p>
                    <div class="my-card">
                        <div class="cards-info">
                            <ul>
                                <li><img src="__BABY__/img/icon.png" /></li>
                                <li><img src="__BABY__/img/icon.png" /></li>
                            </ul>
                        </div>
                        <div class="toggle-box">
                            <div class="toggle">
                                 <i style="vertical-align: top" class="fa fa-angle-left arrow-left"></i>
                                 <i style="vertical-align: top" class="fa fa-angle-right arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-toggle="hidden-box" id="nav-box2" class="msg-box">
                    <h1>未读新消息<a href="<?php echo U('Baby/Commodity/index');?>" class="fa fa-pencil-square-o pencil"></a></h1>
                    <div class="read-info">
                        <h2><span class="orange">&nbsp;&nbsp;|</span>&nbsp;你的书架&nbsp;<span style="font-weight: lighter">收到了<span class="orange">1</span>本书</span><span class="fa fa-times close-msg"></span></h2>
                        <img src="__BABY__/img/book-1.png" />
                        <div style="float: right">
                            <p>
                                全中国最穷的小伙子发财日记<br/>
                                掏彩票公共账号
                            </p>
                            <h3><a href="<?php echo U('Baby/Commodity/index');?>">去看看</a></h3>
                        </div>
                    </div>
                    <div class="msg-setting">
                        <a href="<?php echo U('Baby/Commodity/index');?>" class="fa fa-cog"></a>
                        <a href="<?php echo U('Baby/Commodity/index');?>" class="fa fa-pencil-square-o"></a>
                        <a style="margin-left: 70px" href="<?php echo U('Baby/Commodity/index');?>">买家消息&nbsp;|&nbsp;</a>
                        <a href="<?php echo U('Baby/Commodity/index');?>">卖家消息</a>
                    </div>
                </div>
            </div>
            <!--top-right-->
            <div class="top-right">
                <div data-toggle="arrowdown" id="arrow3" class="user-name">
                    <a href="<?php echo U('Baby/Commodity/index');?>"><?php echo $_SESSION["username"];?></a>
                    <span class="down-icon"></span>
                </div>
                <div data-toggle="arrowdown" id="arrow4" class="user-name">
                    <i class="fa fa-shopping-cart fa-orange"></i>
                    <a href="<?php echo U('Baby/Commodity/index');?>">购物车</a>
                    <span class="down-icon"></span>
                </div>
                <div data-toggle="arrowdown" id="arrow5" class="user-name">
                    <i class="fa fa-star fa-gray"></i>
                    <a href="<?php echo U('Baby/Commodity/index');?>">收藏夹</a>
                    <span class="down-icon"></span>
                </div>
                <a class="a-float-left" href="<?php echo U('Baby/Commodity/index');?>">商品分类</a>
                <span class="vertical-line">|</span>
                <div data-toggle="arrowdown" id="arrow6" class="user-name">
                    <a href="<?php echo U('Baby/Commodity/index');?>">卖家中心</a>
                    <span class="down-icon"></span>
                </div>
                <a class="a-float-left" href="<?php echo U('Baby/Commodity/index');?>">联系客户</a>
                <div data-toggle="arrowdown" id="arrow7" class="user-name">
                    <i class="fa fa-list-ul fa-orange"></i>
                    <a href="<?php echo U('Baby/Commodity/index');?>">网站导航</a>
                    <span class="down-icon"></span>
                </div>
                <!--hidden-box-->
                <div data-toggle="hidden-box" id="nav-box3" class="my-taobao-box">
                    <ul>
                        <li>已买到的宝贝</li>
                        <li>新欢</li>
                        <li>我的足迹</li>
                        <li>我的上新</li>
                        <li>我的优惠</li>
                    </ul>
                </div>
                <div data-toggle="hidden-box" id="nav-box4" class="shopping-box">
                    <span>您购物车里还没有任何宝贝。</span><a class="check-shopp" href="<?php echo U('Baby/Commodity/index');?>">查看我的购物车</a>
                </div>
                <div data-toggle="hidden-box" id="nav-box5" class="get-box">
                    <ul>
                        <li>收藏的宝贝</li>
                        <li>收藏的店铺</li>
                    </ul>
                </div>
                <div data-toggle="hidden-box" id="nav-box6" class="center-box">
                    <ul>
                        <li>已卖出的宝贝</li>
                        <li>出售中的宝贝</li>
                        <li>卖家服务市场</li>
                        <li>卖家培训中心</li>
                    </ul>
                </div>
                <div data-toggle="hidden-box" id="nav-box7" class="nav-box">
                    <div class="sub-nav top-sub-nav">
                        <!--<input type="button" class="more-btn" value="更多"/>-->
                        <!--sub-nav-cell-->
                        <div class="sub-nav-cell right-shadow">
                            <h3 class="orange">主题市场</h3>
                            <ul class="sub-nav-box">
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物之家</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">猫咪乐园</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">小宠密码</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">水族箱</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">爬虫馆</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">猫粮</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物玩具</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物衣装</a></li>
                            </ul>
                        </div>
                        <div class="sub-nav-cell right-shadow">
                            <h3 class="green-sp">特色购物</h3>
                            <ul class="sub-nav-box sp">
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物之家</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">猫咪乐园</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">小宠密码</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">水族箱</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">爬虫馆</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">猫粮</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物玩具</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物衣装</a></li>

                            </ul>
                        </div>
                        <div class="sub-nav-cell right-shadow">
                            <h3 class="red-now">当前热点</h3>
                            <ul class="sub-nav-box now">
                               <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物之家</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">猫咪乐园</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">小宠密码</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">水族箱</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">爬虫馆</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">猫粮</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物玩具</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物衣装</a></li>

                            </ul>
                        </div>
                        <div class="sub-nav-cell">
                            <h3 class="blue-more">更多精彩</h3>
                            <ul class="sub-nav-box more">
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物之家</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">猫咪乐园</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">小宠密码</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">水族箱</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">爬虫馆</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">猫粮</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物玩具</a></li>
                                <li><a href="<?php echo U('Baby/Commodity/index');?>">宠物衣装</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--scroll-top-->
        <div class="scroll-search">
            <div class="search-litter">
                <img class="scroll-logo" src="__BABY__/img/logo.png" />
                <!--scroll-search-->
                <div class="search-wrapper-scroll">
                    <div class="search-box-scroll">
                        <div data-toggle="arrowdown" id="arrow9" class="search-toggle-scroll">
                            宝贝<span class="down-icon"></span>
                        </div>
                        <input class="search-in-scroll" type="text" placeholder="    搜‘傻逼鸡’试试，单身好选择" />
                        <input type="button" class="search-but-scroll" value="搜索">
                        <div data-toggle="hidden-box" id="nav-box9" class="search-toggle-box-scroll">店铺</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--top-main-->

    <div class="top-main">
        <img src="__BABY__/img/logo.jpg" />
        <div class="search-wrapper">
            <div class="search-box">
                <div data-toggle="arrowdown" id="arrow8" class="search-toggle">
                    宝贝<span class="down-icon"></span>
                </div>
                <input class="search-in" type="text" placeholder="    搜‘傻逼鸡’试试，单身好选择">
                <input type="button" class="search-but" value="搜索">
                <div data-toggle="hidden-box" id="nav-box8" class="search-toggle-box">店铺</div>
            </div>
            <!--other-search-->
            <div class="other-search">
                <a href="<?php echo U('Baby/Commodity/index');?>">首页</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">猫咪</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">小宠</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">水族</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">爬虫</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">猫粮</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">宠物玩具</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">宠物衣装</a>
                <a href="<?php echo U('Baby/Commodity/index');?>" class="more-other">更多<i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!--two-code-->
        <div class="two-code">
            <h3>手机北鼻</h3>
            <img src="__BABY__/img/code.jpg" width="90px" height="90px" />
            <div class="close-code"><i class="fa fa-times"></i></div>
        </div>
    </div>
    <!--content-top-->



    <!--main-->
    <div class="cuijun"><hr/>
        <div class="cj-mid">
        <table class="gridtable" >
            <tr>
                <th>近三个月订单</th>
                <th>订单详情</th>
                <th>发货人</th>
                <th>收货人</th>
                <th>金额</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            <tr>
                <td>近三个月订单</td>
                <td>订单详情</td>
                <td>发货人</td>
                <td>收货人</td>
                <td>金额</td>
                <td>状态</td>
                <td>操作</td>
            </tr>
        </table>
        </div>
    </div>


    

    <!--help-->
 
    <!--footer-->
    <div class="footer">
        <div class="footer-right">
            <div class="cuijun"><hr/>
<!--                 <div class="cj-photo">
                    <img src="__BABY__/img/dog0101.jpg" ><br/>
                    <img src="__BABY__/img/dog0102.jpg" ><br/>
                    <img src="__BABY__/img/dog0103.jpg" ><br/>
                </div> -->
                <div class="cuijun">
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
            <p class="gary-text">© 2016 Baby Deign by Baby Team   <br/><br/>   湘ICP备16007150号  <br/><br/>  地址：湖南科技大学逸夫教学楼</p>
        </div>
        <div class="tao-man">
            <img src="__BABY__/img/baby.jpg" />
        </div>
    </div>

    <!--backtoTop1-->
    <!--兼容所有现代浏览器同时包括 ie6/7/8/9 （ie6会有一点点抖动）-->
    <div class="backtoTop" id="backToTop1">
        <div id="backToTop-up" class="up-back"><i class="fa fa-angle-up"></i></div>
        <div id="backToTop-down" class="down-back"><i class="fa fa-angle-down"></i></div>
    </div>


    <script src="__BABY__/js/jquery_1.9.js"></script>
    <script src="__BABY__/js/main.js"></script>
    <script src="__BABY__/js/img-show.js"></script>
</body>
</html>