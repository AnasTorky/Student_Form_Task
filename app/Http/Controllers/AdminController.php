<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup');
    }
    public function signup(Request $request){
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
           ]);
        return redirect()->route('admin.login');
    }
    public function login_page(){
        return view('login');
    }
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->route('admin.home');
    } else {
        return redirect()->route('admin.login')->withErrors([
            'login_error' => 'Invalid credentials. Please try again.',
        ]);
    }
}

    public function home_page(){
        return view('home');
    }
    public function logout(Request $req){
        auth()->guard('web')->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
