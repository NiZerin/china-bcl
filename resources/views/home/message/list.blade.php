@include('home.common.head')
<div class="layui-card-body">
    <div class="layui-collapse">
        @foreach($messages as $k => $v)
        <div class="layui-colla-item">
            <h2 class="layui-colla-title">{{$v->id}} - {{$v->created_at}}</h2>
            <div class="layui-colla-content layui-show">
                {{$v->content}}
                <br>
                <div style="margin-top: 10px">
                    <a onclick="real({{$v->id}})" class="layui-btn layui-btn-sm layui-btn-normal" id="{{$v->id}}-r">真实: {{$v->real_nums}}</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a onclick="fake({{$v->id}})" class="layui-btn layui-btn-sm layui-btn-danger" id="{{$v->id}}-f">虚假: {{$v->fake_nums}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script>
    let layer;

	layui.use(['element', 'layer'], function() {
		const element = layui.element;
		layer = layui.layer
	});


	function real(id)
    {
        $.ajax({
            type: 'get',
            url: '/message/real/' + id,
            data: {},
            dataType: 'json',
            success: (res) => {
            	if ( res.code === 0 ) {
            		layer.msg(res.msg)
                    $('#' + id + '-r').html('真实: ' + res.data.nums)
                }
            }
        })
    }

    function fake(id)
    {
	    $.ajax({
		    type: 'get',
		    url: '/message/fake/' + id,
		    data: {},
		    dataType: 'json',
		    success: (res) => {
			    if ( res.code === 0 ) {
				    layer.msg(res.msg)
				    $('#' + id + '-f').html('虚假: ' + res.data.nums)
			    }
		    }
	    })
    }
</script>