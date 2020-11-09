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

Route::get('/reception', function () {
    return view('reception');
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

Route::get('/submission', function () {
    return view('submission');
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

Route::get('/admission_for_pupils', function () {
    return view('adm_for_pupils');
});

Route::get('/contact_pupil', function () {
    return view('contact_for_pupil');
});

use App\Http\Controllers\ContactController;

Route::post('/contact_pupil/submit', [ContactController:: class, 'submit'])->name('contact_pupil_form');

Route::get('/admin/inbox', [ContactController::class, 'allMessages'])->name('admin_inbox_url');

use App\Http\Controllers\AdminController;
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
