<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>云端车</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style9_1.css">
    <script src="__PUBLIC__/js/global.js"></script>
</head>
<body>
    <!-- header -->
    <header>
        <div class="mid">
            <img src="__PUBLIC__/images/header-logo.jpg" >
            <span class="title">“云端车”智能停车场服务端</span>
            <span class="login">欢迎你，管理员(Admin)</span>
        </div>
    </header>
    <!-- aside -->
    <aside>
        <div class="aside-mid">
            <div class="left-one">
                <div class="circle-div1"><div class="circle"></div></div>
                <div class="circle-div2"><span>云端车</span></div>
            </div>
            <div class="left-two">
                <div class="left-two-one span-grey">
                    <span>110</span>
                    <span>留言</span> 
                </div>
                <div class="left-two-two span-grey"><span>|</span></div>
                <div class="left-two-three span-grey">
                    <span>70338</span>
                    <span>用户</span> 
                </div>
            </div>
            <div class="left-three left-div-global">
                <span>个人报表</span>
                <!-- <span>文件一</span>
                <span>文件二
                    <ul>
                        <li>文档1</li>
                        <li>文档2</li>
                    </ul>
                </span>
                <span>文件三</span> -->
            </div>
            <div class="left-four left-div-global"><span>停车标识</span></div>
            <div class="left-five left-div-global"><span>停车场车位</span></div>
            <div class="left-six left-div-global"><span>停车信息</span></div>
            <div class="left-seven left-div-global"><span>停车用料</span></div>
            <div class="left-eight left-div-global"><span>操作记录</span></div>
        </div>
    </aside>
    <!-- content -->
    <div class="content">
        <!-- 网站时间 -->
        <div class="content-header">
            <script>
                window.onload=function(){
                //定时器每秒调用一次fnDate()
                setInterval(function(){
                fnDate();
                },1000);
                }
                //js 获取当前时间
                function fnDate(){
                var oDiv=document.getElementById("div1");
                var date=new Date();
                var year=date.getFullYear();//当前年份
                var month=date.getMonth();//当前月份
                var data=date.getDate();//天
                var hours=date.getHours();//小时
                var minute=date.getMinutes();//分
                var second=date.getSeconds();//秒
                var time="当前系统时间：" + year+"-"+fnW((month+1))+"-"+fnW(data)+" "+fnW(hours)+":"+fnW(minute)+":"+fnW(second);
                oDiv.innerHTML=time;
                }
                //补位 当某个字段不是两位数时补0
                function fnW(str){
                var num;
                str>10?num=str:num="0"+str;
                return num;
                } 
            </script>
            <div id="div1"> </div>
        </div> 
        <!-- 停车标识 -->
        <div class="content-three content-mid">
            <div class="content-three-span">
                <span>停车场停车标识</span>
            </div>
            <div class="content-three-all">
                <div class="content-three-one content-three-global">
                    <div class="content-three-left">
                        <span>停车位可用...</span>
                        <span class="content-three-left-bottom">标识符</span>
                    </div>
                    <div class="content-three-right-one"></div>
                </div>
                <div class="content-three-two content-three-global">
                    <div class="content-three-left">
                        <span>车位使用中...</span>
                        <span class="content-three-left-bottom">标识符</span>
                    </div>
                    <div class="content-three-right-two"></div>
                </div>
                <div class="content-three-three content-three-global">
                    <div class="content-three-left">
                        <span>非法占用车位...</span>
                        <span class="content-three-left-bottom">标识符</span>
                    </div>
                    <div class="content-three-right-three"></div>
                </div>
                <div class="content-three-four content-three-global">
                    <div class="content-three-left">
                        <span>停车位整修...</span>
                        <span class="content-three-left-bottom">标识符</span>
                    </div>
                    <div class="content-three-right-four"></div>
                </div>          
            </div>
        </div>  
        <!-- 停车标价 -->
        <div class="content-two content-mid">
            <div class="content-two-one">
                <span><</span>
            </div>
            <div class="content-two-two content-two-global">
                <span class="content-two-top">10:00 am</span>
                <span class="content-two-bottom">
                    <span class="content-two-bottom-one">￥</span>
                    <span class="content-two-bottom-two">12/hour</span>
                </span>
            </div>
            <div class="content-two-three content-two-global">
                <span class="content-two-top">11:00 am</span>
                <span class="content-two-bottom">
                    <span class="content-two-bottom-one">￥</span>
                    <span class="content-two-bottom-two">13/hour</span>
                </span>
            </div>
            <div class="content-two-four content-two-global">
                <span class="content-two-top">12:00 am</span>
                <span class="content-two-bottom">
                    <span class="content-two-bottom-one">￥</span>
                    <span class="content-two-bottom-two">12/hour</span>
                </span>
            </div>
            <div class="content-two-five content-two-global">
                <span class="content-two-top">01:00 pm</span>
                <span class="content-two-bottom">
                    <span class="content-two-bottom-one">￥</span>
                    <span class="content-two-bottom-two">14/hour</span>
                </span>
            </div>
            <div class="content-two-six content-two-global">
                <span class="content-two-top">02:00 pm</span>
                <span class="content-two-bottom">
                    <span class="content-two-bottom-one">￥</span>
                    <span class="content-two-bottom-two">15/hour</span>
                </span>
            </div>
            <div class="content-two-seven content-two-global">
                <span class="content-two-top">03:00 pm</span>
                <span class="content-two-bottom">
                    <span class="content-two-bottom-one">￥</span>
                    <span class="content-two-bottom-two">18/hour</span>
                </span>
            </div>
            <div class="content-two-eight">
                <span>></span>
            </div><div class="content-two-nine content-two-global">
                <span><img src=""></span>
                <span>停车费用标准</span>
            </div>
        </div> 
        <!-- 停车日历+地图 -->
        <div class="content-five content-mid">
            <div class="content-five-left">
                <div class="content-five-left-top"><span>日历</span></div>
                <div class="content-five-date">
                    <div class="content-five-date-top">
                        <select class="content-five-date-one">
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                        </select>
                        <select class="content-five-date-two">
                            <option>1月</option>
                            <option>2月</option>
                            <option>3月</option>
                            <option>4月</option>
                            <option>5月</option>
                            <option>6月</option>
                            <option>7月</option>
                            <option>8月</option>
                            <option>9月</option>
                            <option>10月</option>
                            <option>11月</option>
                            <option>12月</option>
                        </select>
                        <select class="content-five-date-three">
                            <option>标注日期</option>
                        </select>
                        <input type="button" value="返回今天">
                    </div>
                    <div class="content-five-date-table">
                        <table border="0" cellspacing="0">
                            <tr class="content-five-table-tr1"><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th><th>日</th></tr>
                            <tr>
                                <td><span></span><span></span></td>
                                <td><span></span><span></span></td>
                                <td><span></span><span></span></td>
                                <td><span></span><span></span></td>
                                <td><div><span>1</span><span>廿四</span></div></td>
                                <td><div><span style="color:red;">2</span><span>廿五</span></div></td>
                                <td><div><span style="color:red;">3</span><span>廿六</span></div></td>
                            </tr>
                            <tr>
                                <td><div><span>4</span><span>廿七</span></div></td>
                                <td><div><span>5</span><span>廿八</span></div></td>
                                <td><div><span>6</span><span>廿九</span></div></td>
                                <td><div><span>7</span><span>三月</span></div></td>
                                <td><div><span>8</span><span>初二</span></div></td>
                                <td><div><span style="color:red;">9</span><span>初三</span></div></td>
                                <td><div><span style="color:red;">10</span><span>初四</span></div></td>
                            </tr>
                            <tr>
                                <td><div><span>11</span><span>初五</span></div></td>
                                <td><div><span>12</span><span>初六</span></div></td>
                                <td><div><span>13</span><span>初七</span></div></td>
                                <td><div><span>14</span><span>初八</span></div></td>
                                <td><div><span>15</span><span>初九</span></div></td>
                                <td><div><span style="color:red;">16</span><span>初十</span></div></td>
                                <td><div><span style="color:red;">17</span><span>十一</span></div></td>
                            </tr>
                            <tr>
                                <td><div><span>18</span><span>十二</span></div></td>
                                <td><div><span>19</span><span>十三</span></div></td>
                                <td><div><span>20</span><span>十四</span></div></td>
                                <td><div><span>21</span><span>十五</span></div></td>
                                <td><div><span>22</span><span>十六</span></div></td>
                                <td><div><span style="color:red;">23</span><span>十七</span></div></td>
                                <td><div><span style="color:red;">24</span><span>十八</span></div></td>
                            </tr>
                            <tr>
                                <td><div><span>25</span><span>十九</span></div></td>
                                <td><div><span>26</span><span>廿十</span></div></td>
                                <td><div><span>27</span><span>廿一</span></div></td>
                                <td><div><span>28</span><span>廿二</span></div></td>
                                <td><div><span>29</span><span>廿三</span></div></td>
                                <td><div><span style="color:red;">30</span><span>廿四</span></div></td>
                                <td><span></span><span></span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="content-five-right">
                <div class="content-five-right-top"><span>停车场车位</span></div>
                <div class="content-five-right-bottom">
                    <!-- 停车场地图 begin -->
                        <div class="floor-one">
                            <span class="x1y1 z">&nbsp;</span>
                            <span class="x1y2 gg">A01</span>
                            <span class="x1y2 rr">A02</span>
                            <span class="x1y2 bb">A03</span>
                            <span class="x1y2 gg">A04</span>
                            <span class="x1y2 yy">A05</span>
                            <span class="x1y2 bb">A06</span>
                            <span class="x1y2 yy">A07</span>
                            <span class="x1y2 gg">A08</span>
                            <span class="x1y3">出口</span>
                            <span class="x1y4 z">&nbsp;</span>
                        </div>
                        <div class="floor-one">
                            <span class="x1y1 h gg">B1</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y3 z">&nbsp;</span>
                            <span class="x1y4 bb">C1</span>
                        </div>
                        <div class="floor-one">
                            <span class="x1y1 h gg">B2</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 bb">E01</span>
                            <span class="x1y2 gg">E02</span>
                            <span class="x1y2 yy">E03</span>
                            <span class="x1y2 gg">E04</span>
                            <span class="x1y2 bb">E05</span>
                            <span class="x1y2 yy">E06</span>
                            <span class="x1y2 rr">E07</span>
                            <span class="x1y3 z">&nbsp;</span>
                            <span class="x1y4 gg">C2</span>
                        </div>
                        <div class="floor-one">
                            <span class="x1y1 h rr">B3</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y2 z">&nbsp;</span>
                            <span class="x1y3 z">&nbsp;</span>
                            <span class="x1y4 gg">C3</span>
                        </div>
                        <div class="floor-one">
                            <span class="x1y1 z">&nbsp;</span>
                            <span class="x1y3">入口</span>
                            <span class="x1y2 gg">F01</span>
                            <span class="x1y2 bb">F02</span>
                            <span class="x1y2 gg">F03</span>
                            <span class="x1y2 gg">F04</span>
                            <span class="x1y2 bb">F05</span>
                            <span class="x1y2 rr">F06</span>
                            <span class="x1y2 yy">F07</span>
                            <span class="x1y2 bb">F08</span>
                            <span class="x1y4 z">&nbsp;</span>
                        </div>
                    <!-- 停车场地图 end -->
                </div>
            </div>
        </div>
        <!-- 查询 -->
        <div class="content-one content-mid">
            <div class="one-three content-global">
            <form action="<?php echo U('Index/Home/SelectCarPart');?>" method="post">
                <span>车位编号<input type="text" name="part_no" id="" class="one-three-date"></span>
                <span>车主<input type="text" name="car_person" id="" class="one-three-date"></span>
                <span>车牌号<input type="text" name="car_no" id="" class="one-three-date"></span>
                <span>停车时长<input type="text" name="all_time" id="" class="one-three-date"></span>
                <span>收费金额<input type="text" name="pay_money" id="" class="one-three-date"></span>
                <span>收费标准
                    <select class="one-three-time" name="pay_index">
                        <option value ="">所有</option>
                        <option value ="2">2</option>
                        <option value ="3">3</option>
                        <option value ="4">4</option>
                        <option value ="5">5</option>
                        <option value ="8">8</option>
                        <option value ="10">10</option>
                        <option value="15">15</option>
                        <option value="30">30</option>
                    </select>
                </span> 
                <span>收费标记
                    <select class="one-three-time" name="is_pay">
                        <option value ="">所有</option>
                        <option value ="0">未收费</option>
                        <option value ="1">已收费</option>
                    </select>
                </span> 
                <span>申报标注
                    <select class="one-three-time" name="is_mark">
                        <option value ="">所有</option>
                        <option value ="0">标注失败</option>
                        <option value ="1">标注成功</option>
                    </select>
                </span> 
                <!-- <a href="<?php echo U('Index/Home/SelectCarPart',array('is_pay'=>'1','is_mark'=>'0'));?>"></a> -->
                <span><input type="submit" value="搜索"></span>
            </div>
               
        </div>
        <!-- 查询信息 -->
        <div class="content-five-right content-mid" style="margin:0 auto;">
            <div class="content-five-right-bottom-table">
                    <!-- 数据表 -->
                    <table class="content-table" border="0" cellspacing="0">
                        <tr>
                            <th class="tr-one">车位编号</th>
                            <th class="tr-two">车主</th>
                            <th class="tr-two">车牌号</th>
                            <th class="tr-two">开始时间</th>
                            <th class="tr-two">结束时间</th>
                            <th class="tr-one">停车时长</th>
                            <th class="tr-one">收费标准</th>
                            <th class="tr-one">收费金额</th>
                            <th class="tr-two">收费标记</th>
                            <th class="tr-two">申报标注</th>
                            <th class="tr-two">操作</th>
                        </tr>
                        
                        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                                <td><?php echo ($vo["part_no"]); ?></td>
                                <td><?php echo ($vo["car_person"]); ?></td>
                                <td><?php echo ($vo["car_no"]); ?></td>
                                <td><?php echo ($vo["begin_time"]); ?></td>
                                <td><?php echo ($vo["finish_time"]); ?></td>
                                <td><?php echo ($vo["all_time"]); ?></td>
                                <td><?php echo ($vo["pay_index"]); ?></td>
                                <td>￥<?php echo ($vo["pay_money"]); ?></td>
                                <td><?php if(($vo["is_pay"] == 1)): ?>已付费 <?php else: ?> 未付费<?php endif; ?></td>
                                <td><?php if(($vo["is_mark"] == 1)): ?>标注成功 <?php else: ?> 标注失败<?php endif; ?></td>
                                <td>
                                <span style="display:block;"><a href="#">增加</a>&nbsp;&nbsp;<a href="#">删除</a></span><span><a href="#">修改</a>&nbsp;&nbsp;<a href="#">查看</a></span>
                                </td>
                            </tr><?php endforeach; endif; ?>
 
                    </table>
            </div>
        </div>
        <!-- 备用 -->
        <!-- <div class="content-four content-mid">
            <div class="content-four-left">
                <div class="content-four-left-top">
                    <span>第一组项目</span>
                </div>
                <div class="content-four-left-buttom">
                    <div class="content-four-left-pro1">项目一</div>
                    <div class="content-four-left-pro2">项目二</div>
                    <div class="content-four-left-pro2">项目三</div>
                    <div class="content-four-left-pro2">项目四</div>
                    <div class="content-four-left-pro2">项目五</div>
                    <div class="content-four-left-table">
                        <table border="0" cellspacing="0" class="content-four-left-table1">
                            <tr><td>购买材料一</td><td>购买材料一</td><td>购买材料一</td><td>购买材料一</td></tr>
                            <tr><td>购买材料二</td><td>购买材料二</td><td>购买材料二</td><td>购买材料二</td></tr>
                            <tr><td>购买材料四</td><td>购买材料四</td><td>购买材料四</td><td>购买材料四</td></tr>
                            <tr><td>购买材料六</td><td>购买材料六</td><td>购买材料六</td><td>购买材料六</td></tr>
                            <tr><td>购买材料十三</td><td>购买材料十三</td><td>购买材料十三</td><td>购买材料十三</td></tr>
                            <tr><td>购买材料二十</td><td>购买材料二十</td><td>购买材料二十</td><td>购买材料二十</td></tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="content-four-right">
                <div class="content-four-right-top"><span>第一组项目</span></div>
                <div class="content-four-right-middle">
                    <div class="content-four-right-one"><span class="span-grey">标题</span><span>项目报表三</span></div>
                    <div class="content-four-right-two">
                        <div class="content-four-right-div1"><span class="span-grey">价格</span><span>￥158</span></div>
                        <div class="content-four-right-div2"><span class="span-grey" class="span-grey">负责人</span><span>小A</span></div>
                    </div>
                    <div class="content-four-right-three"><span class="span-grey">项目描述</span><span>该项目目前负责人是...</span></div>
                </div>
                <div class="content-four-right-bottom">
                    <span><input type="checkbox" class="content-four-right-input1" name="check" value="Car" checked="checked"></span>
                    <span class="span-grey">遵守保密协议</span>
                    <input class="content-four-right-input2" type="submit" value="搜索">
                </div>
            </div>
        </div> -->

    </div>
</body>
</html>