@include('home.common.head')
<div class="layui-card-body">
<form class="layui-form layui-form-pane" id="form" onsubmit="return save(event)" autocomplete="off">
    <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">希望你能一针见血</label>
        <div class="layui-input-block">
            <textarea placeholder="请输入内容" class="layui-textarea" name="content"></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <button type="submit" class="layui-btn">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
    <input type="hidden" value="{{$id}}" name="company_id">
    <input type="hidden" value="{{csrf_token()}}" name="_token">
</form>
</div>
<script>
	let layer;

	layui.use(['form', 'layer'], function(){
		const form = layui.form;
		layer = layui.layer;

		form.render();
	});

	function save(e)
	{
		e.preventDefault();

		let formData = $('#form').serializeArray();

		let data = {};

		for ( let x in formData) {
			data[formData[x].name] = formData[x].value;
		}

		if ( data.content === '' ) {
			layer.msg('内容不能为空');
			return;
		}

		$.ajax({
			type: 'post',
			url: '/message/'+ data.company_id,
			data: data,
			dataType: 'json',
			success: (res) => {
				if ( res.code === 0 ) {
					layer.msg('新增成功');
					setTimeout(() => {window.parent.layer.closeAll();}, 800)
				} else {
					layer.msg(res.msg);
				}
			}
		})
	}
</script>