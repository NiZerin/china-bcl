@include('home.common.head')
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
    <legend>数据统计</legend>
</fieldset>
<div class="layui-card">
    <div class="layui-card-body">
        <div class="layui-form">
            <table class="layui-table">
                <colgroup>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>省份</th>
                    <th>被曝公司</th>
                    <th>爆料总数</th>
                    <th>真实指数</th>
                    <th>虚假指数</th>
                </tr>
                </thead>
                <tbody>
                @foreach($provinces as $k => $v)
                    <tr>
                        <td><a href="{{url('company')}}/{{$v['province_id']}}" target="inlineFrame">{{$v['province_name']}}</a></td>
                        <td>{{$v['company_count']}}</td>
                        <td>{{$v['black_count']}}</td>
                        <td>{{$v['real_count']}}</td>
                        <td>{{$v['fake_count']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
