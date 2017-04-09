<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>小爱科技—Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<link rel="shortcut icon" href="/Public/img/logod.ico">
<link rel="stylesheet" href="/Public/lib/animad/css/animate.min.css" />
<link rel="stylesheet" href="/Public/css/index.css" />
<script type="text/javascript" src="/Public/lib/animad/js/wow.min.js" ></script>
<script type="text/javascript" src="/Public/lib/jq/jquery-3.1.0.min.js" ></script>
</head>
<body>
	<img class="logoimg" src="/Public/img/logo.jpg" />
	<div class="rect wow fadeInDown">
		<div class="rect_fu">
			<img class="logoimg2" src="/Public/img/logo_03.png" />
			<p class="fonsize1">XIAOAI Lab</p>
			<p class="fonsize2">专业测试您的步态</p>
			<p class="fonsize3">通过算法高速迭代让您的步态数据更精准</p>
		</div>
	</div>
	<div class="logo wow fadeInUp">
		<form action="<?php echo U('Index/details');?>" method="">
			<input id="user" type="tel" placeholder="手机号"/>
			<div class="divcode">
				<input id="code" type="text" placeholder="验证码"/>
				<span class="yanzhengma">发送验证码</span>
			</div>
			<input class="denglu" type="submit" value="登 录"/>
		</form>
	</div>
	<script type="text/javascript" src="/Public/js/my.js" ></script>
</body>
</html>