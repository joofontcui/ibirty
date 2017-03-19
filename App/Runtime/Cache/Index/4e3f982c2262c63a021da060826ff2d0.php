<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
/* GitHub stylesheet for MarkdownPad (http://markdownpad.com) */
/* Author: Nicolas Hery - http://nicolashery.com */
/* Version: b13fe65ca28d2e568c6ed5d7f06581183df8f2ff */
/* Source: https://github.com/nicolahery/markdownpad-github */

/* RESET
=============================================================================*/

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
}

/* BODY
=============================================================================*/

body {
  font-family: Helvetica, arial, freesans, clean, sans-serif;
  font-size: 14px;
  line-height: 1.6;
  color: #333;
  background-color: #fff;
  padding: 20px;
  max-width: 960px;
  margin: 0 auto;
}

body>*:first-child {
  margin-top: 0 !important;
}

body>*:last-child {
  margin-bottom: 0 !important;
}

/* BLOCKS
=============================================================================*/

p, blockquote, ul, ol, dl, table, pre {
  margin: 15px 0;
}

/* HEADERS
=============================================================================*/

h1, h2, h3, h4, h5, h6 {
  margin: 20px 0 10px;
  padding: 0;
  font-weight: bold;
  -webkit-font-smoothing: antialiased;
}

h1 tt, h1 code, h2 tt, h2 code, h3 tt, h3 code, h4 tt, h4 code, h5 tt, h5 code, h6 tt, h6 code {
  font-size: inherit;
}

h1 {
  font-size: 28px;
  color: #000;
}

.fzj h2 {
  font-size: 24px;
  border-bottom: 1px solid #ccc;
  color: #000;
}

.fzj p{
  font-size: 14px;
  border-bottom: 1px solid #ccc;
  color: #000;
}

.fzjj h2 {
  font-size: 24px;
  color: #000;
}

h3 {
  font-size: 18px;
}

h4 {
  font-size: 16px;
}

h5 {
  font-size: 14px;
}

h6 {
  color: #777;
  font-size: 14px;
}

body>h2:first-child, body>h1:first-child, body>h1:first-child+h2, body>h3:first-child, body>h4:first-child, body>h5:first-child, body>h6:first-child {
  margin-top: 0;
  padding-top: 0;
}

a:first-child h1, a:first-child h2, a:first-child h3, a:first-child h4, a:first-child h5, a:first-child h6 {
  margin-top: 0;
  padding-top: 0;
}

h1+p, h2+p, h3+p, h4+p, h5+p, h6+p {
  margin-top: 10px;
}

/* LINKS
=============================================================================*/

a {
  color: #4183C4;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

/* LISTS
=============================================================================*/

ul, ol {
  padding-left: 30px;
}

ul li > :first-child,
ol li > :first-child,
ul li ul:first-of-type,
ol li ol:first-of-type,
ul li ol:first-of-type,
ol li ul:first-of-type {
  margin-top: 0px;
}

ul ul, ul ol, ol ol, ol ul {
  margin-bottom: 0;
}

dl {
  padding: 0;
}

dl dt {
  font-size: 14px;
  font-weight: bold;
  font-style: italic;
  padding: 0;
  margin: 15px 0 5px;
}

dl dt:first-child {
  padding: 0;
}

dl dt>:first-child {
  margin-top: 0px;
}

dl dt>:last-child {
  margin-bottom: 0px;
}

dl dd {
  margin: 0 0 15px;
  padding: 0 15px;
}

dl dd>:first-child {
  margin-top: 0px;
}

dl dd>:last-child {
  margin-bottom: 0px;
}

/* CODE
=============================================================================*/

pre, code, tt {
  font-size: 12px;
  font-family: Consolas, "Liberation Mono", Courier, monospace;
}

code, tt {
  margin: 0 0px;
  padding: 0px 0px;
  white-space: nowrap;
  border: 1px solid #eaeaea;
  background-color: #f8f8f8;
  border-radius: 3px;
}

pre>code {
  margin: 0;
  padding: 0;
  white-space: pre;
  border: none;
  background: transparent;
}

pre {
  background-color: #f8f8f8;
  border: 1px solid #ccc;
  font-size: 13px;
  line-height: 19px;
  overflow: auto;
  padding: 6px 10px;
  border-radius: 3px;
}

pre code, pre tt {
  background-color: transparent;
  border: none;
}

kbd {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #DDDDDD;
    background-image: linear-gradient(#F1F1F1, #DDDDDD);
    background-repeat: repeat-x;
    border-color: #DDDDDD #CCCCCC #CCCCCC #DDDDDD;
    border-image: none;
    border-radius: 2px 2px 2px 2px;
    border-style: solid;
    border-width: 1px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    line-height: 10px;
    padding: 1px 4px;
}

/* QUOTES
=============================================================================*/

blockquote {
  border-left: 4px solid #DDD;
  padding: 0 15px;
  color: #777;
}

blockquote>:first-child {
  margin-top: 0px;
}

blockquote>:last-child {
  margin-bottom: 0px;
}

/* HORIZONTAL RULES
=============================================================================*/

hr {
  clear: both;
  margin: 15px 0;
  height: 0px;
  overflow: hidden;
  border: none;
  background: transparent;
  border-bottom: 4px solid #ddd;
  padding: 0;
}

/* TABLES
=============================================================================*/

table th {
  font-weight: bold;
}

table th, table td {
  border: 1px solid #ccc;
  padding: 6px 13px;
}

table tr {
  border-top: 1px solid #ccc;
  background-color: #fff;
}

table tr:nth-child(2n) {
  background-color: #f8f8f8;
}

/* IMAGES
=============================================================================*/

img {
  max-width: 100%
}
</style>

</head>
<body>

<div class="fzj">
<h2>崔俊 / 个人简历</h2>
</div>
<img src="__PUBLIC__/images/cuijun_1.jpg" height="200px" width="150px" style="float:right">
<ul>
<li>男 / 本科 / 湖南科技大学网络工程系 / 2017届毕业生 </li>
<li>籍贯：辽宁鞍山 / 现居地：湖南湘潭</li>
<li>出生年月：1993年11月 </li>
<li>民族：汉族</li>
<li>政治面貌：团员</li>
<li>联系方式：15197187787 / Email:000ahow@sina.com / Email:824929588@qq.com</li>
<br/>
<li><b>实习意向：PHP开发工程师</b></li>
<li>实习时间：2016年7月中旬——2017年4月中旬</li>
<li>自评：思维敏锐，基础扎实，有较强的自学能力，对团队运营合作有特殊理解</li>
<li>现阶段：自学JSP和spring/hibernate/struts框架，准备用PHP（ThinkPHP框架）和JSP编写一个相同的网上图书商城</li>
</ul>

<div class="fzj">
<h2>技能水平</h2>
</div>

<ul>
<li><b>编程语言</b>：熟悉PHP语言基础及面向对象思想，了解C、C++、Java</li>
<li><b>框架</b>：熟悉ThinkPHP，了解YII、Zend</li>
<li><b>WEB前端</b>：熟悉Ajax、jQuery、Bootstrap</li></li>
<li><b>数据库</b>：熟悉MySQL、SQL Server</li>
<li><b>服务器</b>：熟悉Tomcat，了解Nginx</li>
<li><b>计算机基础</b>：计算机网络、操作系统、数据结构、数据库等计算机专业基础扎实</li>
</ul>

<div class="fzjj">
<h2>学习经验&amp;项目经历</h2>
</div>

<div class="fzj">
<p>2015年7月-2015年12月</p>
</div>

<ul>
<li><b>参与基于微信SaaS的人脸识别点名系统的开发</b>
<ul>
<li>项目职责:项目设计人员及部分后端开发</li>
<li>前端采用JQery，EasyUI，后端采用ThinkPHP，数据库采用MySQL</li>
<li>由管理员应用、租户应用、点到者应用、签到微信公众号组成</li>
<li>采用SaaS架构实现多租户管理，运用MVC三层结构设计</li>
<li>以Face++人脸识别API，微信做客户端发送数据给服务器</li>
</ul></li>
</ul>

<div class="fzj">
<p>2015年4月-2015年7月</p>
</div>

<ul>
<li><b>独立完成微博系统的开发</b>
<ul>
  <li>项目责任:完成Web前后端开发</li>
  <li>前端使用Bootstrap，后端使用ThinkPHP，数据库采用MySQL</li>
  <li>由我的博客模块、个人中心模块、最新动态模块、留言板模块、站内搜索模块组成</li>
  <li>运用MVC三层结构设计、部署新浪SAE、URL路由配置、调用百度Ueditor编辑器</li>
</ul>
</li>
</ul>

<div class="fzj">
<h2>个人荣誉</h2>
</div>

<ul>
<li>"乐意考杯"湖南省"互联网+"大学生创新创业赛校二等奖</li>
<li>湖南省大学生挑战杯校级银奖</li> 
<li>湖南省互联网专项赛校三等奖</li>
<li>获校图灵科技节视频制作一等奖。</li> 
<li>获校图灵科技节网站制作二等奖×2。</li> 
<li>获院“特殊贡献”奖</li>
<li>获院“科技创新个人”奖。</li> 
</ul>

<div class="fzjj">
<h2>在校经历</h2>
</div>

<ul>
<div class="fzj">
<p>2015年6月至今</p>
</div>
<li>组建团队——Zero&Geek
<ul>
  <li>成立“Zero&Geek”创新创业团队并担任队长，团队现有学校4个不同专业的11名大学生。工作方向是Web、App及微信平台开发。团队目前完成项目3个（“玩转科大”线下团购系统；“微圈”新闻客户端；基于微信SaaS的人脸识别点名系统）。团队获湖南省“北大青鸟杯”程序设计竞赛应用开发类三等奖，校奖二次，院奖数次。</li>
</ul></li>

<div class="fzj">
<p>2014年6月-2015年6月</p>
</div>
<li>计算机学院科协副主席
<ul>
  <li>主要工作是：维护学院网站：[computer.hnust.edu.cn(Dedecms)]，运营微信平台：IT小助手[IT_Main]，视频特效及剪辑</li>
  <li>组织开展面向全校的“办公软件交流会”</li>
  <li>团队荣誉：获院“优秀学生部门”（2/20）</li>
  <li>团队荣誉：获校新媒体优秀代表二等奖</li>
</ul></li>

<div class="fzj">
<p>2014年6月-2015年6月</p>
</div>

<li>计算机学院网络工程三班班长
<ul>
  <li>团队荣誉:五四红歌合唱比赛中获二等奖</li>
  <li>团队荣誉:院量化考核第一名</li>
</ul></li>

<div class="fzj">
<p>2014年6月-2015年6月</p>
</div>

<li>校寻陌社团社长
<ul>
  <li>社团主要活动是日常支教（湖南省湘潭市桃源路小学）、教员素质培养、关爱留守儿童、关爱孤寡老人。</li>
  <li>策划组织湖南省湘潭市桃源路小学六·一儿童汇演，获得巨大成功。</li>
  <li>团队荣誉:获支教小学赠与锦旗一面</li>
</ul></li>

<div class="fzj">
<p>2014年7月-2014年8月</p>
</div>

<li>山区支教
<ul>
  <li>担任支教队队长，带领18人的支教队对贵州黔南自治州云雾镇窑上乡小学进行为期20天的支教，支教成果丰硕，受到当地政府和学校的好评，支教期间被当地政府评为“优秀支教员”。支教期间，对当地居民进行走访交流，对少数名族文化和习俗有了很深的接触。</li>
</ul></li>

<div class="fzj">
<p></p>
</div>

<li>其他技能：视频制作
<ul>
  <li>熟悉Adobe After Effects、EDIUS、Adobe Premiere Pro等视频后期制作软件，熟悉Ps，Au，Ai部分功能</li>
  <li>参与校“芳菲之歌”晚会开场视频和暖场视频的制作任务。</li>
  <li>负责校企合作项目视频制作</li>
  <li>负责院学生会招新视频制作</li>
  <li>负责院表彰大会视频制作</li>
</ul></li>
</ul>

</body>
</html>