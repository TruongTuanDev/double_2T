@php
if (Auth::id() != null) {
    $profile=Auth()->user();
}
@endphp
<nav class="navbar-default navbar-static-side" role="navigation">
  <div class="sidebar-collapse">
      <ul class="nav metismenu" id="side-menu">
          <li class="nav-header">
              <div class="dropdown profile-element"> <span>
                      <img alt="image" style="border-radius:50%;height:80px;width:80px;margin:auto;" class="img-circle" src="{{$profile->photo}}" />
                       </span>
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{$profile->name}}</strong>
                       </span> <span class="text-muted text-xs block">{{$profile->role}}<b class="caret"></b></span> </span> </a>
                  <ul class="dropdown-menu animated fadeInRight m-t-xs">
                      <li><a href="{{route('admin-profile')}}">Trang cá nhân</a></li>
                      <li><a href="{{route('change.password.form')}}">Thay đổi mật khẩu</a></li>
                      <li><a href="{{route('settings')}}">Cài đặt</a></li>
                      <li><a href="{{route('auth.logout')}}">Đăng xuất</a></li>
                      <li class="divider"></li>
                  </ul>
              </div>
              <div class="logo-element">
                  IN+
              </div>
          </li>
          <li class="active">
            <a><i class="fa fa-th-large"></i> <span class="nav-label">Quản lý chuyên ngành</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ route('major.index')}}">Danh sách chuyên ngành</a></li>
                <li><a href="{{ route('major.create')}}">Thêm chuyên ngành</a></li>
            </ul>
        </li>
          <li class="">
            <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Quản lý nhà tuyển dụng</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ route('employer.index')}}">Quản lý nhà tuyển dụng</a></li>
            </ul>
         </li>
         <li class="">
            <a href="{{ route('banner.index')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Quản lý banner</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ route('banner.index')}}">Danh sách banner</a></li>
                <li><a href="{{ route('banner.store')}}">Thêm banner</a></li>
            </ul>
        </li>
         <li class="">
            <a href="{{ route('posts.list') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Quản lý công việc</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">

                <li><a href="{{route('posts.active')}}">Danh sách công việc đã duyệt</a></li>
                <li><a href="{{route('posts.inactive')}}">Danh sách công việc chờ duyệt</a></li>
            </ul>
        </li>
        <li class="">
            <a href="{{ route('news.index') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Quản lý tin tức</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ route('news.active') }}">Danh sách đã duyệt</a></li>
                <li><a href="{{ route('news.inactive') }}">Danh sách tin tức chờ duyệt</a></li>
            </ul>
        </li>
      </ul>
  </div>
</nav>
