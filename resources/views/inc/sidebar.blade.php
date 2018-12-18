<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Roles & Permissions <i class="fa arrow"></i></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('Roles.index') }}"><i class="fa fa-wrench fa-fw"></i> Roles</a>
                    </li>
                    <li>
                        <a href="{{ route('Permissions.index') }}"><i class="fa fa-wrench fa-fw"></i> Permissions</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('Users.index') }}"><i class="fa fa-user fa-fw"></i> Users</a>
            </li>
            <li>
                <a href="{{ route('Projects.index') }}"><i class="fa fa-tasks fa-fw"></i> Projects</a>
            </li>
            <li>
                <a href="{{ route('Sales.index') }}"><i class="fa fa-shopping-cart fa-fw"></i> Sales</a>
            </li>
            <li>
                <a href="{{ route('Payroll.index') }}"><i class="fa fa-money fa-fw"></i> Payroll</a>
            </li>
            <li>
                <a href="{{ route('Employees.index') }}"><i class="fa fa-users fa-fw"></i> Employees</a>
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
                <a href="{{ route('Settings.index') }}"><i class="fa fa-cogs fa-fw"></i> Settings</a>
            </li>
        </ul>
    </div>
</div>