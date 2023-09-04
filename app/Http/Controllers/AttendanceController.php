<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;

class AttendanceController extends Controller
{


public function markAttendance(Request $request)
{
    $userId = auth()->user()->id;
    $now = now();
    $action = $request->input('action');
    
    $latestAttendance = Attendance::where('userid', $userId)
        ->whereDate('check_in_date_time', $now)
        ->latest()
        ->first();
    
    if ($latestAttendance && $latestAttendance->check_out_date_time) {
        return redirect()->back()->with('error', 'Attendance for today is already marked.');
    }

    if ($action === 'checkin' && !$latestAttendance) {
        Attendance::create([
            'userid' => $userId,
            'check_in_date_time' => $now,
        ]);
    } elseif ($action === 'checkout' && $latestAttendance && !$latestAttendance->check_out_date_time) {
        $latestAttendance->update([
            'check_out_date_time' => $now,
        ]);
    }
    
    return redirect()->back()->with('success', 'Attendance marked successfully.');

    
}


public function showAttendance()
{
    $userId = auth()->user()->id;
    $latestAttendance = Attendance::where('userid', $userId)
        ->whereDate('check_in_date_time', now())
        ->latest()
        ->first();

    return view('employee.attendance', compact('latestAttendance'));
}


public function showAllUsersWithAttendance()
{
    $users = User::with('attendances')->get();

    return view('hr.usersattendance', compact('users'));
}

}
