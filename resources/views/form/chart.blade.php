@extends('page.main')

@section('content')
<script src="//cdn.bootcss.com/echarts/3.1.9/echarts.js"></script>
<div class="col-md-4 col-md-offset-1" id="main" style="width: 500px;height:400px;"></div>
<div class="col-md-4 col-md-offset-1" id="right" style="width: 500px;height:400px;"></div>
<script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
        option = {
		    title : {
		        text: '某站点用户访问来源',
		        subtext: '纯属虚构',
		        x:'center'
		    },
		    tooltip : {
		        trigger: 'item',
		        formatter: "{a} <br/>{b} : {c} ({d}%)"
		    },
		    legend: {
		        orient: 'vertical',
		        left: 'left',
		        data: ['直接访问','邮件营销','联盟广告','视频广告','搜索引擎']
		    },
		    series : [
		        {
		            name: '访问来源',
		            type: 'pie',
		            radius : '55%',
		            center: ['50%', '60%'],
		            data:[
		                {value:335, name:'直接访问'},
		                {value:310, name:'邮件营销'},
		                {value:234, name:'联盟广告'},
		                {value:135, name:'视频广告'},
		                {value:1548, name:'搜索引擎'}
		            ],
		            itemStyle: {
		                emphasis: {
		                    shadowBlur: 10,
		                    shadowOffsetX: 0,
		                    shadowColor: 'rgba(0, 0, 0, 0.5)'
		                }
		            }
		        }
		    ]
		};


        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
</script>

<script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myRightChart = echarts.init(document.getElementById('right'));

        // 指定图表的配置项和数据
        option = {
		    title: {
		        text: '未来一周气温变化',
		        subtext: '纯属虚构'
		    },
		    tooltip: {
		        trigger: 'axis'
		    },
		    legend: {
		        data:['最高气温','最低气温']
		    },
		    toolbox: {
		        show: true,
		        feature: {
		            dataZoom: {},
		            dataView: {readOnly: false},
		            magicType: {type: ['line', 'bar']},
		            restore: {},
		            saveAsImage: {}
		        }
		    },
		    xAxis:  {
		        type: 'category',
		        boundaryGap: false,
		        data: ['周一','周二','周三','周四','周五','周六','周日']
		    },
		    yAxis: {
		        type: 'value',
		        axisLabel: {
		            formatter: '{value} °C'
		        }
		    },
		    series: [
		        {
		            name:'最高气温',
		            type:'line',
		            data:[11, 11, 15, 13, 12, 13, 10],
		            markPoint: {
		                data: [
		                    {type: 'max', name: '最大值'},
		                    {type: 'min', name: '最小值'}
		                ]
		            },
		            markLine: {
		                data: [
		                    {type: 'average', name: '平均值'}
		                ]
		            }
		        },
		        {
		            name:'最低气温',
		            type:'line',
		            data:[1, -2, 2, 5, 3, 2, 0],
		            markPoint: {
		                data: [
		                    {name: '周最低', value: -2, xAxis: 1, yAxis: -1.5}
		                ]
		            },
		            markLine: {
		                data: [
		                    {type: 'average', name: '平均值'}
		                ]
		            }
		        }
		    ]
		};



        // 使用刚指定的配置项和数据显示图表。
        myRightChart.setOption(option);
</script>


@stop