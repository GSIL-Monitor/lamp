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
        <form action="/admin/job" method="get">
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
    <table class=" mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
      <thead>
        <tr role="row">
          <th>ID</th>
          <th>标题名称</th>
          <th>联系电话</th>
          <th>广告链接地址</th>
          <th>广告图片</th>
          <th>操 作</th>
        </tr>
      </thead>
      <tbody role="alert" aria-live="polite" aria-relevant="all" align="center">
        @foreach($data as $k=>$v)
        <tr class="odd">
            <td>{{ $v -> id }}</td>
            <td >{{ $v -> jtitle }}</td>
            <td>{{ $v -> jphone }}</td>
            <td>{{ $v -> jhttp }}</td>
            <td><img src="{{ $v['jpice'] }}" width="100px"></td>
            <td >
                @if ( $v -> jstatus == 1 )
                  <a href="/admin/job/{{ $v->id }}/up" class="btn btn-primary">隐藏</a>&nbsp;&nbsp;&nbsp;
                @elseif ( $v -> jstatus == 2 )
                  <a href="/admin/job/{{ $v->id }}/down" class="btn btn-info">显示</a>&nbsp;&nbsp;&nbsp;
                @endif
               <a href="/admin/job/{{ $v->id }}/edit" class="btn btn-success">修改</a>&nbsp;&nbsp;&nbsp;
                <form action="/admin/job/{{ $v->id }}" method="post" style="display: inline;">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-warning" value="删除" onclick="return confirm('是否确认删除')">
                </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div id="page_page">
        {!! $data->appends([$request])->render() !!}
    </div>
  </div>
</div>
</div>
@endsection


