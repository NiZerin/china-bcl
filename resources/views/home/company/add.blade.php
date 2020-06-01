@include('home.common.head')
<div class="layui-card-body">
    <form class="layui-form layui-form-pane" id="form" onsubmit="return save(event)" autocomplete="off">
        <div class="layui-form-item">
            <div class="layui-inline">
            <label class="layui-form-label">所在省份</label>
            <div class="layui-input-inline">
                <select name="province_id" lay-verify="required" lay-search="">
                    <option value="">直接选择或搜索选择</option>
                    @foreach($provinces as $k => $v)
                        <option value="{{$v->province_id}}">{{$v->province_name}}</option>
                    @endforeach    
                </select>
            </div>
        </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">公司名称</label>
            <div class="layui-input-block">
                <input type="text" name="name" placeholder="" class="layui-input" lay-verify="required">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">公司地址</label>
            <div class="layui-input-block">
                <input type="text" name="address" placeholder="" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">法定代表人</label>
            <div class="layui-input-inline">
                <input type="text" name="legal" placeholder="" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn">立即提交</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
        <input type="hidden" value="{{csrf_token()}}" name="_token">
    </form>
</div>
<script>
    let layer;

    layui.use(['form', 'layer'],  function () {
    	const form = layui.form;
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

	    if ( data.name === '' ) {
	    	layer.msg('公司名称木有填写');
	    	return;
        }

	    if ( data.province_id === '' ) {
		    layer.msg('公司在那个省份呢？');
		    return;
        }

	    $.ajax({
            type: 'post',
            url: '/company',
            data: data,
            dataType: 'json',
            success: (res) => {
            	if ( res.code === 0 ) {
            		layer.msg('公司添加成功，赶快去爆料吧');
            		setTimeout(() => {window.parent.layer.closeAll()}, 800);
                } else {
            		layer.msg(res.msg)
                }
            }
        })
    }
</script>