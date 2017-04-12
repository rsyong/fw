<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>小爱科技—details</title>
<link rel="shortcut icon" href="/Public/img/logod.ico">
<link rel="stylesheet" href="/Public/lib/bootstrap/bootstrap.min.css" />
<link rel="stylesheet" href="/Public/css/index.css" />
<script type="text/javascript" src="/Public/lib/jq/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="/Public/lib/echarts/echarts.common.min.js"></script>
<style type="text/css">
	body {
		overflow-y: auto;
		font-size: 15px;
	}
	.content{
		padding: 20px 40px;
		float: left;
		box-sizing: border-box;
	}
	.hi,.hid{
		margin-top: 20px;
		width: 215px;
		height: 160px;
		overflow: hidden;
		border-radius: 10px;
		float: left;
		margin-right: 10px;
		color: #fff;
		background: rgba(0,0,0,.3);
	}
	.hid{
		padding: 10px;
	}
	.t{
		text-align: center;
		line-height: 120px;
	}
	.t img{
		width: 20%;
	}
	.kuaidiv2{
		height: 170px;
	}
	.over-hide{
		border-radius: 10px;
		overflow: hidden !important; 
	}
	.kuai{
		margin-top: 0px;
		transform: scale(1,1);
		min-width: 200px;
		padding: 16px;
		height: 160px;
		background: none;
	}
	.kuaidiv{
		height: 140px;
	}
	.textd{
		position: absolute;
		margin-top: -70px;
		width: 190px;
	}
	.textds{
		width: 215px;
	}
</style>
</head>
<body>
<div class="back"></div>
<div class="content">
	<div class="hi hid t" data-n="xm">
		<img src="/Public/img/user.png" />
		<div class="textd">个人信息</div>
	</div>
	<div class="hi hid t" data-n="xq">
		<img src="/Public/img/s3.png" />
		<div class="textd">详情</div>
	</div>
	<!--<div class="row">
		<div class="col-xs-12 col-lg-4 col-md-4 col-sm-12">
			<div class="conten_left" style="height: 248px;">
				<div class="touxiang"><img src="img/logo.jpg" /></div>
				<div class="ming xinxi">姓名：--</div>
				<div class="p"><span class="xinxi">年龄：--</span><span class="tizhong xinxi">体重：--</span>
					<div class="clear"></div>
				</div>
				<input type="hidden" id="uid" value="<?php echo ($uid); ?>">
				<div class="p"><span class="xinxi">身高：--</span></div>
				<div class="p"><span class="xinxi">备注：--</span></div>
			</div>
		</div>
		<div class="col-xs-12 col-lg-8 col-md-8 col-sm-12" style="overflow-x: auto;">
			<div class="conten_right">
				<div class="conten_right_title">
					<div class="row">
						<div class="col-xs-12 col-lg-5 col-md-6 col-sm-5">
							<span class="rp">时间：--</span>
						</div>
						<div class="col-xs-12 col-lg-7 col-md-6 col-sm-7">
							<span class="rp">时长：--</span>
							<span class="rp">类型：--</span>
						</div>
					</div>
				</div>
				<div>
					<div class="title_shuju">对称性<span class="floatright">--/--%</span></div>
					<div class="scrool">
						<div class="scrool_all scrool_width3 scrool_color1">良好</div>
						<div class="scrool_all scrool_width3 scrool_color2">正常</div>
						<div class="scrool_all scrool_width4 scrool_color3">较差</div>
						<div class="liner liner1"><span class="hidespan">0</span></div>
						<div class="clear"></div>
					</div>
					<div class="title_shuju">稳定性<span class="floatright">--/--%</span></div>
					<div class="scrool">
						<div class="scrool_all scrool_width1 scrool_color2">良好</div>
						<div class="scrool_all scrool_width1 scrool_color1">正常</div>
						<div class="scrool_all scrool_width2 scrool_color2">良好</div>
						<div class="scrool_all scrool_width4 scrool_color3">较差</div>
						<div class="liner liner2"><span class="hidespan">0</span></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!--<div class="clear"></div>-->
	<div class="borad">
		<div class="over-hide hi mt" data-n="0">
			<div class="t">
				<img src="/Public/img/s4.png" />
				<div class="textd textds">着地类型</div>
			</div>
			<!--<div class="kuai">
				<table class="table1">
					<tr>
						<td colspan="2">着地</td>
						<td colspan="2">步频</td>
						<td>参数</td>
						<td>左</td>
						<td>右</td>
						<td>参考</td>
					</tr>
					<tr>
						<td>步数</td>
						<td class="rp">--步&nbsp;</td>
						<td>步频</td>
						<td class="rp">--步</td>
						<td>步幅</td>
						<td>6.65m</td>
						<td>1.12m</td>
						<td>1m-1.65m</td>
					</tr>
					<tr>
						<td>足跟着地</td>
						<td class="rp">--%</td>
						<td>偏快</td>
						<td class="rp">--%</td>
						<td>最大摆宽</td>
						<td>1.6m</td>
						<td>0.05m</td>
						<td>0.05m-0.08m</td>
					</tr>
					<tr>
						<td>足中着地</td>
						<td class="rp">--%</td>
						<td>适中</td>
						<td class="rp">--%</td>
						<td>步高</td>
						<td>0m</td>
						<td>0.1m</td>
						<td>0.07m-0.15m</td>
					</tr>
					<tr>
						<td>前足着地</td>
						<td class="rp">--%</td>
						<td>偏慢</td>
						<td class="rp">--%</td>
						<td>着地冲击</td>
						<td>0g</td>
						<td>0.71g</td>
						<td>1.1g-1.5g</td>
					</tr>
				</table>
			</div>-->
		</div>
	</div>
	<div class="over-hide hi mt"  data-n="3">
		<div class="t">
			<img src="/Public/img/s2.png" />
			<div class="textd textds">空间参数</div>
		</div>
		<!--<div class="kuai" style="min-width: 1000px;">
			<table class="table3">
				<tr>
					<td colspan="6">空间参数</td>
				</tr>
				<tr>
					<td></td>
					<td>着地仰角</td>
					<td>着地内翻脚</td>
					<td>离地仰角</td>
					<td>外翻幅度</td>
					<td>内收幅度</td>
					<td>最大仰角速度</td>
					<td>最大外翻速度</td>
					<td>最大摆动速度</td>
					<td>步偏角</td>
				</tr>
				<tr>
					<td class="color_hui">左/右比</td>
					<td>1.02</td>
					<td>1.02</td>
					<td>1.02</td>
					<td>1.02</td>
					<td>1.02</td>
					<td>1.02</td>
					<td>1.02</td>
					<td>1.02</td>
					<td>1.02</td>
				</tr>
				<tr>
					<td class="color_hui">&nbsp;L</td>
					<td>70%</td>
					<td>33%</td>
					<td>70%</td>
					<td>70%</td>
					<td>70%</td>
					<td>1.00s</td>
					<td>1.00s</td>
					<td>1.00s</td>
					<td>1.00s</td>
				</tr>
				<tr>
					<td class="color_hui">&nbsp;R</td>
					<td>19%</td>
					<td>11%</td>
					<td>70%</td>
					<td>70%</td>
					<td>70%</td>
					<td>0.95s</td>
					<td>0.95s</td>
					<td>0.95s</td>
					<td>0.95s</td>
				</tr>
				<tr>
					<td class="color_hui">参考</td>
					<td class="color_hui">62%~67%</td>
					<td class="color_hui">12%~18%</td>
					<td class="color_hui">30%~50%</td>
					<td class="color_hui">30%~50%</td>
					<td class="color_hui">30%~50%</td>
					<td class="color_hui">0.95s~1.25s</td>
					<td class="color_hui">0.95s~1.25s</td>
					<td class="color_hui">0.95s~1.25s</td>
					<td class="color_hui">0.95s~1.25s</td>
				</tr>
			</table>
		</div>-->
	</div>
	<div class="over-hide hi mt" data-n="1">
		<div class="t">
			<img src="/Public/img/s1.png" />
			<div class="textd textds">步态周期</div>
		</div>
		<!--<div class="kuai">
			<div class="kuaidiv" id="main1"></div>
			<div class="kuaidiv" id="main2"></div>
			<table class="table2">
				<tr>
					<td></td>
					<td>支撑期</td>
					<td>着地期</td>
					<td>平足期</td>
					<td>瞪伸期</td>
					<td>摆动期</td>
					<td>步态周期</td>
				</tr>
				<tr>
					<td class="color_hui">&nbsp;L</td>
					<td>70%</td>
					<td>33%</td>
					<td>70%</td>
					<td>70%</td>
					<td>70%</td>
					<td>1.00s</td>
				</tr>
				<tr>
					<td class="color_hui">&nbsp;R</td>
					<td>19%</td>
					<td>11%</td>
					<td>70%</td>
					<td>70%</td>
					<td>70%</td>
					<td>0.95s</td>
				</tr>
				<tr>
					<td class="color_hui">参考</td>
					<td class="color_hui">62%~67%</td>
					<td class="color_hui">12%~18%</td>
					<td class="color_hui">30%~50%</td>
					<td class="color_hui">30%~50%</td>
					<td class="color_hui">30%~50%</td>
					<td class="color_hui">0.95s~1.25s</td>
				</tr>
			</table>
		</div>-->
	</div>
	
	<div class="hi hid" data-n="4"><div class="kuaidiv2" id="main4"></div></div>
	<div class="hi hid" data-n="5"><div class="kuaidiv2" id="main5"></div></div>
	<div class="hi hid" data-n="6"><div class="kuaidiv2" id="main6"></div></div>
	<div class="hi hid" data-n="7"><div class="kuaidiv2" id="main7"></div></div>
	<div class="hi hid" data-n="8"><div class="kuaidiv2" id="main8"></div></div>
	<div class="hi hid" data-n="9"><div class="kuaidiv2" id="main9"></div></div>
	<!--<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="kuai2 hi">
				<div class="kuaidiv2" id="main4"></div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="kuai2">
				<div class="kuaidiv2" id="main5"></div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="kuai2">
				<div class="kuaidiv2" id="main6"></div>
				<div class="mainname">足内翻
					<div class="textcenter">|</div>足外翻</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="kuai2">
				<div class="kuaidiv2" id="main7"></div>
				<div class="mainname">足内翻
					<div class="textcenter">|</div>足外翻</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="kuai2">
				<div class="kuaidiv2" id="main8"></div>
				<div class="mainname">足内翻
					<div class="textcenter">|</div>足外翻</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="kuai2">
				<div class="kuaidiv2" id="main9"></div>
				<div class="mainname">足内翻
					<div class="textcenter">|</div>足外翻</div>
			</div>
		</div>
	</div>-->
	
	
	
	
	<div class="over-hide hi mt"  data-n="2">
		<div class="kuai">
			<div class="kuaidiv" id="main3"></div>
		</div>
	</div>
	<div class="over-hide hi"  data-n="10">
		<!--<div class="t">转向角-柱状</div>-->
		<div class="kuai">
			<div class="kuaidiv" id="main10"></div>
		</div>
	</div>
	<div class="over-hide hi"  data-n="11">
		<!--<div class="t">着地类型-点状</div>-->
		<div class="kuai">
			<div class="kuaidiv" id="main11"></div>
		</div>
	</div>
	<div class="over-hide hi" data-n="12">
		<!--<div class="t">着地类型</div>-->
		<div class="kuai">
			<div class="kuaidiv" id="main12"></div>
		</div>
	</div>
	<div class="over-hide hi" data-n="13">
		<!--<div class="t">着地过程</div>-->
		<div class="kuai">
			<div class="kuaidiv" id="main13" ></div>
		</div>
	</div>
	
	
</div>
<div class="content" style="padding-top: 112px;padding-bottom: 15px;">
	
</div>
<script type="text/javascript">
		//获取姓名
		$(".xinxi").eq(0).html(localStorage.user);
		var uid = $('#uid').val();
		if (!uid) {
			uid = localStorage.user;
		}
		$(".hi").click(function(){
			var nn=$(this).attr("data-n")
			localStorage.num=nn;
			localStorage.user=uid;
			window.open("id1.html")
		})
		//获取姓名
		window.onload=function(){
			$.ajax({
				type:"get",
				url:"<?php echo U('Index/getbasic');?>",
				async:true,
				dataType:'JSON',
				data:{
					phone:uid
				},
				success:function(data){
					// $(".touxiang img").attr("src");				//获取头像
					$(".xinxi").eq(0).html("姓名："+data.name);  //获取姓名
					$(".xinxi").eq(1).html("年龄："+data.age);				//获取年龄
					$(".xinxi").eq(2).html("体重："+data.weight);				//....体重
					$(".xinxi").eq(3).html("身高："+data.height);				//....身高
					$(".xinxi").eq(4).html("备注：--");				//....备注
				}
			});
			$.ajax({
				type:"get",
				url:"<?php echo U('Index/getreport');?>",
				async:true,
				dataType:'JSON',
				data:{
					phone:uid
				},
				success:function(data){
						$(".rp").eq(0).html("时间："+data.date);  //获取姓名
						$(".rp").eq(1).html("时长："+data.time);  //获取姓名
						$(".rp").eq(2).html("类型："+data.type);  //获取姓名
						$(".rp").eq(3).html(data.step+"步");  //获取姓名
						$(".rp").eq(4).html(data.pace+"步");  //获取姓名
						$(".rp").eq(5).html(data.heel+"%");  //获取姓名
						$(".rp").eq(6).html(data.Overheated+"%");  //获取姓名
						$(".rp").eq(7).html(data.soles+"%");  //获取姓名
						$(".rp").eq(8).html(data.moderate+"%");  //获取姓名
						$(".rp").eq(9).html(data.thumb+"%");  //获取姓名
						$(".rp").eq(10).html(data.slow+"%");  //获取姓名

						$(".hidespan").eq(0).html(data.symmetry);
						$(".hidespan").eq(1).html(data.stability);
						if (data.symmetry<=28) {
							$(".floatright").eq(0).html("良好/"+data.symmetry+"%");
						} else if (data.symmetry<=56){
							$(".floatright").eq(0).html("正常/"+data.symmetry+"%");
						} else {
							$(".floatright").eq(0).html("较差/"+data.symmetry+"%");
						}
						if (data.stability<=18) {
							$(".floatright").eq(1).html("良好/"+data.stability+"%");
						} else if (data.stability<=36){
							$(".floatright").eq(1).html("正常/"+data.stability+"%");
						} else if (data.stability<=56){
							$(".floatright").eq(1).html("良好/"+data.stability+"%");
						} else {
							$(".floatright").eq(1).html("较差/"+data.stability+"%");
						}
					$.getScript("/Public/js/mydeatilstwo.js")
				}
			});
		}
	</script>
<script type="text/javascript" src="/Public/js/main1.js"></script>
<script type="text/javascript" src="/Public/js/main2.js"></script>
<script type="text/javascript" src="/Public/js/main3.js"></script>
<script type="text/javascript" src="/Public/js/main4.js"></script>
<script type="text/javascript" src="/Public/js/main5.js"></script>
<script type="text/javascript" src="/Public/js/main6.js"></script>
<script type="text/javascript" src="/Public/js/main7.js"></script>
<script type="text/javascript" src="/Public/js/main8.js"></script>
<script type="text/javascript" src="/Public/js/main9.js"></script>
<script type="text/javascript" src="/Public/js/smll/main10.js"></script>
<script type="text/javascript" src="/Public/js/smll/main11.js"></script>
<script type="text/javascript" src="/Public/js/smll/main12.js"></script>
<script type="text/javascript" src="/Public/js/smll/main13.js"></script>
<script type="text/javascript" src="/Public/js/mydeatilstwo.js"></script>
</body>

</html>