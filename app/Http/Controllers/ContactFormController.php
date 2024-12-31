<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'company' => 'required|string',
            'position' => 'required|string',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'phone.required' => 'Nomor telepon harus diisi',
            'company.required' => 'Nama perusahaan harus diisi',
            'position.required' => 'Jabatan harus diisi',
        ]);

        try {
            Mail::to('nack.gaull@gmail.com')
                ->send(
                    new \App\Mail\ContactMail(
                        userName: $request->input('name'),
                        userEmail: $request->input('email'),
                        userPhone: $request->input('phone'),
                        namaPerusahaan: $request->input('company'),
                        userJabatan: $request->input('position'),
                        isiSubjek: 'Kontak dari '.$request->input('name'),
                        url: route('home')
                    )
                );

            return redirect()->back()->with('success', 'Pesan berhasil dikirim');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Pesan gagal dikirim');
        }

    }
}
