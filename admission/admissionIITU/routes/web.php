<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/bachelor', function () {
    return view('bachelor');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/phd', function () {
    return view('phd');
});



Route::get('/pupils', function () {
    return view('pupils');
})->name('pupils');

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/schedule', function () {
    return view('schedule');
});



Route::get('/educational_program_bachelor', function () {
    return view('edu_prog_bach');
});

Route::get('/documents_to_download_master', function () {
    return view('doc_to_down_master');
});

Route::get('/documents_for_admission_phd', function () {
    return view('doc_for_admission_phd');
});
use App\Http\Controllers\AdminController;

Route::get('/admission_for_pupils', [AdminController::class, 'admission_customer']);
Route::get('/admission_for_bachelor', [AdminController::class, 'admission_bachelor']);
Route::get('/submission', [AdminController::class, 'submission_customer']);
Route::get('/submissionBachelor', [AdminController::class, 'submission_bachelor']);
Route::get('/olympiad', [AdminController::class, 'olympiad_customer']);
Route::get('/guidebook', [AdminController::class, 'guidebook_customer']);
Route::get('/tuition_fee', [AdminController::class, 'tuition_customer']);
Route::get('/bachelor_tuition_fee', [AdminController::class, 'tuition_bachelor']);
Route::get('/open_days', [AdminController::class, 'open_days_customer']);
Route::get('/magazine', [AdminController::class, 'magazine_customer']);
Route::get('/obrazec_dogovora', [AdminController::class, 'obrazec_dogovora']);




Route::get('/contact_pupil', function () {
    return view('contact_for_pupil');
});

use App\Http\Controllers\ContactController;

Route::post('/contact_pupil/submit', [ContactController:: class, 'submit'])->name('contact_pupil_form');

Route::get('/admin/inbox', [ContactController::class, 'allMessages'])->name('admin_inbox_url');

Route::post('/admin/inbox', [AdminController::class, 'store'])->name('admin_inbox_create_url');

//Route::resource('admin/inbox', [AdminController::class, 'edit']);

Route::get('/admin', function () {
    return view('admin');
})->name('admin_url');


Route::get('/admin/inbox/{id}/edit', [AdminController::class, 'edit'])->name('admin_inbox_edit_url');

Route::put('/admin/inbox/{id}/update', [AdminController::class, 'update'])->name('admin_inbox_update_url');

Route::delete('/admin/inbox/delete/{id}', [AdminController::class, 'delete'])->name('admin_inbox_delete_url');

Route::get('/search', [AdminController::class, 'search']);

Route::get('/filter', [AdminController::class, 'filter']);

Route::get('/admin/reception', [AdminController::class, 'all_receptions'])->name('admin_receptions_url');

Route::post('/admin/reception', [AdminController::class, 'add_receptions'])->name('admin_reception_create_url');

Route::get('/reception', [AdminController::class, 'all_receptions_customer'])->name('admin_reception_customer_url');

Route::get('/admin/reception/{id}/edit', [AdminController::class, 'edit_reception'])->name('admin_reception_edit_url');

Route::put('/admin/reception/{id}/update', [AdminController::class, 'update_reception'])->name('admin_receptions_update_url');

Route::delete('/admin/reception/delete/{id}', [AdminController::class, 'delete_reception'])->name('admin_reception_delete_url');

Route::get('/admin/programs', [AdminController::class, 'all_programs'])->name('admin_programs_url');

Route::post('/admin/programs', [AdminController::class, 'add_programs'])->name('admin_programs_create_url');

Route::get('/admin/program/{id}/edit', [AdminController::class, 'edit_program'])->name('admin_program_edit_url');

Route::put('/admin/program/{id}/update', [AdminController::class, 'update_program'])->name('admin_program_update_url');

Route::delete('/admin/program/delete/{id}', [AdminController::class, 'delete_program'])->name('admin_program_delete_url');




Route::get('/register', [\App\Http\Controllers\RegistrationController::class, 'create']);
Route::post('register', [\App\Http\Controllers\RegistrationController::class, 'store']);

Route::get('/bachelor_dormitory_register',[\App\Http\Controllers\BachelorDormRegisterController::class,'create']);
Route::post('bachelor_dormitory_register',[\App\Http\Controllers\BachelorDormRegisterController::class,'store']);


Route::get('/login', [\App\Http\Controllers\SessionsController::class, 'create']);
Route::post('/login', [\App\Http\Controllers\SessionsController::class, 'store']);
Route::get('/logout', [\App\Http\Controllers\SessionsController::class, 'destroy']);

//use App\Http\Controllers\pdfController;

//Route::get('pdfview',[pdfController::class, 'pdfview']);

Route::get('/admin/pupils/admission', [AdminController::class, 'pupil_admission'])->name('admin_pupil_admission_url');

Route::post('/admin/pupils/admission', [AdminController::class, 'add_pupils_admission'])->name('admin_pupil_create_url');

Route::get('/admin/pupil/{id}/edit', [AdminController::class, 'edit_pupil_admission'])->name('admin_pupil_edit_url');

Route::put('/admin/pupil/{id}/update', [AdminController::class, 'update_pupil_admission'])->name('admin_pupil_update_url');

Route::delete('/admin/pupil/delete/{id}', [AdminController::class, 'delete_pupil_admission'])->name('admin_pupil_delete_url');


Route::get('/admin/pupils/open_days', [AdminController::class, 'pupil_open_days'])->name('admin_pupil_open_days_url');

Route::post('/admin/pupils/open_days', [AdminController::class, 'add_pupils_open_days'])->name('admin_pupil_open_days_create_url');

Route::get('/admin/pupils/open_days/{id}/edit', [AdminController::class, 'edit_pupil_open_days'])->name('admin_pupil_open_days_edit_url');

Route::put('/admin/pupil/open_days/{id}/update', [AdminController::class, 'update_pupil_open_days'])->name('admin_pupil_open_day_update_url');

Route::delete('/admin/pupil/open_days/delete/{id}', [AdminController::class, 'delete_pupil_open_days'])->name('admin_pupil_open_days_delete_url');


Route::get('/admin/pupils/magazine', [AdminController::class, 'pupil_magazine'])->name('admin_pupil_magazine_url');

Route::post('/admin/pupils/magazine', [AdminController::class, 'add_pupils_magazine'])->name('admin_pupil_magazine_create_url');

Route::delete('/admin/pupil/open_days/delete/{id}', [AdminController::class, 'delete_pupil_magazine'])->name('admin_pupil_magazine_delete_url');
