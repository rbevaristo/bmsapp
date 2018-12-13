<aside id="sideMenu" class>
    <nav>
        <a href="{{ route('dashboard') }}" {!! Request::is('dashboard') ? 'class="active"' : '' !!}>
            <i class="fa fa-dashboard" aria-hidden="true"></i>
            <span> Overview</span>
        </a>
        <a href="{{ route('Projects.index') }}" {!! Request::is('Projects') ? 'class="active"' : '' !!}>
            <i class="fa fa-tasks" aria-hidden="true"></i>
            <span> Projects</span>
        </a>
        <a href="{{ route('Sales.index') }}" {!! Request::is('Sales') ? 'class="active"' : '' !!}>
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span> Sales</span>
        </a>
        <a href="{{ route('Reports.index') }}" {!! Request::is('Reports') ? 'class="active"' : '' !!}>
            <i class="fa fa-file" aria-hidden="true"></i>
            <span> Reports</span>
        </a>
        <a href="{{ route('Employees.index') }}" {!! Request::is('Employees') ? 'class="active"' : '' !!}>
            <i class="fa fa-users" aria-hidden="true"></i>
            <span> Employees</span>
        </a>
        <a href="{{ route('Payroll.index') }}" {!! Request::is('Payroll') ? 'class="active"' : '' !!}>
            <i class="fa fa-money" aria-hidden="true"></i>
            <span> Payroll</span>
        </a>
        <a href="{{ route('Settings.index') }}" {!! Request::is('Settings') ? 'class="active"' : '' !!}>
            <i class="fa fa-cog" aria-hidden="true"></i>
            <span> Settings</span>
        </a>
    </nav>
</aside>