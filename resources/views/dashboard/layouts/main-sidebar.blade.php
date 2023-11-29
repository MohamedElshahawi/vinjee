<aside class="app-side fixed" id="app-side">

    <!-- BEGIN .side-content -->
    <div class="side-content ">

        <!-- BEGIN .user actions -->
        <ul class="user-actions">
            <li class="quick-links">Quick Links</li>
            <li>
                <a href="tasks.html" data-toggle="tooltip" data-placement="top" title="Tasks">
                    <i class="icon-assignment_turned_in"></i>
                </a>
            </li>
            <li>
                <a href="chat.html" data-toggle="tooltip" data-placement="top" title="Chat">
                    <i class="icon-rate_review"></i>
                </a>
            </li>
            <li>
                <a href="index2.html" data-toggle="tooltip" data-placement="top" title="Analytics">
                    <i class="icon-chart-line"></i>
                </a>
            </li>
            <li>
                <a href="custom-tables.html" data-toggle="tooltip" data-placement="top" title="Custom Tables">
                    <i class="icon-border_all"></i>
                </a>
            </li>
            <li>
                <a href="cards.html" class="orange" data-toggle="tooltip" data-placement="top" title="Custom Cards">
                    <i class="icon-book3"></i>
                </a>
            </li>
            <li>
                <a href="secure.html" class="orange" data-toggle="tooltip" data-placement="top" title="Account Status">
                    <i class="icon-verified_user"></i>
                </a>
            </li>
        </ul>
        <!-- END .user actions -->

        <!-- Nav scroll start -->
        <div class="sidebarNavScroll">

            <!-- BEGIN .side-nav -->
            <nav class="side-nav">

                <!-- BEGIN: side-nav-content -->
                <ul class="unifyMenu" id="unifyMenu">
                    <li class="selected">
                        <a href="{{ route('dashboard') }}">
                            <span class="has-icon">
                                <i class="icon-laptop_windows"></i>
                            </span>
                            <span class="nav-title">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-view_day"></i>
                            </span>
                            <span class="nav-title">Users Management</span>
                            <span class="lbl"></span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="{{ route('users') }}">
                                    <span class="has-icon">
                                        <i class="icon-user"></i>
                                    </span>
                                    <span class="nav-title">Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('roles') }}">
                                    <span class="has-icon">
                                        <i class="icon-assignment"></i>
                                    </span>
                                    <span class="nav-title">Roles</span>
                                </a>
                            </li>


                        </ul>
                    </li>




                    <li>
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-view_day"></i>
                            </span>
                            <span class="nav-title">Categories Management</span>
                            <span class="lbl"></span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="{{ route('categories') }}">
                                    <span class="has-icon">
                                        <i class="icon-user"></i>
                                    </span>
                                    <span class="nav-title">Categories</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('subcategories') }}">
                                    <span class="has-icon">
                                        <i class="icon-assignment"></i>
                                    </span>
                                    <span class="nav-title">Sub Categories</span>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-view_day"></i>
                            </span>
                            <span class="nav-title">Products Management</span>
                            <span class="lbl"></span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="{{ route('products') }}">
                                    <span class="has-icon">
                                        <i class="icon-user"></i>
                                    </span>
                                    <span class="nav-title">All Products</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('sizes') }}">
                                    <span class="has-icon">
                                        <i class="icon-user"></i>
                                    </span>
                                    <span class="nav-title">Size</span>
                                </a>
                            </li>

                        </ul>
                    </li>





                    {{-- <li>
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-view_day"></i>
                            </span>
                            <span class="nav-title">Sizes</span>
                            <span class="lbl"></span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="{{ route('sizes') }}">
                                    <span class="has-icon">
                                        <i class="icon-user"></i>
                                    </span>
                                    <span class="nav-title">Size</span>
                                </a>
                            </li>

                        </ul>
                    </li>
 --}}


















                    <li>
                        <a href="{{ route('users') }}">
                            <span class="has-icon">
                                <i class="icon-assignment"></i>
                            </span>
                            <span class="nav-title">Setting</span>
                        </a>
                    </li>



                    {{-- <li>
                        <a href="{{ route('roles') }}">
                            <span class="has-icon">
                                <i class="icon-message2"></i>
                            </span>
                            <span class="nav-title">Roles</span>
                        </a>
                    </li>

                    <li>
                        <a href="chat.html">
                            <span class="has-icon">
                                <i class="icon-message2"></i>
                            </span>
                            <span class="nav-title">Category</span>
                        </a>
                    </li> --}}


                    {{-- <li>
                        <a href="chat.html">
                            <span class="has-icon">
                                <i class="icon-message2"></i>
                            </span>
                            <span class="nav-title">Chat</span>
                        </a>
                    </li>


                    <li>
                        <a href="chat.html">
                            <span class="has-icon">
                                <i class="icon-message2"></i>
                            </span>
                            <span class="nav-title">Chat</span>
                        </a>
                    </li> --}}


                </ul>
                <!-- END: side-nav-content -->

            </nav>
            <!-- END: .side-nav -->

            <!-- Sidebar widgets start -->
            {{-- <div class="sidebar-widget">
                <ul class="contributions">
                    <li>
                        <p>Elite Template <span>$9180</span></p>
                        <div class="progress sm mb-1">
                            <div class="progress-bar bg-orange" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li>
                        <p>New Project <span>$5179</span></p>
                        <div class="progress sm mb-1">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li>
                        <p>Balance <span>$12595</span></p>
                        <div class="progress sm mb-1">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                </ul>
            </div> --}}
            <!-- Sidebar widgets end -->

        </div>
        <!-- Nav scroll end -->

    </div>
    <!-- END: .side-content -->

</aside>
