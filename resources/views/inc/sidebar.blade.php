<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            @role('Admin')
            <li>
                <a href="{{ route('Roles.index') }}"><i class="fa fa-wrench fa-fw"></i> Roles</a>
            </li>
            <li>
                <a href="{{ route('Permissions.index') }}"><i class="fa fa-wrench fa-fw"></i> Permissions</a>
            </li>
            <li>
                <a href="{{ route('Users.index') }}"><i class="fa fa-wrench fa-fw"></i> Users</a>
            </li>
            @endrole
            @can('view projects')
            <li>
                <a href="{{ route('Projects.index') }}"><i class="fa fa-tasks fa-fw"></i> Projects</a>
            </li>
            @endcan
            @can('view sales')
            <li>
                <a href="{{ route('Sales.index') }}"><i class="fa fa-shopping-cart fa-fw"></i> Sales</a>
            </li>
            @endcan
            @can('view payroll')
            <li>
                <a href="{{ route('Payroll.index') }}"><i class="fa fa-money fa-fw"></i> Payroll</a>
            </li>
            @endcan
            @can('view employees')
            <li>
                <a href="{{ route('Employees.index') }}"><i class="fa fa-users fa-fw"></i> Employees</a>
            </li>
            @endcan
            @can('view reports')
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
            @endcan
            @can('view settings')
            <li>
                <a href="{{ route('Settings.index') }}"><i class="fa fa-cogs fa-fw"></i> Settings</a>
            </li>
            @endcan
        </ul>
    </div>
</div>