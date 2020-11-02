<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller
{
    public function submit(ContactRequest $req){
//        dd($req);
        $contact = new Contact();
        $contact ->name = $req->input('name');
        $contact ->phone = $req->input('phone');
        $contact ->message = $req->input('message');

        $contact ->save();

        return redirect()->route('pupils')->with('success', 'Your messages are sent');
    }

    public function allMessages(){
        $contact = new Contact();
        return view('admin_inbox', ['messages' => $contact->orderBy('id', 'desc')->get()]);
    }
}
