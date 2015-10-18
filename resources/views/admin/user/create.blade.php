@extends('admin')

@section('content')

 <section id="main-content">
    <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        添加管理员
                    </header>
                    <div class="panel-body">
                        <div class=" form">
                            <form action="" method="get" id="commentForm" class="cmxform form-horizontal tasi-form" novalidate="novalidate">
                                <div class="form-group ">
                                    <label class="control-label col-lg-2" for="cname">姓名 (required)</label>
                                    <div class="col-lg-10">
                                        <input type="text" required="" minlength="2" name="name" id="cname" class=" form-control">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2" for="cemail">邮箱 (required)</label>
                                    <div class="col-lg-10">
                                        <input type="email" required="" name="email" id="cemail" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2" for="curl">URL (optional)</label>
                                    <div class="col-lg-10">
                                        
                                    </div>

                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2" for="ccomment">Your Comment (required)</label>
                                    <div class="col-lg-10">
                                        <textarea required="" name="comment" id="ccomment" class="form-control "></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-danger">Save</button>
                                        <button type="button" class="btn btn-default">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>
            </div>
        </div>

        <!-- page end-->
    </section>
</section>

    <script src="{{ asset('backend/js/jquery.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.nicescroll.js') }}" type="text/javascript"></script>

    <script src="{{ asset('backend/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>

  <!--custom switch-->
  <script src="{{ asset('backend/js/bootstrap-switch.js') }}"></script>
  <!--custom tagsinput-->
  <script src="{{ asset('backend/js/jquery.tagsinput.js') }}"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="{{ asset('backend/js/ga.js') }}"></script>

  <script type="text/javascript" src="{{ asset('backend/assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/assets/bootstrap-daterangepicker/date.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/assets/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('backend/assets/ckeditor/ckeditor.js') }}"></script>

  <script type="text/javascript" src="{{ asset('backend/assets/bootstrap-inputmask/bootstrap-inputmask.min.js') }}"></script>
  <script src="{{ asset('backend/js/respond.min.js') }}" ></script>


  <!--common script for all pages-->
    <script src="{{ asset('backend/js/common-scripts.js') }}"></script>

  <!--script for this page-->
  <script src="{{ asset('backend/js/form-component.js') }}"></script>
@endsection