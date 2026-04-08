<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    private function log($action, $description)
    {
        DB::table('logs')->insert([
            'user_id' => Session::get('user_id'),
            'action' => $action,
            'description' => $description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5',
            'course' => 'required',
            'year_level' => 'required',
            'contact_number' => 'required',
            'address' => 'required',
            'birthdate' => 'required|date'
        ]);

        DB::table('users')->insert([
            'student_id' => $request->student_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'course' => $request->course,
            'year_level' => $request->year_level,
            'contact_number' => $request->contact_number,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $this->log('register', 'New student registered');
        return redirect()->route('login')->with('success', 'Registered successfully!');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = DB::table('users')->where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) 
        {
            Session::put('user_id', $user->id);
            Session::put('user_name', $user->first_name);
            $this->log('login', 'User logged in');
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        $this->log('logout', 'User logged out');
        Session::flush();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        if (!Session::has('user_id'))
        {
            return redirect()->route('login');
        }

        $user = DB::table('users')->where('id', Session::get('user_id'))->first();
        return view('dashboard', compact('user'));
    }

    public function settings()
    {
        if (!Session::has('user_id'))
        {
            return redirect()->route('login');
        }

        $user = DB::table('users')->where('id', Session::get('user_id'))->first();
        return view('auth.settings', compact('user'));
    }


    public function updateSettings(Request $request)
    {
        DB::table('users')
            ->where('id', Session::get('user_id'))
            ->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'updated_at' => now()
            ]);

        $this->log('update', 'User updated profile');
        return back()->with('success', 'Profile updated!');
    }
}