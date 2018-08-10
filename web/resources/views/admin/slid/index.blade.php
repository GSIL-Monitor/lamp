@extends('admin.layout.index')


<!-- 在占位符中填充内容 -->
@section('container')

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i>图片列表</span>
    </div>
  <div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
      <div id="DataTables_Table_1_length" class="dataTables_length">
        <form action="/admin/user" method="get">
           
      </div>
        <div class="dataTables_filter" id="DataTables_Table_1_filter">
          <label
            <input type="text" name="search" aria-controls="DataTables_Table_1">
          </label>
           
        </div>
    </form>
    <table class=" mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
      <thead>
        <tr role="row">
          <th>ID</th>
          <th>图 片</th>
          <th>路 径</th>
          <th>操 作</th>
        </tr>
      </thead>
      <tbody role="alert" aria-live="polite" aria-relevant="all">
        @foreach($data as $k=>$v)
        <tr class="odd">
            <td>{{ $v -> id }}</td>
            <td><img src="{{ $v['profile'] }}" width="100px"></td>
            <td >{{ $v -> profile }}</td>
            <td>
                @if ( $v -> status == 1 )
                  <a href="#" class="btn btn-success">显示</a>
                @elseif ( $v -> status == 2 )
                  <a href="#" class="btn btn-info">隐藏</a>
                @endif
                <form action="/admin/slid/{{ $v->id }}" method="post" style="display: inline;">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-warning" value="删除">
                </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection


