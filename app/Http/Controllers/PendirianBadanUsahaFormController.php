<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PendirianBadanUsahaFormController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nomor_telepon_pt' => 'required',
            'paket' => 'required|string',
            'nama_perusahaan' => 'required|string',
        ], [
            'nama.required' => 'Nama harus diisi',
            'nomor_telepon_pt.required' => 'Nomor telepon harus diisi',
            'nomor_telepon_pt.phone' => 'Nomor telepon tidak valid',
            'paket.required' => 'Paket harus diisi',
            'nama_perusahaan.required' => 'Nama perusahaan harus diisi',
        ]);


        try {
            // throw if MAIL_RECEIVER is not set
            $mailReceiver = env('MAIL_RECEIVER');

            if (!$mailReceiver) {
                throw new \Exception('MAIL_RECEIVER is not set in .env');
            }

            Mail::to($mailReceiver)
                ->send(
                    new \App\Mail\PendirianBadanUsahaMail(
                        namaLengkap: $request->input('nama'),
                        nomorTelepon: $request->input('nomor_telepon_pt'),
                        namaPaket: $request->input('paket'),
                        namaPerusahaan: $request->input('nama_perusahaan'),
                        paketPendirian: $request->input('nama_paket'),
                    )
                );

            return redirect()->back()->with('success', 'Pesan berhasil dikirim');
        } catch (\Throwable $e) {
            logger($e);
            return redirect()->back()->with('error', 'Pesan gagal dikirim');
        }
    }
}
