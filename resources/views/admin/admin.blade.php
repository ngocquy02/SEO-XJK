@extends('app')
@section('sidebar')
	@include('admin.sidebar')
@endsection

@section('main')  
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1>Danh sách quản trị viên</h1>
    <a type="button" class="btn btn-primary white" data-toggle="modal" data-target="#project">
       <i class="fa fa-plus" aria-hidden="true"></i>
       Thêm
    </a>	
</div>
<!-- Model box projeact -->
<!-- Modal -->
<div class="modal fade" id="project" tabindex="-1" role="dialog" aria-labelledby="project" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="project">Thêm quản trị viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên dự án">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="phone" class="form-control" id="phone">
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" class="form-control" id="password">
          </div>
          <div class="form-group">
            <label for="datefinish">Xác nhật khẩu</label>
            <input type="password" class="form-control" id="datefinish">
          </div>
        </form>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Thêm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div> 

<!-- /Model box project -->
<!-- Table -->

<div class="col-md-12">
    <table class="table">
        <thead class="thead-dark">
        <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col">Tên</th>
          <th scope="col">Email</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Quyền</th>
          <th scope="col">Trạng thái</th>
          <th scope="col">Hành động</th>
        </tr>
      </thead>
      <tbody>
        <tr class="text-center">
          <th scope="row">1</th>
          <td>SEO</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>
          	<label class="switch">
			  <input type="checkbox">
			  <span class="slider round"></span>
			</label>
          </td>
          <td class="text-center">
                <a type="button" class="btn btn-primary btn-sm white">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a type="button" class="btn btn-danger btn-sm white">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
          </td>
        </tr>
        <tr class="text-center">
          <th scope="row">1</th>
          <td>SEO</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>
          	<label class="switch">
			  <input type="checkbox">
			  <span class="slider round"></span>
			</label>
          </td>
          <td class="text-center">
                <a type="button" class="btn btn-primary btn-sm white">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a type="button" class="btn btn-danger btn-sm white">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
          </td>
        </tr>
      </tbody>
    </table>
   <!-- Pagination -->
    <center>
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul> 
    </center>
    <!-- /Pagination -->

</div>
<!-- /table -->	
@endsection


