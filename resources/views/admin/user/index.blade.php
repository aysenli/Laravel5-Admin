@extends('admin')

@section('content')

      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              管理员列表
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-user"></i> 姓名</th>
                                  <th class="hidden-phone"><i class="fa fa-envelope"></i> 邮箱</th>
                                  <th><i class="fa fa-bookmark"></i> 角色</th>
                                  <th><i class=" fa fa-edit"></i> 状态</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach ($admins as $admin)
                              <tr>
                                  <td>
                                      {{ $admin->name }}
                                  </td>
                                  <td class="hidden-phone">{{ $admin->email }}</td>
                                  <td></td>
                                  <td>@if ($admin->status == 1)
                                  	 <span class="label label-success label-mini">正常</span>
                                  	 @else
                                  	 <span class="label label-danger label-mini">禁用</span></td>
                                  	 @endif
                                  </td>
                                  <td>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                               @endforeach

                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('backend/js/jquery.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/respond.min.js') }}" ></script>

    <!--common script for all pages-->
    <script src="{{ asset('backend/js/common-scripts.js') }}"></script>      
@endsection