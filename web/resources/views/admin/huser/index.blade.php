@extends('admin.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')
	
	<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i>{{ $title }}</span>
    </div>
  <div class="mws-panel-body no-padding">
   <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    <div id="DataTables_Table_1_length" class="dataTables_length">
        <form action="/admin/huser" method="get">
            <label>显示
                <select size="1" name="count" aria-controls="DataTables_Table_1">
                  <option value="5" @if(!empty($request['count']) && isset($request['count']) && $request['count'] == 5) selected @endif>5</option>
                  <option value="10" @if(!empty($request['count']) && isset($request['count']) && $request['count'] == 10) selected @endif>10</option>
                  <option value="15" @if(!empty($request['count']) && isset($request['count']) && $request['count'] == 15) selected @endif>15</option>
                </select>页
          </label>
        </div>
        <div class="dataTables_filter" id="DataTables_Table_1_filter">
          <label>搜索:
            <input type="text" name="search" aria-controls="DataTables_Table_1"  value="{{ $request['search'] or ''}}">
          </label>
            <input type="submit" value="搜索" class="btn">
        </div>
    </form>
    <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
      <thead>
        <tr role="row">
          <th>ID</th>
          <th>用户名</th>
          <th>密码</th>
          <th>邮箱</th>
          <th>手机号</th>
          <th>注册时间</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody role="alert" aria-live="polite" aria-relevant="all">
        @foreach($data as $k=>$v)
        <tr class="odd">
            <td>{{ $v -> id }}</td>
            <td>{{ $v -> username }}</td>
            <td>{{ $v -> password }}</td>
            <td>{{ $v -> email }}</td>
            <td>{{ $v -> phone }}</td>
            <td>{{ $v -> created_at }}</td>
            <td>
              @if ( $v -> status == 1 )
                <a href="/admin/user/{{ $v->id }}/up" class="btn btn-success">正常</a>
              @elseif ( $v -> status == 2 )
                <a href="/admin/user/{{ $v->id }}/down" class="btn btn-danger">禁用</a>
              @endif
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