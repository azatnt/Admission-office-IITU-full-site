<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('login');
    }


    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }

        if(Auth::user()->hasRole('admin')){
            return redirect()->to('admin');
        }
        return redirect()->to('/');

    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }


//    public function redirectTo(){
//        if(Auth::user()->hasRole('admin')){
//            $this->redirectTo() = route('admin_url');
//            return $this->redirectTo();
//        }
//        $this->redirectTo() = route('/');
//    }

}

