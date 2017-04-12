var myChart = echarts.init(document.getElementById('main11'));

// 指定图表的配置项和数据
var option = {
	title: {
		text: '转向角',
		textStyle: {
			color: '#eee',
			fontSize:15,
			fontWeight:400
		}
	},
	color: ['#2897d2', '#7b72e9'],
	tooltip: {},
	legend: {
		data: ['左', '右'],
		textStyle: {
			color: '#eee'
		},
		right:0
	},
	grid:{
		left:'30px',
		right:'5%',
		top:'50px',
		bottom:'20%'
	},
	dataZoom: [],
	xAxis: {
		data: ["0","5","10","15","20","25","30","35",'40',"45",'50',"55",'60'],
		axisLine: {
			lineStyle: {
				color: "#8497a1"
			}
		},
		boundaryGap: false,
		axisTick: {
			show: false
		},
		splitLine:{
        	show:true,
        	lineStyle:{
        		color:'#354851'
        	}
        },
        name:'秒',
        axisLabel: {
			interval: 1
		},
	},
	textStyle: {
		color: '#eee'
	},
	yAxis: {
		axisLine: {
			show: false
		},
		splitNumber:3,
		splitLine:{
        	show:true,
        	lineStyle:{
        		color:'#354851'
        	}
       },
       name:'度',
       
	},
	series: [{
		name: '左',
		type: 'scatter',
		data: [,65, 21, 43, 36,55,36,48,60,26,48,35,0],
		symbolSize:8
	}, {
		name: '右',
		type: 'scatter',
		data: [,-65, -21, -43, -36,-60,-62,-56,-45,-48,-86,-35,0],
		symbolSize:8
	}]
};

// 使用刚指定的配置项和数据显示图表。
myChart.setOption(option);