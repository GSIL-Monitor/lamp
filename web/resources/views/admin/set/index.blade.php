@extends('admin.layout.index')

@section('container')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>{{ $title }}</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Logo图标</th>
                    <th>版本申明</th>
                    <th>免责声明</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($data as $k=>$v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td><img src="{{ $v['logo'] }}" width="100px"></td> 
                    <td>{{ $v->copyright }}</td>
                    <td>{{ $v->law }}</td>
                    
                    <td>
                    	<a href="/admin/set/{{ $v->id }}/edit" class="btn btn-warning">修改</a>
                    	<form action="/admin/set/{{ $v->id }}" method="post" style="display: inline;">
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