@extends('admin.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')



@if(session('error'))
    <div class="mws-form-message error">
          {{ session('error') }}
    </div>
@endif


<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $title }}</font></font>
        </span>
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
                <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc"  style="width: 100px;">
                                <font style="vertical-align: inherit;">ID</font>
                            </th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 226px;">
                                <font style="vertical-align: inherit;">网站名称</font>
                            </th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 207px;">
                                 <font style="vertical-align: inherit;">网站网址</font>
                            </th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 148px;">
                                <font style="vertical-align: inherit;">网站简介</font>
                            </th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 111px;">
                                <font style="vertical-align: inherit;">状态</font>
                            </th>
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 111px;">
                                <font style="vertical-align: inherit;">管理操作</font>
                            </th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        @foreach ($data as $k => $v)
                        <tr>
                            <td>{{ $v->lid }}</td>
                            <td>{{ $v->lname }}</td>
                            <td><a href="{{ $v->lurl }}">{{ $v->lurl }}</a></td>
                            <td>{{ $v->lbody }}</td>
                            <td>
                                @if ( $v -> status == 1 )
                                    <a class="btn btn-info" href="/admin/link/{{ $v->lid }}/eav" onclick="return confirm('是否确认审核')">待审核</a>
                                @else
                                    <a class="btn btn-success" href="">审核已通过</a>
                                @endif
                            </td>
                            <td class="">
                                <a href="/admin/link/{{ $v->lid }}/edit" class="btn btn-success">修改</a>
                                <form action="/admin/link/{{ $v->lid }}" method="post" style="display:inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                  <input type="submit" class="btn btn-warning" value="删除">
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
    </div>
</div>

@endsection



