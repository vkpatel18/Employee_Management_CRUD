@extends('layouts.user_type.auth')

@section('content')


<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6>Employee List</h6>
                            <div class="d-flex">
                                <div class="ms-md-3 pe-md-3">
                                    <div class="input-group">
                                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" placeholder="Search here..." id="searchInput">
                                    </div>
                                </div>
                                <a href="{{ route('employees.create') }}" class="ms-md-3 pe-md-3" style="display: inline-block; padding: 10px 20px; text-decoration: none;
                              background-color:  #b300b3; color: #fff; font-size: 16px;
                              border-radius: 8px; transition: background-color 0.3s ease;
                              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);" onmouseover="this.style.backgroundColor=' #b300b3'; this.style.boxShadow='0 6px 8px rgba(0, 0, 0, 0.2)'" onmouseout="this.style.backgroundColor=' #b300b3'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)'">
                                    Add Employee
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">

                        <table class="table table-striped table-bordered" id="employees-table">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employee ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">First Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date of Birth</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gender</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Department ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Position</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Salary</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hire Date</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Manager ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Supervisor ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employee Status</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employee Image</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                    @foreach($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->employee_id }}</td>
                            <td>{{ $employee->first_name }}</td>
                            <td>{{ $employee->last_name }}</td>
                            <td>{{ $employee->dob }}</td>
                            <td>{{ $employee->gender }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->department_id }}</td>
                            <td>{{ $employee->position }}</td>
                            <td>{{ $employee->salary }}</td>
                            <td>{{ $employee->hire_date }}</td>
                            <td>{{ $employee->manager_id }}</td>
                            <td>{{ $employee->supervisor_id }}</td>
                            <td>{{ $employee->employee_status }}</td>
                            <td>
                                <img src="{{ Storage::url('public/uploads/'.$employee->employee_image) }}" height="90" width="90">
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('employees.edit', $employee->id) }}" style="background-color: blue" class="btn btn-primary btn-sm" title="Edit">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>

                                    <form class="delete-form d-inline" action="{{ route('employees.destroy', $employee->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <!-- Delete Button -->
                                        <button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#deleteConfirmationModal{{ $employee->id }}">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteConfirmationModal{{ $employee->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
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
                            </td>
                            </tr>
                            @endforeach
                            </tbody> --}}
                        </table>


                        {{-- {{ $employees->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

@endsection

@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        var dataTable = $('#employees-table').DataTable({
            processing: true
            , serverSide: true
            , searching: true
            , dom: 'Blrtp'
            , lengthMenu: [
                [5, 10, 25, 50, -1]
                , ['5 Rows', '10 rows', '25 rows', '50 rows', 'Show all']
            ]
            , ajax: '{{ route("get.employees") }}'
            , columns: [{
                    data: 'employee_id'
                    , name: 'employee_id'
                }
                , {
                    data: 'first_name'
                    , name: 'first_name'
                }
                , {
                    data: 'last_name'
                    , name: 'last_name'
                }
                , {
                    data: 'dob'
                    , name: 'dob'
                }
                , {
                    data: 'gender'
                    , name: 'gender'
                }
                , {
                    data: 'email'
                    , name: 'email'
                }
                , {
                    data: 'phone'
                    , name: 'phone'
                }
                , {
                    data: 'address'
                    , name: 'address'
                }
                , {
                    data: 'department_id'
                    , name: 'department_id'
                }
                , {
                    data: 'position'
                    , name: 'position'
                }
                , {
                    data: 'salary'
                    , name: 'salary'
                }
                , {
                    data: 'hire_date'
                    , name: 'hire_date'
                }
                , {
                    data: 'manager_id'
                    , name: 'manager_id'
                }
                , {
                    data: 'supervisor_id'
                    , name: 'supervisor_id'
                }
                , {
                    data: 'employee_status'
                    , name: 'employee_status'
                }
                , {
                    data: 'employee_image'
                    , name: 'employee_image'
                    , render: function(data, type, full, meta) {
                        return '<img src="' + '{{Storage::url("public/uploads/")}}' + data + '" height="90" width="90">';
                    }
                }
                , {
                    data: 'action'
                    , name: 'action'
                    , orderable: false
                    , searchable: false

                }
            , ]
            , language: {
                'paginate': {
                    'previous': '<span class="prev-icon"><</span>'
                    , 'next': '<span class="next-icon">></span>'
                }
            }
        , });


        $('#searchInput').on('keyup', function() {
            dataTable.search($(this).val()).draw();
        });

    });

</script>
@if(session('success'))
<script>
    // Display a Toastr notification
    toastr.success("{{ session('success') }}");

</script>
@endif

@endpush
