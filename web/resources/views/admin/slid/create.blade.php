@extends('admin.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')
  <div class="mws-panel grid_8">
      <div class="mws-panel-header">
          <span>上传图片</span>
        </div>
        <div class="mws-panel-body no-padding">
          <form class="mws-form" action="/admin/slid" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mws-form-inline">
              <div class="mws-form-row">
                <label class="mws-form-label">图片</label>
                <div class="mws-form-item" style="width: 570px;">
                    <input type="file" name="profile"  class="small" ">
                    <div class="img-wrap">
                      <img src="" alt="">
                 </div>
                </div>
              </div>
              <div class="mws-form-row">
                <label class="mws-form-label">描述</label>
                <div class="mws-form-item" style="width: 1040px;">
                    <input type="text" name="describe"  class="small" ">
                    <div class="img-wrap">
                      <img src="" alt="">
                 </div>
                </div>
              </div>

              <div class="mws-form-row">
                <label class="mws-form-label">状态</label>
                <div class="mws-form-item clearfix">
                    <ul class="mws-form-list inline">
                        <li>
                          <input type="radio" name="status" value="1"> 
                          <label>显示</label>
                        </li>
                        <li>
                          <input type="radio" name="status" value="2" checked> 
                          <label>隐藏</label>
                        </li>
                    </ul>
                </div>
              </div>
            <div class="mws-button-row">
              <input type="submit" value="上传" class="btn btn-info">
              <input type="reset" value="重置" class="btn btn-success">
            </div>
          </form>
        </div>      
    </div>

@endsection