<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;
use Hash;
class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $credentials = ['username' => $request->username, 'password' => $request->password];
            if(Auth::guard('admin')->attempt($credentials)){
                return redirect('admin/home');
            }
            else{
                return redirect()->back()->with('flash','Invalid Username and Password.');
            }
        }
        return view('admin.admin-login'); 
    }
    public function home(){
        return view('admin.admin-home');
    }
}
