<ul class="nav flex-column navbar-xjk">
     <li class="nav-item">
        <a href="{{route('user-index')}}" class="nav-link">
          <i class="fa fa-tachometer" aria-hidden="true"></i>
            Tổng quan
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('user-post-end')}}" class="nav-link">
          <i class="fa fa-check-circle" aria-hidden="true"></i>
            Bài viết hoàn thành
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('user-post-edit')}}" class="nav-link">
          <i class="fa fa-pencil" aria-hidden="true"></i>
            Bài viết cần sửa<a href=""></a>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('user-post')}}" class="nav-link">
          <i class="fa fa-share" aria-hidden="true"></i>
            Bài viết được giao<a href=""></a>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('user-post-pending')}}" class="nav-link">
          <i class="fa fa-spinner" aria-hidden="true"></i>
            Bài viết chờ duyệt<a href=""></a>
        </a>
    </li>
    <li class="nav-item">
       <a class="nav-link" href="{{route('account')}}">
            <i class="fa fa-user" aria-hidden="true"></i>
            Thông tin cá nhân
        </a>
    </li>
</ul>

