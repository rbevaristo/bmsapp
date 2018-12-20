<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('dashboard') }}" {!! (request()->segment(1) == 'dashboard') ? 'class="active"' : '' !!}><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#" {!! (request()->segment(1) == 'roles' || request()->segment(1) == 'permissions')  ? 'class="active"' : '' !!}><i class="fa fa-wrench fa-fw"></i>Roles & Permissions <i class="fa arrow"></i></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('users.index') }}" {!! (request()->segment(1) == 'users') ? 'class="active"' : '' !!}><i class="fa fa-user fa-fw"></i> Users</a>
                    </li>
                    <li>
                        <a href="{{ route('roles.index') }}" {!! (request()->segment(1) == 'roles') ? 'class="active"' : '' !!}><i class="fa fa-wrench fa-fw"></i> Roles</a>
                    </li>
                    <li>
                        <a href="{{ route('permissions.index') }}" {!! (request()->segment(1) == 'permissions') ? 'class="active"' : '' !!}><i class="fa fa-lock fa-fw"></i> Permissions</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('clients.index') }}" {!! (request()->segment(1) == 'clients') ? 'class="active"' : '' !!}><i class="fa fa-user-circle fa-fw"></i> Clients</a>
            </li>            
            <li>
                <a href="{{ route('projects.index') }}" {!! (request()->segment(1) == 'projects') ? 'class="active"' : '' !!}><i class="fa fa-tasks fa-fw"></i> Projects</a>
            </li>
            <li>
                <a href="{{ route('sales.index') }}" {!! (request()->segment(1) == 'sales') ? 'class="active"' : '' !!}><i class="fa fa-shopping-cart fa-fw"></i> Sales</a>
            </li>
            <li>
                <a href="{{ route('payroll.index') }}" {!! (request()->segment(1) == 'payroll') ? 'class="active"' : '' !!}><i class="fa fa-money fa-fw"></i> Payroll</a>
            </li>
            <li>
                <a href="{{ route('employees.index') }}" {!! (request()->segment(1) == 'employees') ? 'class="active"' : '' !!}><i class="fa fa-users fa-fw"></i> Employees</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-file fa-fw"></i> Reports<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Projects</a>
                    </li>
                    <li>
                        <a href="#">Sales</a>
                    </li>
                    <li>
                        <a href="#">Quotation</a>
                    </li>
                    <li>
                        <a href="#">Invoices</a>
                    </li>
                    <li>
                        <a href="#">Payroll</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('settings.index') }}" {!! (request()->segment(1) == 'settings') ? 'class="active"' : '' !!}><i class="fa fa-cogs fa-fw"></i> Settings</a>
            </li>
        </ul>
    </div>
</div>