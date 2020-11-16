<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
//use GuzzleHttp\Psr7\Request;
use App\Models\Programs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Reception;


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


    public function all_receptions(){
        $reception = new Reception();
        return view('admin_reception', ['receptions' => $reception->orderBy('id', 'desc')->get()]);
    }

    public function all_receptions_customer(){
        $reception = new Reception();
        return view('reception', ['receptions' => $reception->orderBy('faculty', 'asc')->get()]);
    }


    public function add_receptions(){
        $reception = new Reception();
        $reception ->faculty = request('faculty');
        $reception ->full_name = request('full_name');
        $reception ->phone = request('phone');

        $reception ->save();
        return redirect()->route('admin_receptions_url')->with('success', 'Your message is created');
    }


    public function edit_reception($id){
        $data = Reception::find($id);
//        echo $data;

        return view('receptions_edit', ['data' => $data]);
    }


    public function update_reception(Request $req, $id){


        $data = Reception::find($id);
        $data ->faculty = $req->input('faculty');
        $data ->full_name = $req->input('full_name');
        $data ->phone = $req->input('phone');
        $data->save();
//        echo $data;
        return redirect()->route('admin_receptions_url');

    }


    public function delete_reception($id){
        Reception::find($id)->delete();

        return redirect()->route('admin_receptions_url');
    }



    public function all_programs(){
        $programs = Programs::all();
//        return view('admin_programs', ['programs' => $programs->orderBy('id', 'desc')->get()]);
        return view('admin_programs', compact('programs', $programs));

    }


    public function add_programs(Request $request){
        $programs = new Programs();
        $programs ->title = $request->input('title');
        $programs ->amount = $request->input('amount');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/programs/', $filename);

            $programs->image = $filename;
        } else {
            return $request;
            $programs->image = '';
        }
        $programs ->save();
        return redirect()->route('admin_programs_url')->with('success', 'Your message is created');
    }

    public function smth($id){
        Reception::find($id)->delete();

        return redirect()->route('admin_receptions_url');
    }


}
