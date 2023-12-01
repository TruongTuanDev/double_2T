<nav class="navbar-default navbar-static-side" role="navigation">
  <div class="sidebar-collapse">
      <ul class="nav metismenu" id="side-menu">
          <li class="nav-header">
              <div class="dropdown profile-element"> <span>
                      <img alt="image" style="border-radius:50%;height:80px;width:80px;margin:auto;" class="img-circle" src="{{}}" />
                       </span>
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{}}</strong>
                       </span> <span class="text-muted text-xs block">{}<b class="caret"></b></span> </span> </a>
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
              <a><i class="fa fa-th-large"></i> <span class="nav-label">Quản lý người dùng</span> <span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li><a href="{{ route('user.index')}}">Quản lý người dùng</a></li>
                  <li><a href="">Quản lý nhóm người dùng</a></li>
              </ul>
          </li>
         <li class="">
            <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Quản lý banner</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ route('banner.index')}}">Danh sách banner</a></li>
                <li><a href="{{ route('banner.store')}}">Thêm banner</a></li>
            </ul>
        </li>
        <li class="">
            <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Quản lý công việc</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{{ route('post.index')}}">Danh sách công việc</a></li>
                <li><a href="{{ route('post.add')}}">Thêm công việc</a></li>
            </ul>
        </li>
      </ul>
  </div>
</nav>
