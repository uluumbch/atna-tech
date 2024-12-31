<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/consulting', function () {
    return view('consulting');
})->name('consulting');

Route::get('/office', function () {
    return view('office');
})->name('office');

Route::get('/it', function () {
    return view('it');
})->name('it');

Route::get('/pendirian-badan-usaha', function () {
    return view('pendirian-badan-usaha');
})->name('pendirian-badan-usaha');

Route::get('/s', function () {
    // return new \App\Mail\ContactMail(
    //     userName: 'Bachrul Uluum',
    //     userEmail: 'uluum123@gmail.com',
    //      userPhone: 'isi subjek',
    //      namaPerusahaan: 'nama perusahaan',
    //         userJabatan: 'jabatan',
    //         isiSubjek: 'isi subjek',
    //      url: route('home')
    //     );
    dd(
        Mail::to('nack.gaull@gmail.com')
            ->send(
                new \App\Mail\ContactMail(
                    userName: 'Bachrul Uluum',
                    userEmail: 'uluum123@gmail.com',
                    userPhone: 'isi subjek',
                    namaPerusahaan: 'nama perusahaan',
                    userJabatan: 'jabatan',
                    isiSubjek: 'isi subjek',
                    url: route('home')
                )
            )
    );
});

Route::post('/contact', \App\Http\Controllers\ContactFormController::class)->name('contact');
