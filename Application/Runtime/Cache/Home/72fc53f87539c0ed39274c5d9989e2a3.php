<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>service-小爱科技官网</title>
<link rel="shortcut icon" href="/Public/img/logod.ico">
<link rel="stylesheet" href="/Public/lib/anim/css/animate.min.css" />
<link rel="stylesheet" href="/Public/lib/bootstrap/bootstrap.min.css" />
<link rel="stylesheet" href="/Public/lib/iconfont/iconfont.css" />
<link rel="stylesheet" href="/Public/css/header.css" />
<link rel="stylesheet" href="/Public/css/footer.css" />
<script type="text/javascript" src="/Public/lib/jq/jquery-1.12.3.min.js" ></script>
<script type="text/javascript" src="/Public/lib/bootstrap/bootstrap.min.js" ></script>
<script type="text/javascript" src="/Public/lib/anim/js/wow.min.js" ></script>
</head>
	<body>
		<div class="fiex"><i class="iconfont">&#xe76e;</i></div>
		<header>
			<div class="container wow bounceIn">
				<a href="<?php echo U('Index/index');?>"><img src="/Public/img/logo.png" /></a>
				<div class="header_right">
					<ul class="hidden-xs">
						<a href="<?php echo U('Index/index');?>"><li>主页</li></a>
						<a href="<?php echo U('Index/senthmetic');?>"><li>核心技术</li></a>
						<a class="lihov" href="<?php echo U('Index/service');?>"><li class="active">产品介绍</li></a>
						<ul class="header_ull">
							<a href="<?php echo U('Index/aishoes');?>"><li class="liline">孕期孕动系列</li></a>
							<a href="<?php echo U('Index/miaoshan');?>"><li>健步系列</li></a>
						</ul>
						<a href="#"><li>步态数据系统</li></a>
					</ul>
					<div class="visible-xs nav">
						<i class="iconfont click">&#xe78e;</i>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<ul>
				<a href="<?php echo U('Index/index');?>"><li class="active">主页</li></a>
				<a href="<?php echo U('Index/senthmetic');?>"><li>核心技术</li></a>
				<a href="<?php echo U('Index/service');?>"><li>产品介绍<i class="iconfont left_icon">&#xe65e;</i></li></a>
				<ul class="nav_ul">
					<a href="<?php echo U('Index/aishoes');?>"><li>孕期孕动系列</li></a>
					<a href="<?php echo U('Index/miaoshan');?>"><li>健步系列</li></a>
				</ul>
				<a href="#"><li>步态数据系统</li></a>
			</ul>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow slideInLeft">
					<img class="full_ma hidden-xs pc" src="/Public/img/1.png" />
					<img class="visible-xs full full_ma phone" src="/Public/img/img024.png" />
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow slideInRight">
					<img class="full_ma hidden-xs pc" src="/Public/img/2.png" />
					<img class="visible-xs full full_ma phone" src="/Public/img/img025.png" />
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow slideInLeft">
					<img class="full_ma hidden-xs pc" src="/Public/img/3.png" />
					<img class="visible-xs full full_ma phone" src="/Public/img/img026.png" />
				</div>
			</div>
		</div>
		<footer class="wow fadeInLeft">
			<div class="container hidden-xs">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<ul class="footer_ul">
							<li class="footer_ul_li">小爱科技-十足智感</li>
							<a href=""><li>孕期运动系列</li></a>
							<a href=""><li>长者健步系列</li></a>
							<li>跑步系列</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<ul class="footer_ul">
							<li class="footer_ul_li">服务与支持</li>
							<a href=""><li>senthmetic</li></a>
							<li>aiPro</li>
							<li>aiLink</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<ul class="footer_ul">
							<li class="footer_ul_li">关注我们</li>
							<img class="imgxuan" src="/Public/img/a0026a236de34cce.jpg" />
							<li class="xuan">微信公众号</li>
							<li class="xuan-fu">新浪微博</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<ul class="footer_ul">
							<li class="footer_ul_li">联系我们</li>
							<li>4000-110-883</li>
							<li>周一至周六09:30-18:00</li>
							<li></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="weip">
				<div class="container text-center">
					© Copyright 2016 | 重庆小爱科技有限公司
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="/Public/js/all.js" ></script>
	</body>
</html>