// 表格n列换颜色
$(".kuai .table1 tr:gt(0)").each(function(){
	$(this).children("td").eq(0).css("color","#a4a7a8");
	$(this).children("td").eq(2).css("color","#a4a7a8");
	$(this).children("td").eq(4).css("color","#a4a7a8");
});

// 对称性和稳定性数值
liner1=$(".liner1 span").html();
liner2=$(".liner2 span").html();
$(".liner1").css("margin-left",(liner1)+"%");
$(".liner2").css("margin-left",(liner2)+"%");

// 头像居中
var widthd=$(".conten_left").width()-120;
$(".touxiang").css("margin-left",widthd/2);

//canvas点击放大
// var num=0;
// $(".kuai2").click(function(){
// 	if(num==0){
// 		$(".kuaidiv2").css("width","100%")
// 		$(this).addClass("ran")
// 		$.getScript("/Public/js/main4.js")
// 		$.getScript("/Public/js/main5.js")
// 		$.getScript("/Public/js/main6.js")
// 		$.getScript("/Public/js/main7.js")
// 		$.getScript("/Public/js/main8.js")
// 		$.getScript("/Public/js/main9.js")
// 		num=1
// 	}else{
// 		$(this).removeClass("ran")
// 		$.getScript("/Public/js/main4.js")
// 		$.getScript("/Public/js/main5.js")
// 		$.getScript("/Public/js/main6.js")
// 		$.getScript("/Public/js/main7.js")
// 		$.getScript("/Public/js/main8.js")
// 		$.getScript("/Public/js/main9.js")
// 		num=0
// 	}
// })
// $(".kuai").click(function(){
// 	if(num==0){
// 		$(this).addClass("ran")
// 		$("table").hide()
// 		$.getScript("/Public/js/main1.js")
// 		$.getScript("/Public/js/main2.js")
// 		$.getScript("/Public/js/main3.js")
// 		$.getScript("/Public/js/main10.js")
// 		$.getScript("/Public/js/main11.js")
// 		$.getScript("/Public/js/main12.js")
// 		$.getScript("/Public/js/main13.js")
// 		num=1
// 	}else{
// 		$(this).removeClass("ran")
// 		$("table").show()
// 		$.getScript("/Public/js/main1.js")
// 		$.getScript("/Public/js/main2.js")
// 		$.getScript("/Public/js/main3.js")
// 		$.getScript("/Public/js/main10.js")
// 		$.getScript("/Public/js/main11.js")
// 		$.getScript("/Public/js/main12.js")
// 		$.getScript("/Public/js/main13.js")
// 		num=0
// 	}
	
// })