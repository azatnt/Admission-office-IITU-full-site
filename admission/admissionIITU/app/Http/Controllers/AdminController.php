<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AdminController extends Controller
{
    public function create(){
        return view('admin_message_create');
    }

    public function store(){
        $contact = new Contact();
        $contact ->name = request('name');
        $contact ->phone = request('phone');
        $contact ->message = request('message');

        $contact ->save();
        return redirect()->route('admin_inbox_create_url')->with('success', 'Your message is created');
    }

    public function edit($id){
        $data = Contact::find($id);
//        echo $data;

        return view('messages_edit', ['data' => $data]);
    }

    public function update(Request $req, $id){


        $data = Contact::find($id);
        $data ->name = $req->input('name');
        $data ->phone = $req->input('phone');
        $data ->message = $req->input('message');
        $data->save();
//        echo $data;
        return redirect()->route('admin_inbox_create_url');

    }

    public function delete($id){
        Contact::find($id)->delete();

        return redirect()->route('admin_inbox_create_url');
    }


    public function search(Request $request){
        $search = $request->get('search');
        $result = DB::table('contacts')->where('name', 'like', '%'.$search.'%');
        $result = $result->get();
        return view('admin_inbox', ['messages'=>$result]);
    }


    public function filter(Request $request, Contact $contact){
        $fromDate = $request->get('from_date');
        $toDate = $request->get('to_date');
        $contact = $contact->newQuery();


        if ($request->has('from_date') && $request->has('to_date')) {
            $contact->whereBetween('created_at', [$fromDate, $toDate]);
        }
        $results = $contact->get();

        return view('admin_inbox', ['messages'=>$results]);

    }

}
