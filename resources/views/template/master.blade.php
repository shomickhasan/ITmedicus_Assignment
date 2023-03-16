<!DOCTYPE html>
<html lang="en">
<head>
 {{-- =================css============= --}}
    @include('includes.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 {{-- =====================preloader=========== --}}
    {{-- @include('includes.preloader') --}}

  {{--=======================navbar============= --}}
    @include('includes.nav')

  {{-- --=========================sidebar============ --}}
    @include('includes.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     @yield('main-contant')
  </div>
  <!-- /.content-wrapper -->
  {{-- ========================footer========== --}}
    @include('includes.footer')


</div>
<!-- ./wrapper -->

{{-- ===================script=================== --}}
  @include('includes.script')
</body>
</html>
