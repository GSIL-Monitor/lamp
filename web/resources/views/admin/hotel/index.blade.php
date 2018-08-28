@extends('admin.layout.index')
<!-- 在占位符中填充内容 -->
@section('container')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i>精品酒店</span>
    </div>
  <div class="mws-panel-body no-padding">
   <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    <div id="DataTables_Table_1_length" class="dataTables_length">
        <form action="/admin/hotel" method="get">
        </div>
        <div class="dataTables_filter" id="DataTables_Table_1_filter">
          <label>搜索:
            <input type="text" name="search" aria-controls="DataTables_Table_1" value="{{ $request['search'] or ''}}">
          </label>
            <input type="submit" value="搜索" class="btn">
        </div>
    </form>
    <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
      <thead>
        <tr role="row">
          <th>ID</th>
          <th>酒店名称</th>
          <th>酒店地址</th>
          <th>酒店图片</th>
          <th>酒店介绍</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody role="alert" aria-live="polite" aria-relevant="all">
        @foreach($data as $k=>$v)
        <tr class="odd">
        	<td>{{ $v -> id }}</td>    
          <td>{{ $v -> title }}</td>
        	<td>{{ $v -> address }}</td>
        	<td>
            <img src="{{ $pic[$k][0] }}" width="100px">
        	<td >
              <div style="height:30px;width:480px;text-overflow: ellipsis;overflow:hidden;white-space:nowrap;">{!! $v -> content !!}</div>
            </td>
            <td>
                <a href="/admin/hotel/{{ $v->id }}/edit" class="btn">修改</a>
                <form action="/admin/hotel/{{ $v->id }}" method="post" style="display: inline;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="删除" class="btn">
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
</div>

@endsection