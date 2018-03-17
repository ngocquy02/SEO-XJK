<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="container py-5">
	    <div class="row">
	        <div class="col-md-12">
	            <h2 class="text-center text-white mb-4">Bootstrap 4 Login Form</h2>
	            <div class="row">
	                <div class="col-md-6 mx-auto">

	                    <!-- form card login -->
	                    <div class="card rounded-0">
	                        <div class="card-header">
	                            <h3 class="mb-0 text-center">Đăng nhập</h3>
	                        </div>
	                        <div class="card-body">

	                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="{{route('post-login-user')}}">
	                            	{{ csrf_field() }}
	                                <div class="form-group">
	                                    <label for="uname1">Email</label>
	                                    <input type="email" class="form-control form-control-lg rounded-0" name="email" id="uname1" required="">
	                                    <div class="invalid-feedback">Oops, you missed this one.</div>
	                                </div>
	                                <div class="form-group">
	                                    <label>Mật khẩu</label>
	                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password" name="password">
	                                    <div class="invalid-feedback">Enter your password too!</div>
	                                </div>
	                     
	                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Đăng nhập</button>
	                            </form>
	                        </div>
	                        <!--/card-block-->
	                    </div>
	                    <!-- /form card login -->

	                </div>


	            </div>
	            <!--/row-->

	        </div>
	        <!--/col-->
	    </div>
	    <!--/row-->
	</div>
	<script type="text/javascript" src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>