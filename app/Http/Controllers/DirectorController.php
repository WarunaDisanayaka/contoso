<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class DirectorController extends Controller
{

    public function edit($id)
    {
        $user = User::findOrFail($id); // Find the user based on the ID
        return view('director.edit_user', compact('user'));
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

    return redirect()->route('dr.users', $user)->with('success', 'User information updated successfully.');

}

public function destroy(User $user)
{
    // Delete the user
    $user->delete();

    // Redirect to a page or return a response
    return redirect()->route('dr.users')->with('success', 'User deleted successfully.');
}
    
}
