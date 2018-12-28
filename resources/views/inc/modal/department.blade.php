<div class="modal fade" id="departmentModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Department</h4>
            </div>
            <form action="{{ route('departments.store') }}" method="post">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="department_name">Name</label>
                    <input type="text" name="name" id="department_name" class="form-control" placeholder="Department Name" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>