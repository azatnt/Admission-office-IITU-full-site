<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration');
    }


    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        $role = Role::select('id')->where('name', 'user')->first();

        $user->roles()->attach($role);
        auth()->login($user);

        return redirect()->to('/');


    }
}
