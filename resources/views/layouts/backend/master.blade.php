<!DOCTYPE html>
<html>
<head>
   @include('layouts.backend.partials.head')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
@include('layouts.backend.partials.header')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('layouts.backend.partials.leftSidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.backend.partials.breadcrumb')
    <!-- Main content -->
        <section class="content">

            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@include('layouts.backend.partials.footer')

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('layouts.backend.partials.scripts')
</body>
</html>
