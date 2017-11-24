<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
      <!-- Bootstrap core CSS-->
    <link href="{{ asset('admin_source/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Custom fonts for this template-->
    <link href="{{ asset('admin_source/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
      <!-- Page level plugin CSS-->
    <link href="{{ asset('admin_source/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
      <!-- Custom styles for this template-->
    <link href="{{ asset('admin_source/css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_source/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_source/css/custom.css') }}" rel="stylesheet">
    @yield('head_css')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    
    <!-- Navigation-->
    @include('admin.layouts.sidebar')
    <!-- End Navigation-->
    <div class="content-wrapper">
    <!--content-->
    @yield('content')
    <!--End content-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!--before_footer_script-->
    @yield('before_footer_script')
    <!--End before_footer_script-->
    
    <script src="{{ asset('admin_source/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_source/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin_source/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('admin_source/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_source/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin_source/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin_source/js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('admin_source/js/sb-admin-datatables.min.js') }}"></script>
    <script src="{{ asset('admin_source/js/sb-admin-charts.min.js') }}"></script>
    <script src="{{ asset('admin_source/js/select2.min.js') }}"></script>
    <!--footer_script-->
    @yield('footer_script')
    <script>
        $('.delete').click(function(){
            var result = confirm("Do you want to delete?");
            if (result) {
                return true;
            }else{
                return false;
            }
        });
    </script>
    <!--End footer_script-->
  </div>
</body>

</html>
