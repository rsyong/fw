function add(){
	// 根据等级变换颜色
	var dengji=document.getElementsByClassName("dengji")
	for (n=0;n<dengji.length;n++) {
		if(dengji[n].innerHTML=="良"){
			dengji[n].style.borderBottom="4px solid #fec418";
		}else if(dengji[n].innerHTML=="差"){
			dengji[n].style.borderBottom="4px solid #ff4351";
		}else if(dengji[n].innerHTML=="优"){
			dengji[n].style.borderBottom="4px solid #1fce6d";
		}
	}
	// list点击切换样式
	$(".title_ul li").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
	})
	$(".title_ul2 li").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
	})
	// 进行跳转链接
	$(".col").click(function(){
		location.href="detailstwo.html";
	})
};
// 10ms延迟调用add()函数
setTimeout("add()",100);