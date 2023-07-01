<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppController extends Controller
{
    
    //display home page
    public function home() {
        
        return view('app.home');
    }

    //display contact page
    public function contact() {
        if(Gate::allows('is-user')) {
            $user = User::where('role', 'HRD')->first();

            return view('app.contact', [
                'user' => [
                    'Nama' => $user->name,
                    'Telepon' => $user->phone,
                    'Email' => $user->email
                ]
            ]);
        }
    }

    //display user setting page
    public function userSetting() {
        if(Gate::allows('is-hrd') || Gate::allows('is-admin')) {
            $users = User::where('role', 'User')->get();
            
            if(Auth::user()->role == 'Admin') {
                $hrds = User::where('role', 'HRD')->get();
                return view('app.user-setting', [
                    'users' => $users,
                    'hrds' => $hrds
                ]);
            }
           
            return view('app.user-setting', [
                'users' => $users
            ]);
            
            
        }
       
    }
}
