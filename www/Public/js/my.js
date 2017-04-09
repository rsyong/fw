new WOW().init();
var wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 0,
    mobile: true,
    live: true
});
wow.init();

//判断是否为ie
function isIe(){
 return ("ActiveXObject" in window);
 }
if(isIe()==true){
	$(".yanzhengma").css("margin-top","0px")
}

function jian(n){
	$(".yanzhengma").html(n+"s后再试");
	n--;
	var time=setInterval(function(){
		$(".yanzhengma").html(n+"s后再试");
		n--;
		if(n==-1){
			num=0;
			$(".yanzhengma").html("发送验证码");
			clearInterval(time);
		}
	},1000);
};
var num=0;//num=0表示点击验证码有效
var duanxin="8888";//定义变量接受短信验证码
var phoned=/^1[34578]\d{9}$/;//正则
$(".yanzhengma").click(function(){
	if(num==0){
		if(phoned.test($("#user").val())==false){
			alert("请输入正确手机号码");
		}else{
			$.ajax({
				type:"get",
				url:"/Index/getcode",
				dataType:'json',
				async:true,
				data:{
					phone:$("#user").val()//获取输入手机号
				},
				success:function(data){
					duanxin=data.data.SMScode;		//获取验证码的值
				},
				error:function(data){
					console.log(data);
				}
			});
			localStorage.user=$("#user").val();
			num=1;//num=1表示点击验证码无效
			jian(30);//定义点击验证码过后多少秒再试
		};
	};
});
//用户登录
$(".denglu").click(function(){
	if($("#code").val()==duanxin){//判断短信验证的值
		return true;
	}else{
		if(phoned.test($("#user").val())==false){
			alert("请输入正确手机号");
		}else if($("#code").val().size!=4||$("#code").val()!=duanxin){
			alert("请输入正确验证码");
		}
		return false;
	};
});
