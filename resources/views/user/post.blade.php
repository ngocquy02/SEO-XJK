@extends('app')
@section('sidebar')
	@include('user.sidebar')
@endsection

@section('main')  
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
			<h1>Danh sách bài viết</h1>	
	</div>
	        <!-- Table -->
	  <div class="col-md-12">
	      <table id="table_id" class="display">
            <thead>
              <tr>
                <th>Tên bài viết</th>
                <th>Ngày giao</th>
                <th>Ngày hoàn thành</th>
                <th>Ngày đăng</th>
                <th>Trạng thái</th>
                <th>Người nhận</th>
                <th>Người giao</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
                <td>
            
                  <a type="button" class="btn btn-danger btn-sm white" href="{{route('user-post-editid',['id'=>1])}}">
                  <i class="fa fa-pencil" aria-hidden="true"></i></a>
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