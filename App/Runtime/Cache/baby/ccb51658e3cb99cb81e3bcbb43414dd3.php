<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>北鼻网 | 宠物家园欢迎你</title>

    <link rel="stylesheet" href="__BABY__/css/reset.css"/>
    <link rel="stylesheet" href="__BABY__/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="__BABY__/css/style.css"/>
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
                <a href="<?php echo U('Baby/Index/Index');?>">首页</a>
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
    <div class="content-top">
        <!--sidebar-->
        <div class="sidebar">
            <h3>商品服务分类</h3>
            <!--sidebar-info-->
            <div class="sidebar-info">
                <ul class="side-li">
                    <li class="s_1"><h3>狗狗猫咪<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_2"><h3>皇家狗粮<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_3"><h3>宠物衣装<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_4"><h3>皇家狗粮<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_5"><h3>宠物衣装<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_6"><h3>皇家狗粮<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_7"><h3>宠物衣装<span class="fa fa-angle-right fa-loc"></span></h3>v</li>
                    <li class="s_8"><h3>皇家狗粮<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_9"><h3>宠物衣装<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_10"><h3>狗狗猫咪<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_11"><h3>宠物衣装<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_12"><h3>狗狗猫咪<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_13"><h3>宠物衣装<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_14"><h3>狗狗猫咪<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_15"><h3>宠物衣装<span class="fa fa-angle-right fa-loc"></span></h3></li>
                    <li class="s_16"><h3>狗狗猫咪<span class="fa fa-angle-right fa-loc"></span></h3></li>
                </ul>
                <!--hidden-li-box-->
                <ul class="hiden-box">
                    <li data-hidden="li" id="hiden-1">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-2">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-3">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-4">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-5">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-6">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-7">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-8">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-9">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-10">
                       <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-11">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-12">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-13">
                       <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-14">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-15">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-hidden="li" id="hiden-16">
                        <div class="hidden-title">
                            <a href="<?php echo U('Baby/Commodity/index');?>">北鼻狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">最fan狗狗</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗搭配</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                            <a href="<?php echo U('Baby/Commodity/index');?>">狗狗中心</a><span class="right-box"><i class="fa fa-angle-right"></i></span>
                        </div>
                        <div class="sub-nav-right">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-nav-left">
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                            <div class="cell-box">
                                <h1>狗狗中心</h1>
                                <div class="a-box">
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗罐头</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">妙鲜包</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>" class="orange">零食</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">保健</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">沐浴露</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">日用品</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">美容</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">玩具衣服</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">狗窝</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">服务 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">洗护造型</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">寄养医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">摄影训练</a>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">论坛 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">百科 </a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">大全</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">饲养</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">医疗</a><span>|</span>
                                    <a href="<?php echo U('Baby/Commodity/index');?>">问答专区</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--right-con-->
        <div class="right-con">
            <div class="nav">
                <a href="<?php echo U('Baby/Index/Index');?>">首页</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">猫咪</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">小宠</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">水族</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">爬虫</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">猫粮</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">宠物玩具</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">宠物衣装</a>
               
            </div>
            <!--show-box-->
            <div class="show-box">
                <!--content-->
                <div class="content">
                    <ul class="imgBox">
                        <li><a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/1.jpg"></a></li>
                        <li><a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/2.jpg"></a></li>
                        <li><a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/3.jpg"></a></li>
                        <li><a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/4.jpg"></a></li>
                        <li><a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/5.jpg"></a></li>
                    </ul>
                    <div class="currentNum">
                        <span class="imgNum mark-color"></span>
                        <span class="imgNum"></span>
                        <span class="imgNum"></span>
                        <span class="imgNum"></span>
                        <span class="imgNum"></span>
                    </div>
                    <div class="control to-left"><i class="fa fa-angle-left"></i></div>
                    <div class="control to-right"><i class="fa fa-angle-right"></i></div>
                </div>
               <a style="float: left" href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/6.6.jpg" /></a>
                <!--content-down-->
                <div class="content-down">
                    <ul class="imgBox1">
                        <li>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/01.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/02.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/03.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/04.jpg" /></a>
                        </li>
                        <li>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/01.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/02.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/03.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/04.jpg" /></a>
                        </li>
                        <li>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/01.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/02.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/03.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/04.jpg" /></a>
                        </li>
                        <li>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/01.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/02.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/03.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/04.jpg" /></a>
                        </li>
                        <li>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/01.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/02.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/03.jpg" /></a>
                            <a href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/04.jpg" /></a>
                        </li>
                    </ul>
                    <div class="currentNum-down">
                        <span class="imgNum1 mark-color"></span>
                        <span class="imgNum1"></span>
                        <span class="imgNum1"></span>
                        <span class="imgNum1"></span>
                        <span class="imgNum1"></span>
                    </div>
                    <div class="control1 to-left1"><i class="fa fa-angle-left"></i></div>
                    <div class="control1 to-right1"><i class="fa fa-angle-right"></i></div>
                </div>
                <a style="float: left" href="<?php echo U('Baby/Commodity/index');?>"><img src="__BABY__/img/15.jpg" /></a>
            </div>
            <!--right-sidbar-->
            <div class="right-sidebar">
                <div class="info-box">
                    <ul class="tab-nav">
                        <li id="li-1" class="li-nav li-nav-hover li-border">公告</li>
                        <li id="li-2" class="li-nav">规则</li>
                        <li id="li-3" class="li-nav">论坛</li>
                        <li id="li-4" class="li-nav">安全</li>
                        <li style="border-right: none" id="li-5" class="li-nav">公益</li>
                    </ul>
                    <div id="box-1" style="display: block" class="hiddenBox">

                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]美国DEXAS外出训练零食包紫色安全无毒</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]热卖!犬用消毒杀菌除臭剂 500ml</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]蓝血贵族 犬用富活化美毛片 165粒±5粒</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]一折起，Famipet 鸡腿漏食玩具</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[活动]派克瑞Petlot德系PT护理工具系列特小号</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]嘟贝贝 加厚羊羔绒水手服棉衣</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[满减]美国KONG 经典成犬红色耐咬葫芦玩具</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[重要]伙伴!Famipet 学霸鸭博士</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[活动]红脚丫red paw 骨纹发声球</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]ARK NATURALS 犬猫用美毛鱼油 237ml</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[重要]宝路 成犬 嫩滑鸡肉妙鲜包 100g*10</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]韩国BOTH 纯净羊奶 浓醇口感 宠物最爱</a><br/>

                    </div>
                    <div id="box-2" class="hiddenBox">

                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]美国DEXAS外出训练零食包紫色安全无毒</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]热卖!犬用消毒杀菌除臭剂 500ml</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]蓝血贵族 犬用富活化美毛片 165粒±5粒</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]一折起，Famipet 鸡腿漏食玩具</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[活动]派克瑞Petlot德系PT护理工具系列特小号</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]嘟贝贝 加厚羊羔绒水手服棉衣</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[满减]美国KONG 经典成犬红色耐咬葫芦玩具</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[重要]伙伴!Famipet 学霸鸭博士</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[活动]红脚丫red paw 骨纹发声球</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]ARK NATURALS 犬猫用美毛鱼油 237ml</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[重要]宝路 成犬 嫩滑鸡肉妙鲜包 100g*10</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]韩国BOTH 纯净羊奶 浓醇口感 宠物最爱</a><br/>
                    </div>
                    <div id="box-3" class="hiddenBox">
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]美国DEXAS外出训练零食包紫色安全无毒</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]热卖!犬用消毒杀菌除臭剂 500ml</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]蓝血贵族 犬用富活化美毛片 165粒±5粒</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]一折起，Famipet 鸡腿漏食玩具</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[活动]派克瑞Petlot德系PT护理工具系列特小号</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]嘟贝贝 加厚羊羔绒水手服棉衣</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[满减]美国KONG 经典成犬红色耐咬葫芦玩具</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[重要]伙伴!Famipet 学霸鸭博士</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[活动]红脚丫red paw 骨纹发声球</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]ARK NATURALS 犬猫用美毛鱼油 237ml</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[重要]宝路 成犬 嫩滑鸡肉妙鲜包 100g*10</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]韩国BOTH 纯净羊奶 浓醇口感 宠物最爱</a><br/>
                    </div>
                    <div id="box-4" class="hiddenBox">

                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]美国DEXAS外出训练零食包紫色安全无毒</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]热卖!犬用消毒杀菌除臭剂 500ml</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]蓝血贵族 犬用富活化美毛片 165粒±5粒</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]一折起，Famipet 鸡腿漏食玩具</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[活动]派克瑞Petlot德系PT护理工具系列特小号</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]嘟贝贝 加厚羊羔绒水手服棉衣</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[满减]美国KONG 经典成犬红色耐咬葫芦玩具</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[重要]伙伴!Famipet 学霸鸭博士</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[活动]红脚丫red paw 骨纹发声球</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]ARK NATURALS 犬猫用美毛鱼油 237ml</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[重要]宝路 成犬 嫩滑鸡肉妙鲜包 100g*10</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]韩国BOTH 纯净羊奶 浓醇口感 宠物最爱</a><br/>
                    </div>
                    <div id="box-5" class="hiddenBox">
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]美国DEXAS外出训练零食包紫色安全无毒</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]热卖!犬用消毒杀菌除臭剂 500ml</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]蓝血贵族 犬用富活化美毛片 165粒±5粒</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]一折起，Famipet 鸡腿漏食玩具</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[活动]派克瑞Petlot德系PT护理工具系列特小号</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]嘟贝贝 加厚羊羔绒水手服棉衣</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[满减]美国KONG 经典成犬红色耐咬葫芦玩具</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[重要]伙伴!Famipet 学霸鸭博士</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[活动]红脚丫red paw 骨纹发声球</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[热卖]ARK NATURALS 犬猫用美毛鱼油 237ml</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[重要]宝路 成犬 嫩滑鸡肉妙鲜包 100g*10</a><br/>
                        <a href="<?php echo U('Baby/Commodity/index');?>">[打折]韩国BOTH 纯净羊奶 浓醇口感 宠物最爱</a><br/>
                    </div>
                </div>
                <!--user-info-->
                <div class="user-info">
                    <div class="gold-top">
                        <img width="62px" height="62px" src="__BABY__/img/user-head.jpg" />
                        <div class="inner-user">
                            <h3>Hi <?php echo $_SESSION["username"];?></h3>
                            
                            <a class="vip-home" href="<?php echo U('Baby/Member/index');?>">会员俱乐部</a>
                        </div>
                    </div>
                    <!--login-->
                    <div class="login">
                        <a class="login-btn" href="<?php echo U('Baby/Login/index');?>"><i class="fa fa-user fa-user-loc"></i>登陆</a>
                        <a class="login-btn free" href="<?php echo U('Baby/Register/index');?>">免费注册</a>
                        <a class="login-btn free" href="<?php echo U('Baby/Index/Userquit');?>">安全退出</a>
                    </div>
                </div>
                <!--service-->
                                
                </div>
            </div>
        </div>
    </div>
    <!--main-->
    <div class="sub-nav">
        <input type="button" class="more-btn" value="更多"/>
        <!--sub-nav-cell-->
        <div class="sub-nav-cell">
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
        <div class="sub-nav-cell">
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
        <div class="sub-nav-cell">
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
    <!--main-->
    
    <!--main-bottom-->
    <div class="main-bottom">
        <div class="sub-bottom-nav">
            <h1>热卖单品</h1>
           <div class="sub-nav-info">
               <a href="<?php echo U('Baby/Index/Index');?>">首页</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">猫咪</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">小宠</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">水族</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">爬虫</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">猫粮</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">宠物玩具</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">宠物衣装</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">狗狗</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">猫咪</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">小宠</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">水族</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">爬虫</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">狗粮</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">猫粮</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">宠物玩具</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">宠物衣装</a>

           </div>
        </div>
        
        <div class="single-sale">
            <a href="<?php echo U('Baby/Commodity/index');?>">
                <img src="__BABY__/img/sing1.jpg" />
                <h3>皇家布偶猫</h3>
            </a>
            <p><span class="orange">￥&nbsp;</span><span class="orange">12900.00</span><span class="send-free">包邮</span></p>
            <p class="gary-text"><span>￥&nbsp;</span><span><del>39900.00</del></span>&nbsp;|&nbsp;<span>月消29</span></p>
        </div>
        <div class="single-sale">
            <a href="<?php echo U('Baby/Commodity/index');?>">
                <img src="__BABY__/img/sing1.jpg" />
                <h3>皇家布偶猫</h3>
            </a>
            <p><span class="orange">￥&nbsp;</span><span class="orange">12900.00</span><span class="send-free">包邮</span></p>
            <p class="gary-text"><span>￥&nbsp;</span><span><del>39900.00</del></span>&nbsp;|&nbsp;<span>月消29</span></p>
        </div>
        <div class="single-sale">
            <a href="<?php echo U('Baby/Commodity/index');?>">
                <img src="__BABY__/img/sing1.jpg" />
                <h3>皇家布偶猫</h3>
            </a>
            <p><span class="orange">￥&nbsp;</span><span class="orange">12900.00</span><span class="send-free">包邮</span></p>
            <p class="gary-text"><span>￥&nbsp;</span><span><del>39900.00</del></span>&nbsp;|&nbsp;<span>月消29</span></p>
        </div>
        <div class="single-sale">
            <a href="<?php echo U('Baby/Commodity/index');?>">
                <img src="__BABY__/img/sing1.jpg" />
                <h3>皇家布偶猫</h3>
            </a>
            <p><span class="orange">￥&nbsp;</span><span class="orange">12900.00</span><span class="send-free">包邮</span></p>
            <p class="gary-text"><span>￥&nbsp;</span><span><del>39900.00</del></span>&nbsp;|&nbsp;<span>月消29</span></p>
        </div>
        <div class="single-sale">
            <a href="<?php echo U('Baby/Commodity/index');?>">
                <img src="__BABY__/img/sing1.jpg" />
                <h3>皇家布偶猫</h3>
            </a>
            <p><span class="orange">￥&nbsp;</span><span class="orange">12900.00</span><span class="send-free">包邮</span></p>
            <p class="gary-text"><span>￥&nbsp;</span><span><del>39900.00</del></span>&nbsp;|&nbsp;<span>月消29</span></p>
        </div>
        <div class="single-sale">
            <a href="<?php echo U('Baby/Commodity/index');?>">
                <img src="__BABY__/img/sing1.jpg" />
                <h3>皇家布偶猫</h3>
            </a>
            <p><span class="orange">￥&nbsp;</span><span class="orange">12900.00</span><span class="send-free">包邮</span></p>
            <p class="gary-text"><span>￥&nbsp;</span><span><del>39900.00</del></span>&nbsp;|&nbsp;<span>月消29</span></p>
        </div>
        <div class="single-sale">
            <a href="<?php echo U('Baby/Commodity/index');?>">
                <img src="__BABY__/img/sing1.jpg" />
                <h3>皇家布偶猫</h3>
            </a>
            <p><span class="orange">￥&nbsp;</span><span class="orange">12900.00</span><span class="send-free">包邮</span></p>
            <p class="gary-text"><span>￥&nbsp;</span><span><del>39900.00</del></span>&nbsp;|&nbsp;<span>月消29</span></p>
        </div>
    </div>
    <!--ad-->
    <!--help-->
    <div class="help">
        <div class="help-info">
            <h1><img src="__BABY__/img/help4.png"><span class="help-text">消费者保障</span></h1>
            <a class="help-a" href="<?php echo U('Baby/Commodity/index');?>">保障范围</a>
            <a class="help-a" href="<?php echo U('Baby/Commodity/index');?>">退货退款流程</a>
            <a class="help-a" href="<?php echo U('Baby/Commodity/index');?>">服务中心</a>
            <a class="help-a" href="<?php echo U('Baby/Commodity/index');?>">更多特色服务</a>
        </div>
        <div class="help-info">
            <h1><img src="__BABY__/img/help1.png"><span class="help-text">新手上路</span></h1>
            <a class="help-a" href="<?php echo U('Baby/Commodity/index');?>">新手专区</a>
            <a class="help-a"v href="<?php echo U('Baby/Commodity/index');?>">消费警示</a>
            <a class="help-a" href="<?php echo U('Baby/Commodity/index');?>">交易安全</a>
            <a class="help-a margin-r" href="<?php echo U('Baby/Commodity/index');?>">24小时在线帮助</a>
        </div>
        <div class="help-info">
            <h1><img src="__BABY__/img/help2.png"><span class="help-text">付款方式</span></h1>
            <a class="help-a-litter" href="<?php echo U('Baby/Commodity/index');?>">支付宝快捷支付</a>
            <a class="help-a-litter" href="<?php echo U('Baby/Commodity/index');?>">支付宝卡（现金）付款</a>
            <a class="help-a-litter" href="<?php echo U('Baby/Commodity/index');?>">支付宝余额付款</a>
            <a class="help-a" href="<?php echo U('Baby/Commodity/index');?>">货到付款</a>
        </div>
        <div class="help-info">
            <h1><img src="__BABY__/img/help3.png"><span class="help-text">北鼻特色</span></h1>
            <a class="help-a" href="<?php echo U('Baby/Commodity/index');?>">北鼻指数</a>
            <a class="help-a" href="<?php echo U('Baby/Commodity/index');?>">淘公仔</a>
            <a class="help-a" href="<?php echo U('Baby/Commodity/index');?>">手机北鼻</a>
            <a class="help-a" href="<?php echo U('Baby/Commodity/index');?>">旺信</a>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <div class="footer-right">
            
            <div class="about-tao">
                <a href="<?php echo U('Go/Login/Index');?>">网站管理</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">关于北鼻</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">合作伙伴</a>
                <a href="<?php echo U('Baby/Commodity/index');?>">营销中心</a>
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