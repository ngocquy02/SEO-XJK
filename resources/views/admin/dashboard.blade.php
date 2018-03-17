@extends('app')
@section('sidebar')
	@include('admin.sidebar')
@endsection

@section('main')  
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
			<h1>Tổng quan</h1>	
	</div>
	 <div class="col-md-12">
    	<div class="row">
    		<div class="col-md-3">
    			<div class="panel panel-primary dasboard" style="padding: 3px;background-color: red">
    				
    			</div>	
    		</div>
    		<div class="col-md-3">
    			<div class="panel panel-primary dasboard"  style="padding: 3px;background-color: red">
    				
    			</div>	
    		</div>
    		<div class="col-md-3">
    			<div class="panel panel-primary dasboard"  style="padding: 3px;background-color: red">
    				
    			</div>	
    		</div>
    		<div class="col-md-3">
    			<div class="panel panel-primary dasboard"  style="padding: 3px;background-color: red">
    				
    			</div>	
    		</div>
    	</div>    
    </div>
@endsection