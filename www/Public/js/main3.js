// 基于准备好的dom，初始化echarts实例
var myChart = echarts.init(document.getElementById('main3'));
// 指定图表的配置项和数据
option = {
	title: {
		text: '步频变化',
		left: '1%',
		textStyle: {
			color: '#eee',
			fontSize:16,
			fontWeight:400
		}
	},
	tooltip: {
		trigger: 'axis'
	},
	legend: {
		data: ['步频'],
		show: false
	},
	color: ['#27c7f4'],
	grid: {
		left: '1%',
		right: '1%',
		bottom: '3%',
		top: '16%',
		containLabel: true
	},
	textStyle: {
		color: '#b8b9ba'
	},
	xAxis: [{
		type: 'category',
		boundaryGap: false,
		data: ['0', '5', '10', '15', '20', '25', '30', '35', '40', '45', '50', '55', '60'],
		name: '秒',
		axisLine: {
			show: false
		},
		axisTick: {
			show: false
		},
		axisLabel: {
			interval: 1
		},
		splitLine: {
			show: true,
			lineStyle: {
				color: '#354851'
			}
		}
	}],
	yAxis: [{
		type: 'value',
		name: '步/每分钟',
		axisLine: {
			show: false
		},
		axisTick: {
			show: false,
		},
		min: 0,
		max: 100,
		splitLine: {
			show: true,
			lineStyle: {
				color: '#354851'
			}
		}
	}],
	series: [{
		name: '步频',
		type: 'line',
		stack: '总量',
		areaStyle: {
			normal: {}
		},
		data: [20, 32, 11, 34, 9, 23, 21, 40, 35, 37, 21, 20, 35],
		symbol: 'none',
	}, ]
};
// 使用刚指定的配置项和数据显示图表。
myChart.setOption(option);