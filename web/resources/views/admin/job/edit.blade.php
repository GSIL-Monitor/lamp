@extends('admin.layout.index')

<!-- 在占位符中填充内容 -->
@section('container')

<div class="mws-panel grid_8">
  @if (count($errors) > 0)
  <div class="mws-form-message error">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
</div>
<!-- 配置文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>{{ $title }}</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/job/{{ $job->id }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label" >标题名称</label>
                    <div class="mws-form-item">
                        <input type="text" class="medium" name="jtitle" value="{{ $job->jtitle }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label" >联系电话</label>
                    <div class="mws-form-item">
                        <input type="text" class="medium" name="jphone" value="{{ $job->jphone }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label" >广告链接网址</label>
                    <div class="mws-form-item">
                        <input type="text" class="medium" name="jhttp" value="{{ $job->jhttp }}">
                    </div>
                </div>
                <div class="mws-form-row">
                  <label class="mws-form-label">上传广告小图片</label>
                  <div class="mws-form-item" style="width:670px;">
                      <input type="file" name="jpice"  class="medium" placeholder="" value="{{ $job->jpice }}">
                      <div class="img-wrap">
                        <img src="" alt="">
                      </div>
                  </div>
                  <label class="mws-form-label">图片状态</label>
                  <div class="mws-form-item clearfix">
                      <ul class="mws-form-list inline">
                          <li>
                            <input type="radio" name="jstatus" value="1"> 
                            <label>显示</label>
                          </li>
                          <li>
                            <input type="radio" name="jstatus" value="2" checked> 
                            <label>隐藏</label>
                          </li>
                      </ul>
                  </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label" >广告内容简介</label>
                    <div class="mws-form-item">
                        <script id="container" name="jcontent" type="text/plain" style="width:87%;height:200px;">
                        </script>
                    </div>
                </div>
             
                <div class="mws-button-row">
                    <input type="submit" value="修改" class="btn btn-info">
                    <input type="reset" value="重置" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>      
</div>
 <!--  实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container',{
        toolbars: [
            ['fullscreen', 'source', 'undo', 'redo'],
            ['bold', 'italic', 'underline', 'fontborder',  'simpleupload','removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'selectall', 'cleardoc']
        ]
    });
</script>
     

@endsection