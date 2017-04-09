// 基于准备好的dom，初始化echarts实例
var myChart = echarts.init(document.getElementById('main9'));
// 指定图表的配置项和数据
option = {
	title: {
		text: '仰角',
		textStyle: {
			color: '#eee',
			fontSize:16,
			fontWeight:400
		}
	},
	grid: {
		left: '2%',
		right: '5%',
		bottom: '20%',
		containLabel: true
	},
	tooltip: {
		trigger: 'axis'
	},
	color:['#28cdfb','#7b72e9'],
	legend: {
		data: ['左', '右'],
		right: 0,
		data: [{
			name: '左',
			// 强制设置图形为圆。
			icon: 'circle',
		}, {
			name: '右',
			icon: 'circle',
		}],
		textStyle: {
			color: '#eee'
		}
	},
	textStyle: {
		color: '#eee'
	},
	xAxis: {
		type: 'category',
		boundaryGap: false,
		data: ['0', '10', '20', '30', '40', '50', '60', '70', '80', '90', '100'],
		axisTick: {
			show: false
		},
		axisLabel: {
			interval: 1
		},
		splitLine:{
        	show:true,
        	lineStyle:{
        		color:'#354851'
        	}
       },
       axisLine:{
       		lineStyle:{
       			color:'#839199'
       		}
       }
	},
	yAxis: {
		type: 'value',
		splitNumber:2,
		axisTick: {
			show: false
		},
		axisLine: {
			show: false
		},
		name: '度',
		splitLine:{
        	show:true,
        	lineStyle:{
        		color:'#354851'
        	}
        }
	},
	series: [{
		name: '左',
		type: 'line',
		symbol: 'none',
		data: [10, 11, 15, 13, 12, 13, 10, 15, 8, 7, 12],
	}, {
		name: '右',
		type: 'line',
		data: [1, -2, 2, 5, 3, 2, 0, 14, 3, 8, 6],
		symbol: 'none',
	}]
};
// 使用刚指定的配置项和数据显示图表。
myChart.setOption(option);