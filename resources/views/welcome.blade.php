<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
</head>

<body>
    <div id="app">
        <div id="wrapper">
            <aside id="sideMenu">
                <nav>
                    <a href="#" class="active">
                        <i class="fa fa-dashboard" aria-hidden="true"></i>
                        <span> Overview</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                        <span> Projects</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span> Schedules</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span> Sales</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <span> Reports</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span> Employees</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        <span> Payroll</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <span> Settings</span>
                    </a>
                </nav>
            </aside>
            <header id="headerNav">
                <button type="button" class="btn sm-btn" id="sideMenu--toggler">
                    <i class="fa fa-bars"></i>
                </button>
                <h1>BMS</h1>

                {{-- <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <div class="user-area">
                            <div class="search-area">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <input type="text" placeholder="Search..." class="search">
                                <span class="border"></span>
                            </div>
                            <a href="#" class="notification">
                                <i class="fa fa-bell"></i>
                                <span class="circle">3</span>
                            </a>
                            <a href="#">
                                <div class="user-img"></div>
                                <i class="fa fa-caret-down"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </header>
            <main id="content-area">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="heading">
                            <h1>Dashboard</h1>
                            <p>Welcome <strong>Richard</strong></p>
                        </div>
                        <div class="dateNtime">
                            <span>{{ date('F d, Y') }}</span>
                            <span id="realTime"> </span>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-5 col-sm-12">
                        <div class="card">
                            <div class="icon-lg">
                                <i class="fa fa-tasks"></i>
                            </div>
                            <div class="icon-date-title">
                                <i class="fa fa-calendar icon-sm"></i>
                                <span>December</span>
                                <h1>Projects</h1>
                            </div>
                            <div class="icon-count">
                                <span>5</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="card">
                            <div class="icon-lg">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="icon-date-title">
                                <i class="fa fa-calendar icon-sm"></i>
                                <span>December</span>
                                <h1>Sales</h1>
                            </div>
                            <div class="icon-count">
                                <span>100,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="./js/main.js"></script>
</body>

</html>