<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="{!! url('/admin') !!}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Banner<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.banner.getList') !!}"><img src="{!! url('public/trangchu/images/addressbook.ico') !!}" class="icon" alt="">&nbsp;List Banner</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.banner.getAdd') !!}"><img src="{!! url('public/trangchu/images/add1.ico') !!}" class="icon" alt="">&nbsp;Add Banner</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.cate.getList') !!}"><img src="{!! url('public/trangchu/images/addressbook.ico') !!}" class="icon" alt="">&nbsp;List Category</a>
                                </li>
                                <li>
                                    <a href="{!!route('admin.cate.getAdd')!!}"><img src="{!! url('public/trangchu/images/add1.ico') !!}" class="icon" alt="">&nbsp;Add Category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.product.getlist') !!}"><img src="{!! url('public/trangchu/images/addressbook.ico') !!}" class="icon" alt="">&nbsp;List Product</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.product.getAdd') !!}"><img src="{!! url('public/trangchu/images/add1.ico') !!}" class="icon" alt="">&nbsp;Add Product</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.user.getList') !!}"><img src="{!! url('public/trangchu/images/addressbook.ico') !!}" class="icon" alt="">&nbsp;List User</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.user.getAdd') !!}"><img src="{!! url('public/trangchu/images/add1.ico') !!}" class="icon" alt="">&nbsp;Add User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                                                <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Contact<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.contact.getList') !!}"><img src="{!! url('public/trangchu/images/addressbook.ico') !!}" class="icon" alt="">&nbsp;List Contact</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->