@extends('layouts.main')

@section('title', 'Atna Office')
@section('content')
    <section class="min-h-screen mb-10 flex items-center relative pt-20 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/pexels-lkloeppel-466685.jpg') }}')">
        <div class="absolute inset-0 bg-primary-600/80 z-10"></div>
        <div class="container max-w-screen-md text-slate-50 text-justify mx-auto relative z-20">
            <h1 class="font-bold text-3xl lg:text-6xl text-center">
                Inovasi Produk Pilihan Untuk Melengkapi Kebutuhan Office Anda
            </h1>
            <p class="px-4 text-lg mt-5">
                Ingin mempunyai kantor dengan fasilitas lengkap ? Atau punya kantor baru dan anda butuh infrasturktur tanpa
                harus mencari banyak vendor ?
            </p>

            <p class="px-4 text-lg mt-5">
                Dengan Atna Office kamu bisa mewujudkan semuanya dan tidak pakai ribet !
            </p>

            <p class="px-4 text-lg mt-5">
                Ayo beralih ke Atna Office untuk mendapatkan Fasilitas dan Jaringan kantor yang berkualitas

            </p>

            <p class="px-4 text-lg mt-5">
                Dengan sekali Click anda bisa mendapatkan fasilitas IP PBX, Instalasi CCTV, Smart Door Lock, dan kebutuhan
                kantor lainnya tanpa kesulitan
            </p>

            <p class="px-4 text-lg mt-5">
                Fokus kepada pengembangan bisnis anda biar kami yang mengurus kebutuhan kantor anda !
            </p>
            <a href="#keuntungan" x-on:click.prevent="$scrollTo"
                class="mx-4 inline-flex items-center
            bg-primary-100 text-slate-800 px-4 py-2 rounded-lg z-10">
                Info Lebih Lanjut
                <svg class="w-8 h-8 rotate-90" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
                </svg>
            </a>
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 gap-4 gap-y-10 p-4" id="paket">
        <!-- Left Column -->
        <div class="space-y-4 order-last md:order-first">
            <!-- First Stack -->
            <div class="relative flex w-full flex-col rounded-xl bg-gray-100 bg-clip-border text-gray-700 shadow-md">
                <div class="relative mx-4 -mt-6 h-52 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40"
                    style="background-image: url('{{ asset('images/pexels-lkloeppel-466685.jpg') }}'); background-size: cover; background-position: center;">
                </div>
                <div class="p-6">
                    <h5
                        class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Paket Office
                    </h5>
                    <div class="p-4 bg-primary-200 rounded-lg my-2">
                        <h2 class="font-bold">Hot Promo !!</h2>
                        <p>Hanya dengan Rp 35.200.000 anda bisa dapatkan semua item ini</p>
                    </div>
                    <div class="">
                        <ul class="space-y-4">
                            @php
                                $paketOffice = [
                                    'Office Printer',
                                    'Instalasi Wifi & Access Point',
                                    'IP PBX + Instalasi',
                                    'Smart Door Lock (Gratis mesin Absensi) + Instalasi',
                                    'CCTV 4 Channel + Instalasi',
                                ];
                            @endphp
                            @foreach ($paketOffice as $paket)
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path
                                            d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="text-lg">{{ $paket }}</span>
                                </li>
                            @endforeach
                        </ul>
                        {{-- snk --}}
                        <p class="text-xs mt-5">
                            * Syarat dan Ketentuan Berlaku
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <button data-ripple-light="true" type="button"
                        class="select-none rounded-lg bg-primary-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-primary-500/20 transition-all hover:shadow-lg hover:shadow-primary-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Read More
                    </button>
                </div>
            </div>
            <!-- Second Stack -->
            <!-- Form at the Bottom -->
            <div class="p-4 bg-gray-100 rounded-lg">
                <h2 class="font-bold mb-4 text-xl">Form Pengadaan Barang</h2>
                <form class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="text" id="phone" name="phone"
                            class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="items" class="block text-sm font-medium text-gray-700">Barang yang
                            Dibutuhkan</label>
                        <textarea id="items" name="items" rows="3" class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                            placeholder="Contoh: Safety Deposit Box, Kursi dan Meja Kantor, Monitor, dll"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-primary-500 text-white p-2 rounded-md hover:bg-primary-600">Submit</button>
                </form>
            </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-4">
            <div class="relative flex w-full flex-col rounded-xl bg-gray-100 bg-clip-border text-gray-700 shadow-md">
                <div class="relative mx-4 -mt-6 h-52 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40"
                    style="background-image: url('{{ asset('images/pexels-sara-734725946-29487999.jpg') }}'); background-size: cover; background-position: center;">
                </div>
                <div class="p-6">
                    <h5
                        class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                        Paket Office + Pendirian PT

                    </h5>
                    <div class="p-4 bg-primary-200 rounded-lg my-2">
                        <h2 class="font-bold">Hot Promo !!</h2>
                        <p>Hanya dengan Rp 46.000.000 anda bisa dapatkan semua item ini</p>
                    </div>
                    <div class="">
                        <ul class="space-y-4">
                            @php
                                $paketOffice = [
                                    'FREE Konsultasi',
                                    'Pengecekan Nama PT Biasa',
                                    'Akta Notaris',
                                    'SK Kemenkumham',
                                    'NPWP Perusahaan',
                                    'EFIN Pajak Perusahaan',
                                    'SKT (Surat Keterangan Terdaftar)',
                                    'Akun OSS',
                                    'NIB (Nomor Induk Berusaha)',
                                    'Rekening Perusahaan',
                                    'Website',
                                    'Logo Perusahaan',
                                    'Email Perusahaan 10 user',
                                    'Pembuatan BPJS Ketenagakerjaan',
                                    'Template & cetak Kartu Nama',
                                    'Template & cetak Kop Surat',
                                    'Template & cetak Amplop',
                                    'Stempel Perusahaan',
                                    'Office Printer',
                                    'Instalasi Wifi & Access Point',
                                    'IP PBX + Instalasi',
                                    'Smart Door Lock (Gratis mesin absensi) + Instalasi',
                                    'CCTV 4 Channel + Instalasi',
                                ];
                            @endphp
                            @foreach ($paketOffice as $paket)
                                <li class="flex items-start gap-3">
                                    <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path
                                            d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="text-lg">{{ $paket }}</span>
                                </li>
                            @endforeach
                        </ul>
                        {{-- snk --}}
                        <p class="text-xs mt-5">
                            * Syarat dan Ketentuan Berlaku
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <button data-ripple-light="true" type="button"
                        class="select-none rounded-lg bg-primary-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-primary-500/20 transition-all hover:shadow-lg hover:shadow-primary-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Read More
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
