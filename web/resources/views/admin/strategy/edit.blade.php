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
        <form class="mws-form" action="/admin/strategy/{{ $strategy->id }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label" >标题名称</label>
&nbsp;&nbsp;&nbsp;&nbsp;<select  style="width:200px;" name="stitle" >
                            <option value="{{ $strategy->stitle }}" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $strategy->stitle }}</font></font></option>
                            <option value="" style="color: red;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">修改标题请选择以下标题......</font></font></option>
                            <option value="十佳旅游目的地" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">十佳旅游目的地</font></font></option>
                            <option value="十大海外城市" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">十大海外城市</font></font></option>
                            <option value="十大度假游目的地" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">十大度假游目的地</font></font></option>
                            <option value="十佳海岛游目的地" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">十佳海岛游目的地</font></font></option>
                            <option value="最具影响力景区" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最具影响力景区</font></font></option>
                            <option value="全球卓越主题公园" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">全球卓越主题公园</font></font></option>
                            <option value="最佳人文景区" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最佳人文景区</font></font></option>
                        </select>
                </div>


                <div class="mws-form-row dd1" style="width:360px;float: left;" >
                    <label class="mws-form-label" >目的地</label>
                    <div class="mws-form-item" style="width:300px;">
                        <input type="text" class="medium" name="smdd" value="{{ $strategy->smdd }}">
                    </div>
                </div>
                
                 <div style="line-height:65px;margin-left:450px;">
                   <label style="font-size: 10px;">评分值:</label>
                      <input type="text" name="pdcaas" value="{{ $strategy->pdcaas }}" style="width:100px;">
                   <label style="color: #ccc">请输入0~100之间的评分值，小数点保留一位</label>
                 </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">超链接网址</label>
                    <div class="mws-form-item" style="width:700px;">
                        <input type="text" class="medium" name="shttps" value="{{ $strategy->shttps }}">
                    </div>
                </div>
                <div class="mws-form-row">
                  <label class="mws-form-label">景色图片</label>
                  <div class="mws-form-item" style="width:670px;">
                      <input type="file" name="spice"  class="medium"  placeholder="{{ old('spice') }}" value="{{ $strategy->spice }}">
                      <div style="width:150px;height:150px;" >
                        <img src="{{ $strategy->spice }}" alt="" >
                      </div>
                  </div>
    
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label" >最佳简介</label>
                    <div class="mws-form-item">
                        <script id="container" name="sbodys" type="text/plain" style="width:87%;height:100px;">

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
            ['fullscreen', 'source', 'undo', 'redo', 'cleardoc'],
            
        ]
    });
</script>
     

@endsection