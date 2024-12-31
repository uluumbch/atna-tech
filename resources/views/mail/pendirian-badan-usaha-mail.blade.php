<x-mail::message>
# Pesan baru dari website

Sesorang tertarik dengan {{ $paketPendirian }}.

<x-mail.right-table :rows="[
    'Nama' => $namaLengkap,
    'Nomor Telepon' => $nomorTelepon,
    'Nama Perusahaan' => $namaPerusahaan,
    'Nama Paket' => $namaPaket,
]" />

</x-mail::message>
