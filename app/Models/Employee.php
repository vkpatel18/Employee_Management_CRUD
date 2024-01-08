<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
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
    ];
}
