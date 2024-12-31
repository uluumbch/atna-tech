<x-mail::message>
# Pesan baru dari website

Kontak baru telah mengisi form kontak di website.

<x-mail.right-table :rows="[
    'Name' => $userName,
    'Email' => $userEmail,
    'Nomor Telepon' => $userPhone,
    'Nama Perusahaan' => $namaPerusahaan,
    'Jabatan' => $userJabatan,
]" />

Anda dapat download file contact untuk menyimpan data kontak.
</x-mail::message>
