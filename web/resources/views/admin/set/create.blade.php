@extends('admin.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

<!-- 显示错误 -->
@if (count($errors) > 0)
    <div class="mws-form-message error">
          <ul>
          @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
          @endforeach
          </ul>
    </div>
@endif

     <div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>管理员添加</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form class="mws-form" action="/admin/user" method="post">
                    {{ csrf_field() }}
                    <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label">logo图标</label>
                              <div class="mws-form-item">
                                   <input type="text" value="" name="nickname" class="small">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">版本申明</font></font></label>
                              <div class="mws-form-item">
                                   <textarea rows="" cols="" class="large"></textarea>
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">免责申明</font></font></label>
                              <div class="mws-form-item">
                                   <textarea rows="" cols="" class="large"></textarea>
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