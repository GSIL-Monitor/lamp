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
        <form action="/admin/strategyss" method="get">
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
                  <input type="text" name="search" aria-controls="DataTables_Table_1" value="{{ $request['search'] or '' }}" placeholder="请输入目的地">
                  </label>
                <input type="submit" value="搜索" class="btn">
            </div>    
        </form>
        <form action="/admin/strategyss" method="get" style="float: right;padding-right: 25px;">
              <label style="color: red;padding-right: 10px;">按照评分值进行排序：</label>
              <input type="submit" value="升序排序" class="btn btn-primary" name="asc">
              <input type="submit" value="降序排序" class="btn btn-info" name="desc">
        </form>
    <table class=" mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
      <thead>
        <tr role="row">
          <th>ID</th>
          <th>标题名称</th>
          <th>目的地</th>
          <th>超链接地址</th>
          <th>评分值</th>
          <th>景色图片</th>
          <th>操 作</th>
        </tr>
      </thead>
      <tbody role="alert" aria-live="polite" aria-relevant="all" align="center">
       @foreach($strategyss as $k=>$v)
        <tr class="odd">
            <td>{{ $v->id }}</td>
            <td>{{ $v->stitle }}</td>
            <td>{{ $v->smdd }}</td>
            <td>{{ $v->shttps }}</td>
            <td>{{ $v->pdcaas }}</td>
            <td><img src="{{ $v->spice }}" width="100px"></td>
            <td >
               <a href="/admin/strategyss/{{ $v->id }}/edit" class="btn btn-success">修改</a>
                <form action="/admin/strategyss/{{ $v->id }}" method="post" style="display: inline;">
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
       {!! $strategyss->appends([$request])->render() !!}
    </div>
  </div>
</div>
</div>
@endsection


