@extends('admin.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

<!-- 显示错误 -->
<!-- @if (count($errors) > 0)
    <div class="mws-form-message error">
          <ul>
          @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
          @endforeach
          </ul>
    </div>
@endif -->

    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>{{ $title }}</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/set" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">Logo图标</label>
                        <div class="mws-form-item">
                            <input type="file" name='logo' class="fileinput-preview" style="width: 100%; padding-right: 84px;" readonly="readonly" placeholder="请选择Logo图标">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">版本申明</font>
                            </font>
                        </label>
                        <div class="mws-form-item">
                            <textarea rows="" name="copyright" cols="" class="large"></textarea>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">免责申明</font>
                            </font>
                    </label>
                        <div class="mws-form-item">
                            <textarea rows="" name="law" cols="" class="large"></textarea>
                        </div>
                    </div>
                    <div class="mws-button-row">
                          <input type="submit" value="确定" class="btn btn-info">
                          <input type="reset" value="重置" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>      
    </div>
@endsection