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
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span> Home</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-sticky-note" aria-hidden="true"></i>
                        <span> Files</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                        <span> Bookmark</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span> Calendar</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <span> Users</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <span> Settings</span>
                    </a>
                </nav>
            </aside>
            <header id="headerNav">
                <ul>
                    <li>
                        <button type="button" class="btn sm-btn" id="sideMenu--toggler">
                            <i class="fa fa-bars"></i>
                        </button>
                    </li>
                    <li>
                        <h1>BMS</h1>
                    </li>
                </ul>
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
        </div>
    </div>

    <script src="./js/main.js"></script>
</body>

</html>