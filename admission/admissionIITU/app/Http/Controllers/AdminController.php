<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\BachelorAdmission;
use App\Models\BachelorSubmission;
use App\Models\Contact;
//use GuzzleHttp\Psr7\Request;
use App\Models\MasterConsul;
use App\Models\MasterDocToDown;
use App\Models\MasterStandardAdmission;
use App\Models\MasterSubmission;
use App\Models\ObrazecDogovora;
use App\Models\PhdContactsForConsultation;
use App\Models\PhdEducationalPrograms;
use App\Models\PhdEntranceExamResults;
use App\Models\PhdInstructionForApplicants;
use App\Models\PhdProgramsOfEntrance;
use App\Models\PhdStateOrder;
use App\Models\PhdSubmissionOfDocuments;
use App\Models\PhdTuitionFees;
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
    public function all_phd_programs_admin(){
        $php_programs = new PhdProgramsOfEntrance();
        return view('phd_programs_of_entrance',['phd_programs' => $php_programs->orderBy('id','asc')->get()]);
    }

    public function all_phd_programs_customer(){
        $php_programs = new PhdProgramsOfEntrance();
        return view('phd_programs_of_entrance',['phd_programs' => $php_programs->orderBy('id','asc')->get()]);
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
    public function admission_bachelor(){
        $bachelor = BachelorAdmission::all();
        return view('adm_for_bachelor',['bachelor'=>$bachelor]);
    }
    public function submission_customer(){
        $pupil = PupilAdmission::all();
        return view('submission', ['pupil' => $pupil]);
    }
    public function submission_bachelor(){
        $bachelor = BachelorSubmission::all();
        return view('bachelor_submission',['bachelor' =>$bachelor]);
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
    public function tuition_bachelor(){
        $bachelor = BachelorAdmission::all();
        return view('bachelor_tuition',['bachelor'=>$bachelor]);
    }
    public function open_days_customer(){
        $pupil = PupilOpenDay::all();
        return view('open_days', ['pupil' => $pupil]);
    }
    public function magazine_customer(){
        $pupil = new PupilMagazine();
        return view('educational_magazine', ['pupil' => $pupil->orderBy('id', 'desc')->get()]);
    }
    public function instruction_for_applicants(){
        $phd = new PhdInstructionForApplicants();
        return view('phd_instructions_for_applicants',['phd'=>$phd->orderBy('id','desc')->get()]);
    }
    public function phd_state_order(){
        $phd = new PhdStateOrder();
        return view('phd_state_order',['phd'=>$phd->orderBy('id','desc')->get()]);
    }
    public function phd_contacts_for_consultation(){
        $phd = new PhdContactsForConsultation();
        return view('phd_contacts_for_consultation',['phd'=>$phd->orderBy('id','asc')->get()]);
    }
    public function phd_submission_of_documents(){
        $phd = new PhdSubmissionOfDocuments();
        return view('phd_submission_of_documents',['phd'=>$phd->orderBy('id','asc')->get()]);
    }
    public function phd_tuition_fees(){
        $phd = new PhdTuitionFees();
        return view('phd_tuition_fees',['phd'=>$phd->orderBy('id','asc')->get()]);
    }
    public function phd_educational_programs(){
        $phd = new PhdEducationalPrograms();
        return view('phd_educational_programs',['phd'=>$phd->orderBy('id','asc')->get()]);
    }
    public function phd_entrance_exam_results(){
        $phd = new PhdEntranceExamResults();
        return view('phd_entrance_exam_results',['phd'=>$phd->orderBy('id','asc')->get()]);
    }


    public function obrazec_dogovora(){
        $bachelor = new ObrazecDogovora();
        return view('obrazec_dogovora',['bachelor' => $bachelor->orderBy('id','desc')->get()]);
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


    public function master_contact_consultation(){
        $master = MasterConsul::all();

        return view('admin_master_consultation', compact('master', $master));

    }
    public function phd_admin_contact_consultation(){
        $phd = PhdContactsForConsultation::all();

        return view('admin_phd_consultation',compact('phd',$phd));
    }

    public function add_master_consultation(){
        $master = new MasterConsul();
        $master ->faculty = request('faculty');
        $master ->full_name = request('full_name');
        $master ->phone = request('phone');

        $master ->save();
        return redirect()->route('admin_master_contact_consultation_url')->with('success', 'Your message is created');
    }
    public function add_phd_consultation(){
        $phd = new PhdContactsForConsultation();
        $phd ->faculty = request('faculty');
        $phd ->fullname = request('full_name');
        $phd ->phone = request('phone');

        $phd ->save();
        return redirect()->route('admin_phd_contact_consultation_url')->with('success','Your message is created');
    }


    public function edit_master_consultation($id){
        $data = MasterConsul::find($id);
//        echo $data;

        return view('master_consul_edit', ['data' => $data]);
    }


    public function update_master_consultation(Request $req, $id){


        $data = MasterConsul::find($id);
        $data ->faculty = $req->input('faculty');
        $data ->full_name = $req->input('full_name');
        $data ->phone = $req->input('phone');
        $data->save();
//        echo $data;
        return redirect()->route('admin_master_contact_consultation_url');

    }

    public function delete_master_consultation($id){
        MasterConsul::find($id)->delete();

        return redirect()->route('admin_master_contact_consultation_url');
    }


    public function all_master_consul_customer(){
        $master = new MasterConsul();
        return view('master_consultation', ['master' => $master->orderBy('faculty', 'asc')->get()]);
    }


    public function master_documents_download(){
        $master = MasterDocToDown::all();

        return view('admin_master_documents_download', compact('master', $master));

    }
    public function phd_admin_documents_download(){
        $phd = PhdInstructionForApplicants::all();
        return view('admin_phd_documents_download',compact('phd',$phd));
    }


    public function add_master_documents_download(Request $request){
        $master = new MasterDocToDown();

        if ($request->hasfile('files')) {
            $file = $request->file('files');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/master/', $filename);

            $master->files = $filename;
        } else {
            return $request;
            $master->files = '';
        }

        $master->save();

        return redirect()->route('admin_master_documents_download_url')->with('success', 'Your message is created');

    }
    public function add_phd_documents_download(Request $request){
        $phd = new PhdInstructionForApplicants();

        if ($request->hasfile('files')) {
            $file = $request->file('files');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/master/', $filename);

            $phd->files = $filename;
        } else {
            return $request;
            $phd->files = '';
        }

        $phd->save();

        return redirect()->route('admin_phd_documents_download_url')->with('success', 'Your message is created');

    }


    public function delete_master_documents_to_download($id){
        MasterDocToDown::find($id)->delete();

        return redirect()->route('admin_master_documents_download_url');
    }


    public function customer_master_documents_download(){
        $master = MasterDocToDown::all();

        return view('doc_to_down_master', compact('master', $master));

    }


    public function master_standard_admission_rule(){
        $master = MasterStandardAdmission::all();

        return view('admin_master_standard_admission', compact('master', $master));

    }


    public function add_master_standard_admission_rule(Request $request){
        $master = new MasterStandardAdmission();

        if ($request->hasfile('files')) {
            $file = $request->file('files');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/master/', $filename);

            $master->files = $filename;
        } else {
            return $request;
            $master->files = '';
        }

        $master->save();

        return redirect()->route('admin_master_standard_admission_rule_url')->with('success', 'Your message is created');

    }


    public function delete_master_standard_admission($id){
        MasterStandardAdmission::find($id)->delete();

        return redirect()->route('admin_master_standard_admission_rule_url');
    }


    public function customer_master_standard_admission(){
        $master = MasterStandardAdmission::all();

        return view('master_standard_admission', compact('master', $master));

    }


    public function master_submission(){
        $master = MasterSubmission::all();

        return view('admin_master_submission', compact('master', $master));

    }
    public function phd_admin_submission(){
        $phd = PhdSubmissionOfDocuments::all();
        return view('admin_phd_submission',compact('phd',$phd));
    }

    public function add_master_submission(Request $request){
        $master = new MasterSubmission();

        if ($request->hasfile('prerequisites')) {
            $file = $request->file('prerequisites');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/master/', $filename);

            $master->prerequisites = $filename;
        } else {
            return $request;
            $master->prerequisites = '';
        }

        $master ->submission = request('submission');


        if ($request->hasfile('tuition')) {
            $file = $request->file('tuition');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/master/', $filename);

            $master->tuition = $filename;
        } else {
            return $request;
            $master->tuition = '';
        }


        if ($request->hasfile('diploma')) {
            $file = $request->file('diploma');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/master/', $filename);

            $master->diploma = $filename;
        } else {
            return $request;
            $master->diploma = '';
        }

        $master->save();

        return redirect()->route('admin_master_submission_url')->with('success', 'Your message is created');

    }


    public function edit_master_submission($id){
        $data = MasterSubmission::find($id);
//        echo $data;

        return view('admin_master_submission_edit', ['data' => $data]);
    }



    public function update_master_submission(Request $request, $id){
        $master = MasterSubmission::find($id);

        if ($request->hasfile('prerequisites')) {
            $file = $request->file('prerequisites');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/master/', $filename);

            $master->prerequisites = $filename;
        } else {
            return $request;
            $master->prerequisites = '';
        }

        $master->submission = request('submission');


        if ($request->hasfile('tuition')) {
            $file = $request->file('tuition');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/master/', $filename);

            $master->tuition = $filename;
        } else {
            return $request;
            $master->tuition = '';
        }


        if ($request->hasfile('diploma')) {
            $file = $request->file('diploma');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/master/', $filename);

            $master->diploma = $filename;
        } else {
            return $request;
            $master->diploma = '';
        }

        $master->save();

        return redirect()->route('admin_master_submission_url')->with('success', 'Your message is created');

    }


    public function delete_master_submission($id){
        MasterSubmission::find($id)->delete();

        return redirect()->route('admin_master_submission_url');
    }


    public function prerequisites_customer(){
        $master = MasterSubmission::all();
        return view('master_prerequisites', ['master' => $master]);
    }

    public function master_submission_customer(){
        $master = MasterSubmission::all();
        return view('master_submission', ['master' => $master]);
    }

    public function master_tuition_customer(){
        $master = MasterSubmission::all();
        return view('master_tuition', ['master' => $master]);
    }

    public function master_diploma_customer(){
        $master = MasterSubmission::all();
        return view('master_diploma', ['master' => $master]);
    }
}









