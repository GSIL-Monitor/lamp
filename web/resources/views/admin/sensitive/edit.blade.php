@extends('admin.layout.index')

@section('container')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">内联表格</font></font></span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/admin/sensitive" method="post">
            {{ csrf_field() }}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">
    					<font style="vertical-align: inherit;">
    						<font style="vertical-align: inherit;">敏感词
    						</font>
    					</font>
    				</label>
    				<div class="mws-form-item">
    					<input type="text" name="word" value="{{ $data->word }}" class="medium">
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			<font style="vertical-align: inherit;">
    				<font style="vertical-align: inherit;">
    					<input type="submit" value="提交" class="btn btn-danger">
    				</font>
    			</font>
    			<input type="reset" value="Reset" class="btn ">
    		</div>
    	</form>
    </div>    	
</div>
@endsection