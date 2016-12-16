<!-- Main navbar -->
<div class="navbar navbar-inverse">
  <div class="navbar-header">
    <a href="#" class="media-left sidebar-control sidebar-main-toggle hidden-xs btn-lg">
      <i class="icon-paragraph-justify3"></i>
    </a>
    <ul class="nav navbar-nav visible-xs-block">
      <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
      <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
    </ul>
  </div>

  <div class="navbar-collapse collapse" id="navbar-mobile">

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown dropdown-user">
        <a class="dropdown-toggle" data-toggle="dropdown">
          <img src="{{url('assets/images/placeholder.jpg')}}" alt="">
          <span class="glyphicon glyphicon-user"> {{Auth::user()->username}}</span>
          <i class="caret"></i>
        </a>

        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="{{url('es/admin/profile')}}"><i class="icon-user-plus"></i> My profile</a></li>
          <li class="divider"></li>
          <li><a href="{{url('es/admin/setting')}}"><i class="icon-cog5"></i> Account settings</a></li>
          <li><a href="{{url('es/admin/logout')}}"><i class="icon-switch2"></i> Logout</a></li>
        </ul>
      </li>

    </ul>
  </div>
</div>
<!-- /main navbar -->
