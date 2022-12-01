<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Investment;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function loginAdmin(Request $request){

          if (Auth::guard('admin')->attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
            return Redirect('admin/dashboard')->with('message', 'Logged In Successfully...');
        }
        else{
            return Redirect()->back()->with('message', 'Invalid Login Details');
        }
    }

    public function dashboard()
    {
        $investments = Investment::all();
        $sum = Investment::sum('amount');
        return view('admin.dashboard', compact('investments','sum'));
    }

    public function invest()
    {
        return view('admin.invest.invest');
    }

    public function activities()
    {
        $activities = Investment::all();
        $sum = Investment::sum('amount');

        return view('admin.activities', compact('activities','sum'));
    }

    public function message()
    {
        return view('admin.message');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return Redirect('/admin')->with('message', 'Logged Out Successfully... ');
    }
}
