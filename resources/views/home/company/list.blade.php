@include('home.common.head')
<div class="layui-card">
    <div class="layui-card-body">
        <table class="layui-hide" id="company"></table>
    </div>
</div>

<script type="text/html" id="barDemo">
	<a class="layui-btn layui-btn-xs" onclick="detail(@{{d.id}}, '@{{d.name}}')">查看爆料</a>
	<a class="layui-btn layui-btn-xs" onclick="add(@{{d.id}}, '@{{d.name}}')">我要爆料</a>
</script>
<script>
	layui.use ('table', function () {
		const table = layui.table;

		table.render ({
			elem: '#company',
			url: "{{url('company')}}/{{$id}}",
			where: {
				_token: '{{csrf_token()}}'
			},
			method: 'post',
			cols: [[
				{field: 'name', title: '公司名称'},
				{field: 'address', title: '公司地址'},
				{field: 'legal', title: '法定代表人'},
				{field: 'black_nums', title: '爆料数'},
				{field: 'created_at', title: '上榜时间'},
				{field: 'updated_at', title: '更新时间'},
				{fixed: 'right', title:'操作', toolbar: '#barDemo'}
			]],
			page: true,
			limit: 30
		});
	});
</script>
<script>
	let layer;

	layui.use('layer', function() {
		layer = layui.layer;
	});

	function detail(id, name)
	{
		layer.open({
			type: 2,
			title: name + ' - 爆料列表',
			shadeClose: true,
			shade: 0.8,
			area: ['98%', '98%'],
			content: "/company/"+ id +"/message"
		});
	}

	function add(id, name)
	{
		layer.open({
			type: 2,
			title: name + ' - 爆料吐槽',
			shadeClose: true,
			shade: 0.8,
			area: ['98%', '98%'],
			content: "/message/"+ id
		})
	}
</script>