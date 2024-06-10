<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    
    public function setAdmin($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->is_admin = true;
            $user->save();
            return redirect()->back()->with('success', 'User has been made an admin.');
        }
        return redirect()->back()->with('error', 'User not found.');
    }
}
