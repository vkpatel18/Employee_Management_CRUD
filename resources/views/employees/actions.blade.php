<div class="action-buttons">
    <a href="{{ route('employees.edit', $employee->employee_id) }}" style="background-color: blue" class="btn btn-primary btn-sm" title="Edit">
        <i class="fas fa-edit"></i> Edit
    </a>

    <form class="delete-form d-inline" action="{{ route('employees.destroy', $employee->employee_id) }}" method="post">
        @csrf
        @method('DELETE')

        <!-- Delete Button -->
        <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#deleteConfirmationModal{{ $employee->employee_id }}">
            <i class="fas fa-trash-alt"></i> Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="deleteConfirmationModal{{ $employee->employee_id }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this record?
                    </div>
                    <div class="modal-footer">
                        <!-- Cancel Button -->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                        <!-- Delete Button -->
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
