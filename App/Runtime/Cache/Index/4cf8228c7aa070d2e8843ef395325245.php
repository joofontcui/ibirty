<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>囧囧方| Welcome to our family</title>

    <link rel="stylesheet" href="__PUBLIC__/game/css/bird_style.css" media="screen" type="text/css" />

</head>

<body>

  <div id="canvasContainer"></div>
<span id="textInputSpan">
  输入字母(最多8个)按“↑”开始游戏 :
  <input id="textInput" maxlength="10" type="text" width="150" />
  <button onclick="changeText()">初始化</button>
</span>
<div style="text-align:center;clear:both">
<!-- <script src="/gg_bd_ad_160x600_R.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script> -->
</div>
  <script src="__PUBLIC__/game/js/bird_index.js"></script>

</body>

</html>