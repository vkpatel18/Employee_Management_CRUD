<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class HomeController extends Controller
{
    public function home(Employee $employee)
    {
        return redirect('dashboard');
    }
}
