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


<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>{{ $title }}</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/link" method="post">
            {{ csrf_field() }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label" >网站名称</label>
                    <div class="mws-form-item">
                        <input type="text" class="medium" name="lname" value="{{ old('lname') }}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label" >网址</label>
                    <div class="mws-form-item">
                        <input type="text" class="medium" name="lurl" value="{{ old('lurl') }}">
                    </div>
                </div>
               
                <div class="mws-form-row">
                    <label class="mws-form-label" >网站简介</label>
                    <div class="mws-form-item">
                        <input type="text" class="medium" name="lbody" value="{{ old('lbody') }}">
                    </div>
                </div>
            <div class="mws-button-row">
                <input type="submit" value="添加" class="btn btn-success">
                <input type="reset" value="取消" class="btn btn-info">
            </div>
        </form>
    </div>      
</div>
@endsection