<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ access()->user()->picture }}" class="img-circle" alt="User Image" />
            </div><!--pull-left-->
            <div class="pull-left info">
                <p>{{ access()->user()->full_name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('strings.backend.general.status.online') }}</a>
            </div><!--pull-left-->
        </div><!--user-panel-->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="{{ active_class(Active::checkUriPattern('admin/dashboard')) }}">
                <a href="{{ route('admin.product') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>sản phẩm</span>
                </a>
            </li>

            <li class="{{ active_class(Active::checkUriPattern('admin/dashboard')) }}">
                <a href="{{ route('admin.document') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>tài liệu</span>
                </a>
            </li>

            <li class="{{ active_class(Active::checkUriPattern('admin/dashboard')) }}">
                <a href="{{ route('admin.order') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>đặt hàng</span>
                </a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside>