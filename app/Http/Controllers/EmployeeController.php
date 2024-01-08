<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\employeeStoreRequest;
use App\Http\Requests\employeeUpdateRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
use DataTables;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(2);
		return view('employees/view');
    }

    public function getEmployees()
{
    $employees = Employee::select([
        'employee_id',
        'first_name',
        'last_name',
        'dob',
        'gender',
        'email',
        'phone',
        'address',
        'department_id',
        'position',
        'salary',
        'hire_date',
        'manager_id',
        'supervisor_id',
        'employee_status',
        'employee_image'
    ]);

    return DataTables::of($employees)
        ->addColumn('action', function ($employee) {
            // dd($employee);
            return view('employees.actions', compact('employee'));
        })
        ->make(true);
}
    public function create()
    {
        return view('employees/add');
    }

    public function store(employeeStoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('employee_image')) {
            $image = $request->file('employee_image');
            $imageName = 'image_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/uploads', $imageName);
          }

          $data['employee_image'] = $imageName;
        $user = Employee::create($data);
        return redirect('employees')->with('success', "Employee Added Successfully");
    }

    public function edit($id)
    {
        $employee = Employee::where('employee_id',$id)->first();
        return view('employees/edit', compact('employee'));
    }

    public function update(employeeUpdateRequest $request, Employee $employee)
    {
        $data = $request->validated();
        if ($request->hasFile('employee_image')) {
            $oldImagePath = $employee->employee_image;

            if ($oldImagePath && Storage::exists("public/uploads/$oldImagePath")) {
                Storage::delete("public/uploads/$oldImagePath");
            }

            $image = $request->file('employee_image');
            $imageName = 'image_' . date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads', $imageName);

            $data['employee_image'] = $imageName;
        }
        $employee->update($data);
        return redirect('employees')->with('success', "Employee Updated Successfully");
    }

    public function destroy($id)
    {
        $employee = Employee::where('employee_id', $id)->first();

        if ($employee) {
            $oldImagePath = $employee->employee_image;

            if ($oldImagePath && Storage::exists("public/uploads/$oldImagePath")) {
                Storage::delete("public/uploads/$oldImagePath");
            }

            $employee->delete();
            return redirect('employees')->with('success', "Employee Deleted Successfully");
        } else {
            return redirect('employees')->with('success', "Employee not found");
        }
    }
}
