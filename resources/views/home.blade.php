@extends('layouts.app')

@section('content')
<div class="container-fluid" id="dashboard">
    <div class="row">
        <div class="col-12">
            <h2>Dashboard</h2>
            <nav class="breadcrumb">
                <span class="breadcrumb-item active">Welcome <strong>{{ auth()->user()->firstname }}</strong></span>
            </nav>
            <div class="dateNtime">
                <span>{{ date('F d, Y') }}</span> <span id="realTime"> </span>
            </div>
        </div>
    </div>
    <div class="row">
        {{-- Widgets --}}
        <div class="col-md-3 col-sm-12">
            <a href="{{ route('Projects.index') }}">
                <div class="widget bg-one">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <div class="col-8">
                            <span>Projects</span>
                            <h2>300</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-12">
            <a href="{{ route('Sales.index') }}">
                <div class="widget bg-two">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="col-8">
                            <span>Sales</span>
                            <h2>120,000</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-12">
            <a href="{{ route('Reports.index') }}">
                <div class="widget bg-three">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-file"></i>
                        </div>
                        <div class="col-8">
                            <span>Reports</span>
                            <h2>1250</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-12">
            <a href="{{ route('Employees.index') }}">
                <div class="widget bg-four">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="col-8">
                            <span>Employees</span>
                            <h2>24</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    {{-- Cards --}}
    <div class="row">
        <div class="col-12" id="due-projects">
            <div class="card">
                <div class="card-header bg-one">
                    <h5>Due Projects</h5>
                    <a href="#" class="btn-link float-right">
                        <span><i class="fa fa-cog"></i></span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1 col-4">
                            <div class="project-date">
                                <small>December</small> <span>18</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-8">
                            <div class="project-title">
                                <h2 class="title">
                                    <a href="#">Project Title</a> 
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-4 col-7">
                            <div class="project-info">
                                <span>
                                    <i class="fa fa-user" aria-hidden="true"></i> John Doe
                                </span>
                                <span>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09173208762
                                </span>
                                <span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> jdoe@gmail.com
                                </span>
                                <span>
                                    <i class="fa fa-map-marker"></i> Clark Freeport Zone, Pampanga
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3 col-5">
                            <div class="project-assignee">
                                <img src="./images/pic9.jpg" class="faces" alt="Credits: https://uifaces.co" title="Credits: https://uifaces.co" />
                                <img src="./images/pic10.jpg" class="faces" alt="Credits: https://uifaces.co" title="Credits: https://uifaces.co" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-4">
                            <div class="project-date">
                                <small>December</small> <span>18</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-8">
                            <div class="project-title">
                                <h2 class="title">
                                    <a href="#">Project Title</a> 
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-4 col-7">
                            <div class="project-info">
                                <span>
                                    <i class="fa fa-user" aria-hidden="true"></i> John Doe
                                </span>
                                <span>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09173208762
                                </span>
                                <span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> jdoe@gmail.com
                                </span>
                                <span>
                                    <i class="fa fa-map-marker"></i> Clark Freeport Zone, Pampanga
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3 col-5">
                            <div class="project-assignee">
                                <img src="./images/pic3.jpg" class="faces" alt="Credits: https://uifaces.co" title="Credits: https://uifaces.co" />
                                <img src="./images/pic2.jpg" class="faces" alt="Credits: https://uifaces.co" title="Credits: https://uifaces.co" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-4">
                            <div class="project-date">
                                <small>December</small> <span>20</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-8">
                            <div class="project-title">
                                <h2 class="title">
                                    <a href="#">Project Title</a> 
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-4 col-7">
                            <div class="project-info">
                                <span>
                                    <i class="fa fa-user" aria-hidden="true"></i> John Doe
                                </span>
                                <span>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 09173208762
                                </span>
                                <span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> jdoe@gmail.com
                                </span>
                                <span>
                                    <i class="fa fa-map-marker"></i> Clark Freeport Zone, Pampanga
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3 col-5">
                            <div class="project-assignee">
                                <img src="./images/pic8.jpg" class="faces" alt="Credits: https://uifaces.co" title="Credits: https://uifaces.co" />
                                <img src="./images/pic7.jpg" class="faces" alt="Credits: https://uifaces.co" title="Credits: https://uifaces.co" />
                                <img src="./images/pic6.jpg" class="faces" alt="Credits: https://uifaces.co" title="Credits: https://uifaces.co" />
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-md-12" id="recent-projects">
            <div class="card">
                <div class="card-header">
                    <h5>Recent Projects</h5>
                    <a href="#" class="float-right">
                        <span><i class="fa fa-cog"></i></span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="project-date">
                                        <small>December</small> <span>20</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="project-title">
                                    <h2 class="title">
                                        Project Title
                                    </h2></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="project-info">
                                        <span>
                                            <i class="fa fa-user" aria-hidden="true"></i> John Doe
                                        </span>
                                        <span>
                                            <i class="fa fa-phone" aria-hidden="true"></i> 09173208762
                                        </span>
                                        <span>
                                            <i class="fa fa-envelope" aria-hidden="true"></i> jdoe@gmail.com
                                        </span>
                                        <span>
                                            <i class="fa fa-map-marker"></i> Clark Freeport Zone, Pampanga
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-1 text-right">
                                    <i class="badge badge-success">done</i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col-4">
                                    Project 2
                                </div>
                                <div class="col-8 text-right">
                                    <i class="badge badge-success">done</i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col-4">
                                    Project 3
                                </div>
                                <div class="col-8 text-right">
                                    <i class="badge badge-success">done</i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col-4">
                                    Project 4
                                </div>
                                <div class="col-8 text-right">
                                    <i class="badge badge-success">done</i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col-4">
                                    Project 5
                                </div>
                                <div class="col-8 text-right">
                                    <i class="badge badge-success">done</i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="row">
                                <div class="col-4">
                                    Project 6
                                </div>
                                <div class="col-8 text-right">
                                    <i class="badge badge-success">done</i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
