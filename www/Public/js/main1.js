// 基于准备好的dom，初始化echarts实例
var myChart = echarts.init(document.getElementById('main1'));
// 指定图表的配置项和数据
option = {
	title: {
		text: '步态周期L',
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
	color: ['#ff4351', '#ffd728', '#28cdfb', '#a5de37', '#7b72e9', '#749f83', '#ca8622', '#bda29a', '#6e7074', '#546570', '#c4ccd3'],
	legend: {
		data: ['着地期', '平足期', '瞪伸期', '摆动期', '步态周期'],
		right: 35,
		data: [{
			name: '着地期',
			// 强制设置图形为圆。
			icon: 'circle',
		}, {
			name: '平足期',
			icon: 'circle',
		}, {
			name: '瞪伸期',
			icon: 'circle',
		}, {
			name: '摆动期',
			icon: 'circle',
		}, {
			name: '步态周期',
			icon: 'circle',
		}],
		textStyle: {
			color: '#eee'
		}
	},
	toolbox: {
		feature: {
			saveAsImage: {}
		}
	},
	grid: {
		left: '1%',
		right: '4%',
		bottom: '14%',
		top: '16%',
		containLabel: true
	},
	xAxis: [{
		type: 'category',
		boundaryGap: false,
		data: ['14.8', '28.5', '35.6', '5.03', '55.8', '14.8', '28.5'],
		axisTick: {
			show: false
		},
		axisLine: {
			show: false
		},
	}],
	yAxis: [{
		type: 'value',
		name: '百分比',
		nameTextStyle: '#868a8d',
		min: 0,
		max: 100,
		axisLine: {
			show: false
		},
		axisTick: {
			show: false
		},
		splitLine:{
			lineStyle:{
				color:'#344148'
			}
		}
	}, {
		type: 'value',
		name: '时间',
		nameTextStyle: '#868a8d',
		min: 0,
		max: 6,
		axisLine: {
			show: false
		},
		axisTick: {
			show: false
		},
		splitLine:{
			lineStyle:{
				color:'#344148'
			}
		}
	}],
	dataZoom: [{
		type: 'slider',
		start: 0,
		end: 100
	}],
	textStyle: {
		color: '#eee'
	},
	series: [{
		name: '着地期',
		type: 'line',
		areaStyle: {
			normal: {}
		},
		data: [12, 53, 10, 13, 90, 23, 21],
		symbol: 'none',
	}, {
		name: '平足期',
		type: 'line',
		areaStyle: {
			normal: {}
		},
		data: [20, 12, 19, 34, 90, 30, 10],
		symbol: 'none',
	}, {
		name: '瞪伸期',
		type: 'line',
		areaStyle: {
			normal: {}
		},
		data: [50, 32, 01, 54, 90, 30, 10],
		symbol: 'none',
	}, {
		name: '摆动期',
		type: 'line',
		areaStyle: {
			normal: {}
		},
		data: [20, 32, 31, 34, 90, 30, 20],
		symbol: 'none',
	}, {
		name: '步态周期',
		type: 'line',
		areaStyle: {
			normal: {}
		},
		data: [20, 50, 91, 34, 50, 30, 20],
		symbol: 'none',
	}]
};
// 使用刚指定的配置项和数据显示图表。
myChart.setOption(option);