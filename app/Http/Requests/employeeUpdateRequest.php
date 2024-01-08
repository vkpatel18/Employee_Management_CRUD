<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class employeeUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'employee_id' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required',
            'email' => 'required|email|',
            'phone' => 'required|string',
            'address' => 'required|string',
            'department_id' => 'required|numeric',
            'position' => 'required|string',
            'salary' => 'required|numeric',
            'hire_date' => 'required|date',
            'manager_id' => 'required|nullable|numeric',
            'supervisor_id' => 'required|nullable|numeric',
            'employee_status' => 'required',
        ];
    }
}
