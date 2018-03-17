@extends('app')
@section('sidebar')
@include('admin.sidebar')
@endsection

@section('main')  
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1>Danh sách cộng tác viên</h1>
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
        <h5 class="modal-title" id="project">Thêm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên">
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



    <table id="table_id" class="display">
      <thead>
        <tr>
          <th>Tên</th>
          <th>Email</th>
          <th>Quyền</th>
          <th>Trạng thái</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Row 1 Data 1</td>
          <td>Row 1 Data 2</td>
          <td>Row 1 Data 2</td>
          <td>
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
          </td>
          <td>
            <a type="button" class="btn btn-danger btn-sm white" href="">
              <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>

  </div>
  <!-- /table -->	
  @endsection


  
  @push('scripts')
  <script type="text/javascript">
   $(document).ready( function () {
    $('#table_id').DataTable({
      select: {
        items: 'cells',
        info: false
      },

      ordering:  true,
      "language": {
        "search":"Tìm kiếm",
        "lengthMenu": "Hiển thị  _MENU_ bài viết",
        // "next": "Tiếp theo",
        // "previous": "Hiển thị  _MENU_ bài viết",
        "zeroRecords": "Không có dữ liệu",
        "info": "Trang _PAGE_ của _PAGES_",
        "infoEmpty": "No records available",
        "infoFiltered": "(filtered from _MAX_ total records)"
      },
    });
  } );  
</script>
@endpush


