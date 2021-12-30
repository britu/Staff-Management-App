
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ url('/') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Department
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                            
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if(isset(auth()->user()->role->permission['name']['department']['can-add']))
                                        <a class="nav-link" href="{{ route('department.create') }}">Create Department</a>
                                    @endif
                                    @if(isset(auth()->user()->role->permission['name']['department']['can-view']))
                                        <a class="nav-link" href="{{ route('department.index') }}">View Department</a>
                                    @endif
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Role
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            @if(isset(auth()->user()->role->permission['name']['role']['can-add']))
                                                <a class="nav-link" href="{{ route('roles.create') }}">Create Role</a>
                                            @endif
                                            @if(isset(auth()->user()->role->permission['name']['role']['can-view']))
                                                <a class="nav-link" href="{{ route('roles.index') }}">View Role</a>
                                            @endif
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseUser" aria-expanded="false" aria-controls="pagesCollapseUser">
                                        User
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            @if(isset(auth()->user()->role->permission['name']['user']['can-list']))
                                                <a class="nav-link" href="{{route('users.index')}}">View User</a>
                                            @endif
                                            @if(isset(auth()->user()->role->permission['name']['user']['can-add']))
                                                <a class="nav-link" href="{{route('users.create')}}">Create User</a>
                                             @endif
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapsePermission" aria-expanded="false" aria-controls="pagesCollapsePermission">
                                        Permission
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapsePermission" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            @if(isset(auth()->user()->role->permission['name']['permission']['can-view']))
                                                <a class="nav-link" href="{{ route('permissions.index') }}">View Permission</a>
                                            @endif
                                            @if(isset(auth()->user()->role->permission['name']['permission']['can-add']))
                                                <a class="nav-link" href="{{ route('permissions.create') }}">Create Permission</a>
                                            @endif
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <!-- Staff Leave NavBar -->
                            <a class="nav-link collapsed" href="{{route('roles.index')}}" data-bs-toggle="collapse" data-bs-target="#pagesCollapseLeave" aria-expanded="false" aria-controls="pagesCollapseLeave">
                                <i class="fas fa-pencil-alt"></i> &nbsp Staff Leave
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="pagesCollapseLeave" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if(isset(auth()->user()->role->permission['name']['leave']['can-list']))
                                    <a class="nav-link" href="{{route('leaves.index')}}">Approve leave</a>
                                    @endif
                                    <a class="nav-link" href="{{route('leaves.create')}}">Create leave</a>
                                </nav>
                            </div>
                            <!-- Staff Notice Nav bar -->
                            <a class="nav-link collapsed" href="{{route('roles.index')}}" data-bs-toggle="collapse" data-bs-target="#pagesCollapseNotice" aria-expanded="false" aria-controls="pagesCollapseLeave">
                                <i class="fas fa-pencil-alt"></i> &nbsp Staff Notice
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="pagesCollapseNotice" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @if(isset(auth()->user()->role->permission['name']['notice']['can-list']))
                                        <a class="nav-link" href="{{route('notices.index')}}">View Notices</a>
                                    @endif
                                    @if(isset(auth()->user()->role->permission['name']['notice']['can-add']))
                                        <a class="nav-link" href="{{route('notices.create')}}">Create Notices</a>
                                    @endif
                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ auth()->user()->name }}
                    </div>
                </nav>
            </div>