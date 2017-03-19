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

.item .pic { float:right;margin-right:10px;width:100px;height:100px; }  


</style>

</head>
<body>

<div class="fzj">
<h2>刘方方 / 个人简历</h2>
</div>
<img src="__PUBLIC__/images/liufangfang_1.jpg" height="200px" width="150px" style="float:right">

<div class="item">  
  <div class="pic"></div>  

</div>
<ul>
<li>女 / 本科 / 湖南科技大学网络工程系 / 2017届毕业生 </li>
<li>籍&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;贯：黑龙江大庆/现居地：湖南湘潭</li>
<li>出生年月：1994.12</li>
<li>民&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;族：汉族</li>
<li>政治面貌：共青团员</li>

<li>实习意向：web前端工程师</li>
<li>实习时间：2016年7月-12月</li>
<li>英语能力：CET-4</li>
<li>联系方式：15197299685 / Email:839719165@qq.com</li>
<li>自&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评：性格开朗，勤奋好学，抗压能力强，自学能力强，能很好地融入团队</li>
</ul>

<div class="fzj">
<h2>技能水平</h2>
</div>

<ul>
<li>熟练应用HTML，CSS，熟悉HTML5，CSS3。</li>
<li>熟悉W3C标准，对表现与数据分离、Web语义化等有一定理解。</li>
<li>熟悉bootstrap、Amaze UI前端开发框架。</li>
<li>理解AJAX运作机制，熟悉JQuery等主流JS框架。</li>
<li>掌握DIV+CSS页面架构和布局方式，会使用CSS Sprite雪碧图以及用字体在网页中画ICON图标。</li>
<li>了解网站优化以及web调试工具，并对对主流浏览器的兼容性有一定了解。</li>
<li>熟悉Adobe photoshop、coreldraw、Adobe illustrator等图形软件。</li>
<li>数据库：熟悉MySQL，了解SQL Server。</li>
<li>服务器：熟悉Tomcat。</li>
<li>计算机基础：计算机网络、操作系统、数据结构等计算机专业基础。</li>
</ul>
<div class="fzjj">
<h2>经验经历</h2>
</div>

<div class="fzj">
<p>2015年9月-2016年4月</p>
</div>

<ul>
<li><b>湘潭市建行微信公众平台消息推送</b>
<ul>
  <li>项目责任:微信排版、编辑、美化、推送</li>
  <li>使用易企秀制作建行理财宣传、活动宣传、拜年贺卡等</li>
</ul>
</li>
</ul>
<div class="fzj">
<p>2015年7月-2015年12月</p>
</div>

<ul>
<li><b>参与基于微信SaaS的人脸识别点名系统</b>
<ul>
<li>项目职责:美工</li>
<li>有很好的团队合作基础，在学习和积累的过程中完成自己的任务。</li>
<li>曾为团队制作过参赛视频、参赛ppt等。</li>
</ul></li>
</ul>

<div class="fzj">
<p>2015年3月-2015年7月</p>
</div>

<ul>
<li><b>参与校园微圈APP开发</b>
<ul>
  <li>项目责任:UI设计</li>
  <li>负责APP整体界面设计，图标绘制、图片制作等。</li>

</ul>
</li>
</ul>

<div class="fzj">
<h2>任职经历</h2>
</div>

<ul>
<li>组织部副部长  2014-2015年</li>
<li>班级团支书    2014-2015年</li>

</ul>

</body>
</html>