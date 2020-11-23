<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
//use GuzzleHttp\Psr7\Request;
use App\Models\Programs;
use App\Models\PupilAdmission;
use App\Models\PupilMagazine;
use App\Models\PupilOpenDay;
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
//        return response()->file();
        return view('admin_programs', compact('programs', $programs));

    }


    public function add_programs(Request $request){
        $programs = new Programs();
        $programs ->title = request('title');
        $programs ->amount = request('amount');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
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

    public function edit_program($id){
        $program = Programs::find($id);
        return view('program_edit', ['program' => $program]);
    }


    public function update_program(Request $request, $id){
        $program = Programs::find($id);
        $program->title = request('title');
        $program->amount = request('amount');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/programs/', $filename);
            $program->image = $filename;
        }

        $program->save();

        return redirect()->route('admin_programs_url');
    }

    public function delete_program($id){
        Programs::find($id)->delete();

        return redirect()->route('admin_programs_url');
    }

    public function pupil_admission(){
        $pupil = PupilAdmission::all();
//        return view('admin_programs', ['programs' => $programs->orderBy('id', 'desc')->get()]);
//        return response()->file();
        return view('admin_pupils', compact('pupil', $pupil));

    }

    public function add_pupils_admission(Request $request){
        $pupil = new PupilAdmission();
        $pupil->admission_regulations = request('admission');
        $pupil->submission_documents = request('submission');
        $pupil->olympiad = request('olympiad');

        if ($request->hasfile('guidebook')) {
            $file = $request->file('guidebook');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/pupils/', $filename);

            $pupil->guidebook = $filename;
        } else {
            return $request;
            $pupil->guidebook = '';
        }

        if ($request->hasfile('tuition_fee')) {
            $file = $request->file('tuition_fee');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/pupils/', $filename);

            $pupil->tuition_fee = $filename;
        } else {
            return $request;
            $pupil->tuition_fee = '';
        }

        $pupil ->save();
        return redirect()->route('admin_pupil_admission_url')->with('success', 'Your message is created');
    }

    public function edit_pupil_admission($id){
        $pupil = PupilAdmission::find($id);
        return view('pupil_admission_edit', ['pupil' => $pupil]);
    }


    public function update_pupil_admission(Request $request, $id){
        $pupil = PupilAdmission::find($id);

        $pupil->admission_regulations = request('admission');
        $pupil->submission_documents = request('submission');
        $pupil->olympiad = request('olympiad');

        if ($request->hasfile('guidebook')) {
            $file = $request->file('guidebook');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/pupils/', $filename);

            $pupil->guidebook = $filename;
        } else {
            return $request;
            $pupil->guidebook = '';
        }

        if ($request->hasfile('tuition_fee')) {
            $file = $request->file('tuition_fee');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/pupils/', $filename);

            $pupil->tuition_fee = $filename;
        } else {
            return $request;
            $pupil->tuition_fee = '';
        }

        $pupil->save();

        return redirect()->route('admin_pupil_admission_url')->with('success', 'Your message is created');

    }

    public function delete_pupil_admission($id){
        PupilAdmission::find($id)->delete();

        return redirect()->route('admin_pupil_admission_url');
    }

    public function admission_customer(){
        $pupil = PupilAdmission::all();
        return view('adm_for_pupils', ['pupil' => $pupil]);
    }
    public function submission_customer(){
        $pupil = PupilAdmission::all();
        return view('submission', ['pupil' => $pupil]);
    }
    public function olympiad_customer(){
        $pupil = PupilAdmission::all();
        return view('olympiad', ['pupil' => $pupil]);
    }
    public function guidebook_customer(){
        $pupil = PupilAdmission::all();
        return view('guidebook', ['pupil' => $pupil]);
    }
    public function tuition_customer(){
        $pupil = PupilAdmission::all();
        return view('tuition', ['pupil' => $pupil]);
    }
    public function open_days_customer(){
        $pupil = PupilOpenDay::all();
        return view('open_days', ['pupil' => $pupil]);
    }
    public function magazine_customer(){
        $pupil = new PupilMagazine();
        return view('educational_magazine', ['pupil' => $pupil->orderBy('id', 'desc')->get()]);
    }



    public function pupil_open_days(){
        $pupil = PupilOpenDay::all();

        return view('admin_pupil_open_days', compact('pupil', $pupil));

    }

    public function add_pupils_open_days(){
        $pupil = new PupilOpenDay();
        $pupil ->title = request('title');
        $pupil ->description = request('description');
        $pupil ->date = request('date');

        $pupil ->save();
        return redirect()->route('admin_pupil_open_days_url')->with('success', 'Your message is created');
    }

    public function edit_pupil_open_days($id){
        $pupil = PupilOpenDay::find($id);

        return view('pupil_open_day_edit', ['pupil' => $pupil]);
    }


    public function update_pupil_open_days(Request $req, $id){


        $pupil = PupilOpenDay::find($id);
        $pupil ->title = $req->input('title');
        $pupil ->description = $req->input('description');
        $pupil ->date = $req->input('date');
        $pupil->save();
        return redirect()->route('admin_pupil_open_days_url');

    }


    public function delete_pupil_open_days($id){
        PupilOpenDay::find($id)->delete();

        return redirect()->route('admin_pupil_open_days_url');
    }


    public function pupil_magazine(){
        $pupil = PupilMagazine::all();

        return view('admin_pupil_magazine', compact('pupil', $pupil));

    }


    public function add_pupils_magazine(Request $request){
        $pupil = new PupilMagazine();

        if ($request->hasfile('files')) {
            $file = $request->file('files');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/pupils/', $filename);

            $pupil->files = $filename;
        } else {
            return $request;
            $pupil->files = '';
        }

        $pupil->save();

        return redirect()->route('admin_pupil_magazine_url')->with('success', 'Your message is created');

    }

    public function delete_pupil_magazine($id){
        PupilMagazine::find($id)->delete();

        return redirect()->route('admin_pupil_magazine_url');
    }

}









