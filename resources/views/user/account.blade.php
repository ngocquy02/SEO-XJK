@extends('app')
@section('sidebar')
	@include('user.sidebar')
@endsection

@section('main')  
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1>Thông tin tài khoản</h1>
		<a type="button" class="btn btn-primary white">
      		<i class="fa fa-floppy-o" aria-hidden="true"></i>
       		Lưu
    	</a>	
	</div>
	<div class="row">
		<div class="col-md-6">
			<label>Tên</label>
        	<input type="text" class="form-control input-xjk">
        	<label>Email</label>
        	<input type="email" class="form-control input-xjk">
        	<label>Số điện thoại</label>
        	<input type="phone" class="form-control input-xjk">
        	<label>Mật Khẩu</label>
        	<input type="phone" class="form-control input-xjk">
        	<label>Xác nhận mật khẩu</label>
        	<input type="phone" class="form-control input-xjk">
		</div>
	</div>
	  
          <!-- /table -->
@endsection