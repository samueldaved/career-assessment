<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    use AuthenticatesUsers;

    //override username function
    public function username() {
        return 'username';
    }

    //return login view
    public function login() {
        return view('users.login');
    }

    //validate user login
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['username' => 'Invalid Credentials'])->onlyInput('username');
    }

    //logout
    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }

    //show create user form
    public function create() {
        if(Gate::allows('is-admin')) {
            return view('users.create');
        }
    }

    //store user 
    public function store(Request $request) {
        $formFields = $request->validate([
            'username' => ['required', Rule::unique('users', 'username')],
            'password' => 'required',
            'name' => 'required',
            'role' => 'required',
            'gender' => 'required',
            'birthplace' => 'required',
            'birthday' => 'date|required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'department' => 'required'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);
        $user->save();
        
        return redirect('/user-setting')->with('message', 'Insert Kandidat Berhasil');
    }

    //show edit user form
    public function edit(User $user) {
        if(Gate::allows('is-admin')) {
            return view('users.edit', ['user' => $user]);
        }
    }

    //update user
    public function update(Request $request, User $user) {
        if($request->get('password') == null) {
            $request->request->remove('password');
        }

        $formFields = $request->validate([
            'username' => ['required', Rule::unique('users', 'username')->ignore($user->id)],
            'password' => 'nullable',
            'name' => 'required',
            'role' => 'required',
            'gender' => 'required',
            'birthplace' => 'required',
            'birthday' => 'date|required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'department' => 'required'
        ]);
    
        if($request->get('password') != null) {
            $formFields['password'] = bcrypt($formFields['password']);
        }

        $user->update($formFields);
        
        return redirect('/users/'.$user->id)->with('message', 'Update Kandidat Berhasil');
    }

    //show single user page
    public function show(User $user) {
        if(Gate::allows('is-hrd') || Gate::allows('is-admin')) {
            return view('users.show', [
                'user' =>[
                    'id' => $user->id,
                    'Username' => $user->username,
                    'Nama' => $user->name,
                    'Role' => $user->role,
                    'Jenis Kelamin' => $user->gender,
                    'Tempat Lahir' => $user->birthplace,
                    'Tanggal Lahir' => $user->birthday,
                    'Alamat' => $user->address,
                    'Email' => $user->email,
                    'Nomor Telepon' => $user->phone,
                    'Departemen' => $user->department
                ]
            ]);
        }  
    }

    //delete user
    public function destroy(User $user) {
        if(Gate::allows('is-admin')) {
            $user->delete();
            return redirect('/user-setting');
        }
    }

}
