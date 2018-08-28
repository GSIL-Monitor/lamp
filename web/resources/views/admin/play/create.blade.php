@extends('admin.layout.index')
<!-- 在占位符中填充内容 -->
@section('container')

@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 <div class="mws-panel">
 	<!-- 加载编辑器的容器 -->
   
    <!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
    <div class="mws-panel-header">
        <span><i class="icon-calculate"></i>娱乐推荐</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/play" method="post" enctype="multipart/form-data">
        	{{ csrf_field() }}
            <div class="mws-form-inline">
            	<div class="mws-form-row">
                	<label class="mws-form-label">标题</label>
                	<div class="mws-form-item">
                    	<input type="text" class="large" name="title">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">地址</label>
                    <div class="mws-form-item">
                        <input type="text" class="large" name="address">
                    </div>
                </div>
            	<div class="mws-form-row">
                	<label class="mws-form-label">主题图片</label>
                	<div class="mws-form-item">
                    	<input type="file" name="picture">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">内容</label>
                    <div class="mws-form-item">
                        <script id="container" name="content" type="text/plain">
					        
					    </script>
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