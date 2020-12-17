<div class="site-gridmenu">
    <div>
        <div>
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        <i class="icon wb-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}">
                        <i class="icon wb-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('formRequest') }}">
                        <i class="icon wb-copy"></i>
                        <span>Form Requests</span>
                    </a>
                </li>
                @role('Admin')
                <li>
                    <a href="{{ route('formRequest') }}">
                        <i class="icon wb-order"></i>
                        <span>Roles</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('formRequest') }}">
                        <i class="icon wb-order"></i>
                        <span>Permission</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('formRequest') }}">
                        <i class="icon wb-order"></i>
                        <span>User</span>
                    </a>
                </li>
                @endrole
            </ul>
        </div>
    </div>
</div>