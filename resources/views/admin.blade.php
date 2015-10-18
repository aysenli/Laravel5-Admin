<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="leeyong">
    <meta name="keyword" content="Laravel5">
    <link rel="shortcut icon" href="{{ asset('backend/img/favicon.png') }}">

    <title>Laravel5 后台管理平台</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('backend/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  
    <!-- Custom styles for this template -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ asset('backend/js/html5shiv.js') }}"></script>
      <script src="{{ asset('backend/js/respond.min.js') }}"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo">Laravel5<span>后台管理平台</span></a>
            <!--logo end-->

            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{ asset('backend/img/avatar1_small.jpg') }}">
                            <span class="username">Jhon Doue</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-suitcase"></i>资料</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> 设置</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> 通知</a></li>
                            <li><a href="login.html"><i class="fa fa-key"></i> 退出</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>控制台</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>管理员权限</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ URL('admin/user') }}">管理员列表</a></li>
                          <li><a  href="{{ URL('admin/user') }}">角色管理</a></li>
                          <li><a  href="{{ URL('admin/user') }}">节点管理</a></li>
                          <li><a  href="{{ URL('admin/user/create') }}">添加管理员</a></li>
                          <li><a  href="{{ URL('admin/user') }}">添加角色</a></li>
                      </ul>
                  </li>


                  <!--multi level menu start-->
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>模型管理</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="javascript:;">模型列表</a></li>
                          <li><a  href="javascript:;">添加模型</a></li>
                      </ul>
                  </li>
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      @yield('content')
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; FlatLab by VectorLab.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

  </body>
</html>
