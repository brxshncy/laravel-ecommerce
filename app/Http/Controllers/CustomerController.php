<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Customer;
use Auth;
class CustomerController extends Controller
{
    public function home(){
        return view('customer.home');
    }
    public function login(){
        return view('customer/customer-login');
    }
    public function fb_redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function fb_handleProviderCallback()
    {
        $fb_user = Socialite::driver('facebook')->stateless()->user();
        $user = Customer::where('provider_id',$fb_user->getId())->first();
        if(!$user){
            $user = Customer::create(
                [
                    'email' => $fb_user->getEmail(),
                    'customer_fullname' => $fb_user->getName(),
                    'prof_pic' => $fb_user->getAvatar(),
                    'provider' => 'facebook',
                    'provider_id' => $fb_user->getId(),
                ]);
        }
        Auth::guard('customer')->login($user);
        return redirect('/');
    }
    public function google_redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function google_handleProviderCallback()
    {
        $google_user = Socialite::driver('google')->stateless()->user();
        $user = Customer::where('provider_id',$google_user->getId())->first();
        if(!$user){
            $user = Customer::create(
                [
                    'email' => $google_user->getEmail(),
                    'customer_fullname' => $google_user->getName(),
                    'prof_pic' => $google_user->getAvatar(),
                    'provider' => 'google',
                    'provider_id' => $google_user->getId(),
                ]);
        }
        Auth::guard('customer')->login($user);
        return redirect('/');
    }
    public function logout(){
        Auth::guard('customer')->logout();
        return redirect('/');
    }
}

