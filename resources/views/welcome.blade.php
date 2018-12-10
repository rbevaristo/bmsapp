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
                {{-- <ul class="navbar">
                    <li><i class="fa fa-bell"></i></li>
                    <li></li>
                    <li></li>
                </ul> --}}
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
                    <div class="col-md-3">
                        <div class="box">
                            <div class="box-title">
                                <h5>Projects</h5>
                                <span>Monthly</span>
                            </div>
                            <div class="box-content">
                                <h1>10</h1>
                                <small>Projects</small>
                                <span>98%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="fa fa-tasks"></i>
                                </div>
                                <div class="col-md-8">
                                    <span>Total Projects</span>
                                    <h2>300</h2>
                                </div>
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