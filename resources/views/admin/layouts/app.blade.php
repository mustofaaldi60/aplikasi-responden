@extends('admin.partials.header')

<!-- Site wrapper -->
<div class="wrapper">
    @include('admin.partials.navbar')

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
        <!-- Brand Logo -->
        <a href="AdminLTE/index3.html" class="brand-link">
            {{-- <img src="AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
            <span class="brand-text font-weight-light text-dark">{{ env('APP_NAME') }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                {{-- <div class="image">
            <img src="AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div> --}}
                <div class="info">
                    <small class="h4 text-white-50 text-capitalize">{{ auth()->user()->name }}</small>
                </div>
            </div>

            @include('admin.partials.sidebar')
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @yield('breadcrumb')

        @yield('main')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('admin.partials.watermark')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@extends('admin.partials.footer')
