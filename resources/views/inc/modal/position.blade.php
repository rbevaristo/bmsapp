<div class="modal fade" id="positionModal" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Position</h4>
            </div>
            <form action="{{ route('positions.store') }}" method="post">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                  <label for="position">Name</label>
                  <input type="text" name="name" id="position" class="form-control" placeholder="Position Name..." required>
                </div>
                <div class="form-group">
                    <label for="department">Choose Department:</label>
                    <select class="form-control" name="dept" id="department" required>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                    </select>
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