<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('font-end/admin') }}/index3.html" class="brand-link">
        <img src="{{ asset('font-end/admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Tên cửa hàng</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('font-end/admin') }}/dist/img/user2-160x160.jpg"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ asset('font-end/admin') }}/#" class="d-block">Tên chủ cửa hàng</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('quan-tri') }}" class="nav-link
                    @if (Request::path() == 'quan-tri')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Bảng điều khiển</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('san-pham.index') }}" class="nav-link
                    @if (Request::segment(2) == 'san-pham')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Sản phẩm</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('thuong-hieu.index') }}" class="nav-link
                    @if (Request::segment(2) == 'thuong-hieu')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Thương hiệu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('lo-san-pham.index') }}" class="nav-link
                    @if (Request::segment(2) == 'lo-san-pham')
                        active
                    @endif
                    ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Lô sản phẩm</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
