@extends('app')
@section('sidebar')
	@include('admin.sidebar')
@endsection

@section('main')  
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1>Danh sách bài viết - Tên dự án -  Keyword</h1>
		<a type="button" class="btn btn-success white" data-toggle="modal" data-target="#giao">
		<i class="fa fa-share" aria-hidden="true"></i>
		  Giao bài viết
		</a>

    <a type="button" class="btn btn-primary white" data-toggle="modal" data-target="#post">
  <i class="fa fa-plus" aria-hidden="true"></i>
  Thêm bài viết
  </a>
	</div>
        <!-- Table -->
  <div class="col-md-12">
    <label>Deadline</label>
    <div class="progress skill-bar" style="margin-bottom: 20px">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="20">
            <span class="skill"> <i class="val">20%</i></span>
        </div>
    </div>



    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-chart" data-toggle="tab" href="#chart" role="tab" aria-controls="chart" aria-selected="true">Biểu đồ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="home-post" data-toggle="tab" href="#home" role="tab" aria-controls="post" aria-selected="false">Bài viết</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        
         <div class="tab-pane fade show active" id="chart" role="tabpanel" aria-labelledby="home-chart">
           <canvas id="myChart"></canvas>
         </div>
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-post" style="margin-top: 20px">
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
                          <a type="button" class="btn btn-success btn-sm white" data-toggle="modal" data-target="#giao">
                          <i class="fa fa-share" aria-hidden="true"></i></a>
                          <a type="button" class="btn btn-danger btn-sm white" href="{{route('admin-edit')}}">
                          <i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
         </div>

    </div>
      

  </div>
  <!-- /table -->

  <!-- Model box projeact -->
    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="edit">Thông báo chỉnh sửa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <label for="message">Nội dung tin nhắn</label>
               	<textarea class="form-control" rows="5" id="message"></textarea>
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

    <div class="modal fade" id="giao" tabindex="-1" role="dialog" aria-labelledby="giao" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="giao">Giao bài viết cho cộng tác viên</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <label for="message">Cộng tác viên</label>
                <select class="form-control">
                    <option>
                      
                    </option>
                </select>
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

     <!-- Modal -->
                <div class="modal fade" id="post" tabindex="-1" role="dialog" aria-labelledby="post" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="post">Thêm dự án</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="">
                          <div class="form-group">
                            <label for="name">Tên bài viết</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập tên dự án">
                          </div>
                          <div class="form-group">
                            <label for="datestart">Ngày bắt đầu</label>
                            <input type="date" class="form-control" id="datestart">
                          </div>
                          <div class="form-group">
                            <label for="datefinish">Ngày hoàn thành</label>
                            <input type="date" class="form-control" id="datefinish">
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
@endsection
@push('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <script type="text/javascript">

    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["20/10/2018", "21/10/2018", "22/10/2018", "23/10/2018", "24/10/2018", "25/10/2018", "26/10/2018"],
            datasets: [{
                label: "Thứ hạng",
                // backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, -5, 2, 20, 30, 45],
            }]
        },

        // Configuration options go here
        options: {}
    });



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

