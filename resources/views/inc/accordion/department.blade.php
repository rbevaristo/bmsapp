<div class="panel panel-default">
    <div class="panel-header" role="tab" id="DepartmentPositionHeader">
        <h4 class="mb-0">
            <a data-toggle="collapse" data-parent="#settings" href="#DepartmentPositionSection" aria-expanded="true" aria-controls="DepartmentPositionSection">
                Department & Positions
            </a>
            <div class="btn-group pull-right">
                <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#departmentModal">
                    <i class="fa fa-plus"></i>
                    Department
                </a>
                <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#positionModal">
                    <i class="fa fa-plus"></i>
                    Position
                </a>
            </div>
        </h4>
    </div>
    <div id="DepartmentPositionSection" class="collapse" role="tabpanel" aria-labelledby="DepartmentPositionHeader">
        <div class="panel-body">
            <div class="row">
                @foreach($departments as $department)
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            {{ $department->name }}
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach($department->positions as $position)
                                <li class="list-group-item">{{ $position->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>