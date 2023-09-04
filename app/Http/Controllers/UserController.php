<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;



class UserController extends Controller
{
    public function create()
    {
        return view('hr.addingusers');

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:employee,hr,director',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('hr.addingusers')
                ->withErrors($validator)
                ->withInput();
        }
    
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
    
        $role = $request->input('role');
        $user->assignRole(ucfirst($role));
    
        return redirect()->route('hr.addingusers')->with('success', 'User added successfully.');
    }
    
    public function allUsers()
    {
        $users = User::with('roles')->get(); 
        return view('hr.users', compact('users'));
    }

    public function drallUsers()
    {
        $users = User::with('roles')->get(); 
        return view('director.allusers', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id); // Find the user based on the ID
        return view('hr.edit_user', compact('user'));
    }
   
    public function update(Request $request, User $user)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|min:6',
        'role' => 'required|in:employee,hr,director',
    ]);

    if ($validator->fails()) {
        return redirect()->route('user.edit', $user)
            ->withErrors($validator)
            ->withInput();
    }

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    
    if ($request->filled('password')) {
        $user->password = Hash::make($request->input('password'));
    }
    
    $user->save();

    // Update user roles using your role management mechanism (e.g., Many-to-many relationship)
    $role = $request->input('role');
    $user->syncRoles([$role]); // Assuming you're using a role syncing method

    return redirect()->route('hr.users', $user)->with('success', 'User information updated successfully.');

}

   


}
