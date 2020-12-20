<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>各省求职者慎重公司参考名单</title>
    @include('home.common.head')
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo"><a href="/" style="color: #009688">China Black Company List</a></div>
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item">
                <a href="javascript:;">其他操作</a>
                <dl class="layui-nav-child">
                    <dd><a href="javascript:;" onclick="addCompany()">新增公司</a></dd>
{{--                    <dd><a href="javascript:;" onclick="reset()">清除负面</a></dd>--}}
                    <dd><a href="javascript:;" onclick="about()">关于本站</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
            </li>
            <li class="layui-nav-item">
                <a href="https://github.com/NiZerin/china-bcl" target="_blank">Github</a>
            </li>
        </ul>
    </div>
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <ul class="layui-nav layui-nav-tree">
                @foreach($provinces as $k => $v)
                <li class="layui-nav-item"><a href="{{url('company')}}/{{$v->province_id}}" target="inlineFrame">{{$v->province_name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="layui-body">
        <iframe style="width: 100%;height: 100%;" frameborder="0" id="inlineFrame" name="inlineFrame" src="/data"></iframe>
    </div>
    <div class="layui-footer">
        请所有添加人，考虑清楚再添加，本站不支持删除，本站面对群体为全行业，全岗位。希望大家都客观评论，不要带有太强的情绪色彩，避免产生不必要的麻烦。
    </div>
</div>
<script>
    let layer;

	layui.use(['element', 'layer'], function() {
		const element = layui.element;
		layer = layui.layer;
	});

	function addCompany()
    {
    	layer.open({
		    type: 2,
		    title: '新增公司',
		    shadeClose: true,
		    shade: 0.8,
		    area: ['50%', '98%'],
		    content: "/company"
        })
    }

    function reset()
    {
	    layer.open({
		    type: 2,
		    title: '清除负面爆料',
		    shadeClose: true,
		    shade: 0.8,
		    area: ['50%', '98%'],
		    content: "/reset"
	    })
    }

    function about()
    {
	    layer.open({
		    type: 2,
		    title: '关于本站',
		    shadeClose: true,
		    shade: 0.8,
		    area: ['50%', '98%'],
		    content: "/about"
	    })
    }
</script>
</body>
</html>
