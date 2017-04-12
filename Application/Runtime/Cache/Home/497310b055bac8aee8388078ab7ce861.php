<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>小爱科技—details</title>
<link rel="shortcut icon" href="/Public/img/logod.ico">
<script type="text/javascript" src="/Public/lib/jq/jquery-3.1.0.min.js"></script>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	.back{
		position: fixed;
		z-index: -1;
		width: 100%;
		height: 100%;
		background: linear-gradient(to bottom, #002032, #1d94d2);
	}
	.conten{
		padding: 20px;
	}
	.flex{
		display: flex;
	}
	.flex1{
		flex: 1;
		border: 1px solid #888;
		margin-right: 10px;
		margin-bottom: 10px;
		border-radius: 5px;
		overflow: hidden;
	}
	.flex2{
		flex: 2;
		border: 1px solid #888;
		margin-right: 10px;
		margin-bottom: 10px;
		border-radius: 5px;
		overflow: hidden;
	}
	.text{
		line-height: 130px;
		color: #fff;
		text-align: center;
		background: rgba(0,0,0,.5);
	}
	.flex1 img{
		height: 130px;
		width: 100%;
	}
	.none{
		border: none;
	}
</style>
</head>
<body>
<div class="back"></div>
<div class="conten">
	<div class="flex">
		<div class="flex1 text" data-n="xm">
			姓名
		</div>
		<div class="flex1 text" data-n="xq">
			详情
		</div>
		<div class="flex1">
			<img src="/Public/img/img1_03.png" data-n="0"/>
		</div>
		<div class="flex1">
			<img src="/Public/img/img2_03.png" data-n="1"/>
		</div>
		<div class="flex1">
			<img src="/Public/img/img3_03.png" data-n="2"/>
		</div>
		<div class="flex1">
			<img src="/Public/img/img4_03.png" data-n="3"/>
		</div>
	</div>
	<div class="flex">
		<div class="flex1">
			<img src="/Public/img/img5_03.png" data-n="4"/>
		</div>
		<div class="flex1">
			<img src="/Public/img/img6_03.png" data-n="5"/>
		</div>
		<div class="flex1">
			<img src="/Public/img/img7_03.png" data-n="6"/>
		</div>
		<div class="flex1">
			<img src="/Public/img/img7_03.png" data-n="7"/>
		</div>
		<div class="flex1">
			<img src="/Public/img/img7_03.png" data-n="8"/>
		</div>
		<div class="flex1">
			<img src="/Public/img/img8_03.png" data-n="9"/>
		</div>
	</div>
	<div class="flex">
		<div class="flex1">
			<img src="/Public/img/img11_03.png" data-n="10"/>
		</div>
		<div class="flex1">
			<img src="/Public/img/img12_03.png" data-n="11"/>
		</div>
		<div class="flex1">
			<img src="/Public/img/img13_03.png" data-n="12"/>
		</div>
		<div class="flex1">
			<img src="/Public/img/img14_03.png" data-n="13"/>
		</div>
		<div class="flex1 none">
		</div>
		<div class="flex1 none">
		</div>
	</div>
</div>
<script type="text/javascript">
	//获取姓名
	$(".xinxi").eq(0).html(localStorage.user);
	var uid = $('#uid').val();
	if (!uid) {
		uid = localStorage.user;
	}
	$(".flex1").click(function(){
		alert($(this).attr("data-n"))
		var nn=$(this).attr("data-n")
		localStorage.num=nn;
		localStorage.user=uid;
		window.open("id1.html")
	})
</script>
</body>

</html>