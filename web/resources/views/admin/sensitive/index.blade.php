@extends('admin.layout.index')

@section('container')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>{{ $title }}</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <div id="DataTables_Table_1_length" class="dataTables_length">
            <form action="/admin/link" method="get">
                <label>显示
                    <select size="1" name="count" aria-controls="DataTables_Table_1">
                      <option value="5"   @if ( !empty( $request['count'] )  &&  isset( $request['count'] ) &&  $request['count'] == 5 )) selected  @endif >5</option>
                      <option value="10"  @if ( !empty( $request['count'] )  &&  isset( $request['count'] ) &&  $request['count'] == 10 )) selected  @endif >10</option>
                      <option value="15"  @if ( !empty( $request['count'] )  &&  isset( $request['count'] ) &&  $request['count'] == 15 )) selected  @endif >15</option>
                    </select>页
                </label>
                </div>
                    <div class="dataTables_filter" id="DataTables_Table_1_filter">
                      <label>搜索:
                        <input type="text" name="search" aria-controls="DataTables_Table_1" value="{{ $request['search'] or '' }}">
                      </label>
                    <input type="submit" value="搜索" class="btn">
                </div>
            </form>
        <table class="mws-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>敏感词</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($data as $k=>$v)
                <tr>
                    <td>{{ $v -> id }}</td>
                    <td>{{ $v -> word }}</td>
                    <td style="width: 110px;">
                    	<a href="/admin/sensitive/{{ $v->id }}/edit" class="btn btn-warning">修改</a>
                    	<form action="/admin/sensitive/{{ $v->id }}" method="post" style="display: inline;">
                    		{{ csrf_field() }}
                    		{{ method_field('DELETE') }}
                    		<input type="submit" value="删除" class="btn btn-danger">
                    	</form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div id="page_page">
          {!! $data->appends($request)->render() !!}
      </div>
    </div>
</div>
@endsection