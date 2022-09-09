<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->

        {{-- @php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName()
@endphp --}}
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        {{-- {{ ($prefix == '/user')?'active':'' }}"> --}}
                        <i class="ri-file-user-fill"></i>
                        <span>Manage Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('user.index') }}"> View Users</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Manage Profile</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('manage.profile.index') }}"> View Profile</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-settings-5-line"></i>
                        <span>Setup Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('setup.student.class.index') }}">Student Class</a></li>

                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('setup.student.year.index') }}">Student Year</a></li>

                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('setup.student.subject.index') }}">Student Subject</a></li>

                    </ul>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>