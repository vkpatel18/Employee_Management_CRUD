@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%; position: relative;">
            <span class="mask bg-gradient-primary opacity-6"></span>
            <h2 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #fff; text-align: center;">Edit Employee</h2>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Edit Employee</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route('employees.update', ['employee' => $employee->id]) }}" method="POST" role="form text-left" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="employee-id" class="form-control-label">{{ __('Employee ID') }}</label>
                                <div class="">
                                    <input class="form-control" type="text" placeholder="Employee ID" id="employee-id" name="employee_id" value="{{ $employee->employee_id }}">
                                    @error('employee_id')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first-name" class="form-control-label">{{ __('First Name') }}</label>
                                <div class="">
                                    <input class="form-control" type="text" placeholder="First Name" id="first-name" name="first_name" value="{{ $employee->first_name }}">
                                    @error('first_name')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last-name" class="form-control-label">{{ __('Last Name') }}</label>
                                <div class="">
                                    <input class="form-control" type="text" placeholder="Last Name" id="last-name" name="last_name" value="{{ $employee->last_name }}">
                                    @error('last_name')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dob" class="form-control-label">{{ __('Date of Birth') }}</label>
                                <div class="">
                                    <input class="form-control" type="date" id="dob" name="dob" value="{{ $employee->dob }}">
                                    @error('dob')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender" class="form-control-label">{{ __('Gender') }}</label>
                                <div class="">
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="" disabled {{ old('gender', $employee->gender) == null ? 'selected' : '' }}>
                                            {{ __('Select Gender') }}
                                        </option>
                                        <option value="male" {{ old('gender', $employee->gender) == 'male' ? 'selected' : '' }}>
                                            {{ __('Male') }}
                                        </option>
                                        <option value="female" {{ old('gender', $employee->gender) == 'female' ? 'selected' : '' }}>
                                            {{ __('Female') }}
                                        </option>
                                        <!-- Add more options if needed -->
                                    </select>
                                    @error('gender')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-control-label">{{ __('Email Address') }}</label>
                                <div class="">
                                    <input class="form-control" type="email" placeholder="Email Address" id="email" name="email" value="{{ $employee->email }}">
                                    @error('email')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone" class="form-control-label">{{ __('Phone Number') }}</label>
                                <div class="">
                                    <input class="form-control" type="tel" placeholder="Phone Number" id="phone" name="phone" value="{{ $employee->phone }}">
                                    @error('phone')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address" class="form-control-label">{{ __('Address') }}</label>
                                <div class="">
                                    <input class="form-control" type="text" placeholder="Address" id="address" name="address" value="{{ $employee->address }}">
                                    @error('address')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="department-id" class="form-control-label">{{ __('Department ID') }}</label>
                                <div class="">
                                    <input class="form-control" type="text" placeholder="Department ID" id="department-id" name="department_id" value="{{ $employee->department_id }}">
                                    @error('department_id')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="position" class="form-control-label">{{ __('Position') }}</label>
                                <div class="">
                                    <input class="form-control" type="text" placeholder="Position" id="position" name="position" value="{{ $employee->position }}">
                                    @error('position')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="salary" class="form-control-label">{{ __('Salary') }}</label>
                                <div class="">
                                    <input class="form-control" type="text" placeholder="Salary" id="salary" name="salary" value="{{ $employee->salary }}">
                                    @error('salary')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="hire-date" class="form-control-label">{{ __('Hire Date') }}</label>
                                <div class="">
                                    <input class="form-control" type="date" id="hire-date" name="hire_date" value="{{ $employee->hire_date }}">
                                    @error('hire_date')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="manager-id" class="form-control-label">{{ __('Manager ID') }}</label>
                                <div class="">
                                    <input class="form-control" type="text" placeholder="Manager ID" id="manager-id" name="manager_id" value="{{ $employee->manager_id }}">
                                    @error('manager_id')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="supervisor-id" class="form-control-label">{{ __('Supervisor ID') }}</label>
                                <div class="">
                                    <input class="form-control" type="text" placeholder="Supervisor ID" id="supervisor-id" name="supervisor_id" value="{{ $employee->supervisor_id }}">
                                    @error('supervisor_id')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="employee-status" class="form-control-label">{{ __('Employee Status') }}</label>
                                <div class="">
                                    <select class="form-select" id="employee-status" name="employee_status">
                                        <option value="" disabled {{ old('employee_status', $employee->employee_status) == null ? 'selected' : '' }}>
                                            {{ __('Select Employee Status') }}
                                        </option>
                                        <option value="active" {{ old('employee_status', $employee->employee_status) == 'active' ? 'selected' : '' }}>
                                            {{ __('Active') }}
                                        </option>
                                        <option value="inactive" {{ old('employee_status', $employee->employee_status) == 'inactive' ? 'selected' : '' }}>
                                            {{ __('Inactive') }}
                                        </option>
                                        <!-- Add more options if needed -->
                                    </select>
                                    @error('employee_status')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="employee-image" class="form-control-label">{{ __('Employee Image') }}</label>
                                <div class="">
                                    <input class="form-control" type="file" id="employee-image" name="employee_image" value="{{ $employee->employee_image }}">
                                    @error('employee_image')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <img src="{{ asset(Storage::url('public/uploads/' . $employee->employee_image)) }}" height="90" width="90" alt="Employee Image">
                        </div>

                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Update' }}</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
@endsection
