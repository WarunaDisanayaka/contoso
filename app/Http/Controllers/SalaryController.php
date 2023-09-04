<?php

namespace App\Http\Controllers;


use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;



class SalaryController extends Controller
{
    public function index()
{
    $users = User::all();
    return view('hr.addsalaries', compact('users'));
}

public function store(Request $request)
{
    $data = $request->validate([
        'userid' => 'required',
        'month' => 'required',
        'amount' => 'required|numeric',
    ]);

    // Convert input month to full month name
    $month = Carbon::createFromFormat('Y-m', $data['month'])->format('F');

    $existingSalary = Salary::where('userid', $data['userid'])
    ->where('month', $month)
    ->first();

    if ($existingSalary) {
        return redirect()->back()->with('error', 'Salary for the user and month already exists.');
    }

    Salary::create($data);

    return redirect()->route('hr.users')->with('success', 'Salary added successfully.');
}

public function showEmpSalary()
    {
        $user = Auth::user();
    $salary = Salary::where('userid', $user->id)->first();

    return view('employee.salaries', compact('salary','user'));
    }

public function allSalaries(){
    $salaries = Salary::all();

    return view('hr.allsalaries', compact('salaries'));
}

}
