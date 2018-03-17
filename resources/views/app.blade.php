<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.dataTables.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
</head>
<body>
	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">XJK CONTROL</a>
      <input class="form-control form-control-dark w-100" placeholder="Search" aria-label="Search" type="text">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          @if(Auth::guard('web'))
            <a class="nav-link" href="">Đăng xuất</a>
          @else

          @endif
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
    	<div class="row">
    		<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    			<div class="sidebar-sticky">

    				@yield('sidebar')		
    			</div>
    		</nav>
    		<main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" role="main">
    			@yield('main')
          @yield('model')
    		</main>	
    	</div>
    </div>
	
	<script type="text/javascript" src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
   @stack('scripts')
</body>
</html>