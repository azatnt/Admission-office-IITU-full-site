<?php

namespace App\Http\Controllers;

use App\Models\BachDormUser;
use Illuminate\Http\Request;

class BachelorDormRegisterController extends Controller
{
    //

    public function create()
    {
        return view('bachelor_dormitory_registration');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = BachDormUser::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/');
    }
}
