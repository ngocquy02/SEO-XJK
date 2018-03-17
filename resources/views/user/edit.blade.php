@extends('app')
@section('sidebar')
	@include('user.sidebar')
@endsection

@section('main')  
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1>Viết bài</h1>
    <a type="button" class="btn btn-primary white">
       <i class="fa fa-floppy-o" aria-hidden="true"></i>
       Lưu
    </a>    
</div>
<div class="row">
    <div class="col-md-12" style="margin-bottom: 20px">
        <label>Deadline</label>
        <div class="progress skill-bar">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="20">
                <span class="skill"><i class="val">20%</i></span>
            </div>
        </div>
    </div>
   
    <div class="col-md-8">
        <label>Tên bài viết</label>
        <input type="text" class="form-control input-xjk" disabled>
        <label for="content">Nội dung bài viết</label>
        <textarea name="content" id="content"></textarea>
    </div>
    <div class="col-md-4">
        <div class="alert alert-success">
		  <strong>Thông báo</strong>
		  Sửa lại ......
		</div>  
        <div class="alert alert-info text-center">
            <code>SEO BÀI VIẾT</code>
        </div> 
        <div class="">
            <label>Tiêu đề</label>
            <input type="text" class="form-control input-xjk">
            <label for="content">Mô tả</label>
            <textarea class="form-control" rows="5"" name="content" id="content"></textarea>
        </div>  
        </div> 
    </div>
</div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content');
        $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
        )
    </script>
@endpush