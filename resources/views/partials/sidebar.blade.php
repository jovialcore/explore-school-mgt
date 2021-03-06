<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{ asset('assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard </span>
                        </a>
                    </li>
                    @role('Student')
                    <li class="nav-item nav-with-child">
                        <a class="nav-link ">
                            <i class="ni ni-align-left-2 "></i> Result
                        </a>
                        <ul class="nav-item-child">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('result.create') }}">
                                    Check Your Result
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endrole
                    @role('Admin')
                        <li class="nav-item nav-with-child">
                            <a class="nav-link ">
                                <i class="ni ni-align-left-2 "></i> Student
                            </a>
                            <ul class="nav-item-child">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('student.create') }}">
                                        Add Student
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('student.index') }}">
                                        View Students
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item nav-with-child">
                            <a class="nav-link ">
                                <i class="ni ni-align-left-2 "></i> Class
                            </a>
                            <ul class="nav-item-child">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('class.index') }}">
                                        View Class
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('class.create') }}">
                                        Add Class
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('promote.index') }}">
                                        Promote class
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-with-child">
                            <a class="nav-link ">
                                <i class="ni ni-align-left-2 "></i> Results
                            </a>
                            <ul class="nav-item-child">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('import.upload') }}">
                                        Upload Result
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('class.create') }}">
                                        Single Sheets
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('result.masterResult') }}">
                                        Master Sheets
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endrole
                </ul>
            </div>
        </div>
    </div>
</nav>
