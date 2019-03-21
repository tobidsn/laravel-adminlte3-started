<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('magic/home') }}" class="brand-link">
        <img src="/img/logo.png" alt="Laravel" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Laravel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/img/avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> {{auth()->user()->name!=null ? auth()->user()->name : "Administrator"}} </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{!! url('magic/home') !!}" class="nav-link {!! classActiveSegment(2, 'home') !!}">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('widget') }}" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {!! classActivePath(1,'chart') !!}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-pie-chart"></i>
                        <p>
                            Charts
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('chartv1') }}" class="nav-link {!! classActiveSegment(2, 'v1') !!}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>ChartJS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('chartv2') }}" class="nav-link {!! classActiveSegment(2, 'v2') !!}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Flot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('chartv3') }}" class="nav-link {!! classActiveSegment(2, 'v3') !!}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Inline</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {!! classActivePath(1,'ui') !!}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-tree"></i>
                        <p>
                            UI Elements
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('general') }}" class="nav-link {!! classActiveSegment(2, 'general') !!}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>General</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('icons') }}" class="nav-link {!! classActiveSegment(2, 'icons') !!}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('buttons') }}" class="nav-link {!! classActiveSegment(2, 'buttons') !!}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Buttons</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sliders') }}" class="nav-link {!! classActiveSegment(2, 'sliders') !!}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Sliders</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {!! classActivePath(1,'form') !!}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                            Forms
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('fgeneral') }}" class="nav-link {!! classActiveSegment(2, 'fgeneral') !!}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>General Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('fadvanced') }}" class="nav-link {!! classActiveSegment(2, 'fadvanced') !!}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Advanced Elements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('feditors') }}" class="nav-link {!! classActiveSegment(2, 'feditors') !!}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Editors</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            Tables
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Data Tables</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-header">ADMIN NAVIGATION</li>
                <li class="nav-item">
                    <a href="{{ url('magic/users') }}" class="nav-link {!! classActiveSegment(2, 'users') !!}">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Administrator
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('magic/settings') }}" class="nav-link {!! classActiveSegment(2, 'settings') !!}">
                        <i class="nav-icon fa fa-wrench"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('magic/terms_policy') }}" class="nav-link {!! classActiveSegment(2, 'terms_policy') !!}">
                        <i class="nav-icon fa fa-exclamation-triangle"></i>
                        <p>
                            Term &#38; Condition
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>