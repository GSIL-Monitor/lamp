@extends('admin.layout.index')

@section('container')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> Simple Table</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>分类名称</th>
                    <th>父级ID(s)</th>
                    <th>分类路径</th>
                    <th>分类状态</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($data as $k=>$v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>
                    	@if(substr_count($v->path,',') == 0)
	    							<option value="{{ $v->id }}" style="font-size:15px; font-weight: bold;">{{ $v->cname }}</option>
	    						@elseif(substr_count($v->path,',') == 1)
	    							<option value="{{ $v->id }}" style="font-weight: bold;">{{ $v->cname }}</option>
	    						@else
	    							<option value="{{ $v->id }}">{{ $v->cname }}</option>
	    						@endif
                    </td>
                    <td>{{ $v->pid }}</td>
                    <td>{{ $v->path }}</td>
                    <td>{{ $v->status == 1 ? '激活' : '禁用' }}</td>
                    <td>
                    	<a href="/admin/cates/{{ $v->id }}/edit" class="btn btn-warning">修改</a>
                    	<form action="/admin/cates/{{ $v->id }}" method="post" style="display: inline;">
                    		{{ csrf_field() }}
                    		{{ method_field('DELETE') }}
                    		<input type="submit" value="删除" class="btn btn-danger">
                    	</form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection