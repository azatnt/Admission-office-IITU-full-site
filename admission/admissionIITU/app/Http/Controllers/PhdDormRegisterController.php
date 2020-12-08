<?php

namespace App\Http\Controllers;

use App\Models\PhdDormUser;
use Illuminate\Http\Request;

class PhdDormRegisterController extends Controller
{
    public function create()
    {
        return view('phd_dormitory_registration');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = PhdDormUser::create(request(['name', 'email', 'password']));

        return redirect()->to('/phd');
    }
    //
}
