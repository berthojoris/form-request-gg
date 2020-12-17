<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-category">General</li>
                    <li class="site-menu-item {{ (request()->is('home')) ? 'active' : '' }}">
                        <a href="{{ route('home') }}">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item {{ (request()->is('profile')) ? 'active' : '' }}">
                        <a href="{{ route('profile') }}">
                            <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                            <span class="site-menu-title">Profile</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Administrator</li>
                    <li class="site-menu-item {{ (request()->is('roles')) ? 'active' : '' }}">
                        <a href="{{ route('roles') }}">
                            <i class="site-menu-icon wb-order" aria-hidden="true"></i>
                            <span class="site-menu-title">Roles</span>
                        </a>
                    </li>
                    <li class="site-menu-item {{ (request()->is('permissions')) ? 'active' : '' }}">
                        <a href="{{ route('permissions') }}">
                            <i class="site-menu-icon wb-order" aria-hidden="true"></i>
                            <span class="site-menu-title">Permissions</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Data</li>
                    <li class="site-menu-item {{ (request()->is('form-request')) ? 'active' : '' }}">
                        <a href="{{ route('formRequest') }}">
                            <i class="site-menu-icon wb-order" aria-hidden="true"></i>
                            <span class="site-menu-title">Form Requests</span>
                        </a>
                    </li>
                    <li class="site-menu-item {{ (request()->is('user-manage')) ? 'active' : '' }}">
                        <a href="{{ route('userManage') }}">
                            <i class="site-menu-icon wb-order" aria-hidden="true"></i>
                            <span class="site-menu-title">User</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>