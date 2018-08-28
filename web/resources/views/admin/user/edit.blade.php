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
        	<span>管理员修改</span>
        </div>
        <div class="mws-panel-body no-padding">
        	<form class="mws-form" action="/admin/user/{{ $data['id'] }}" method="post">
                {{ csrf_field() }}
        		{{ method_field('PUT') }}
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">帐号</label>
        				<div class="mws-form-item">
        					<input type="text" value="{{ $data['nickname'] }}" name="nickname" class="small">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">手机</label>
        				<div class="mws-form-item">
        					<input type="text" name="tel" value="{{ $data['tel'] }}" class="small">
        				</div>
        			</div>
        			<div class="mws-form-row">
        				<label class="mws-form-label">权限</label>
        				<div class="mws-form-item clearfix">
        					<ul class="mws-form-list inline">
        						<li><input type="radio" @if($data['power'] == 1) checked @endif name="power" value="1"> <label>超级管理员</label></li>
        						<li><input type="radio" @if($data['power'] == 2) checked @endif name="power" value="2"> <label>普通管理员</label></li>
        					</ul>
        				</div>
        			</div>
        		<div class="mws-button-row">
        			<input type="submit" value="确定" class="btn btn-info">
        			<input type="reset" value="重置" class="btn btn-success">
        		</div>
        	</form>
        </div>    	
    </div>

@endsection