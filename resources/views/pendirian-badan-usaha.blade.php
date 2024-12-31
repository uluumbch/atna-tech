@extends('layouts.main')

@section('title', 'Atna Consulting')
@section('content')
    <section class="min-h-screen mb-10 flex items-center relative pt-20 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/pexels-lkloeppel-466685.jpg') }}')">
        <div class="absolute inset-0 bg-primary-600/80 z-10"></div>
        <div class="container max-w-screen-md text-slate-50 text-justify mx-auto relative z-20">
            <h1 class="font-bold text-3xl lg:text-6xl text-center">
                Solusi Terbaik Untuk Perizinan dan Pendirian Badan Usaha
            </h1>
            <p class="px-4 text-lg mt-5">
                <span class="font-semibold">
                    ATNA Consulting
                </span>
                hadir berkomitmen penuh untuk membantu para Start Up, Perusahaan Menengah dan Perusahaan Besar dalam
                mewujudkan bisnis impian anda dengan mudah.
            </p>

            <p class="px-4 text-lg mt-5">
                Dengan dibantu oleh tim ahli kami yang sudah berpengalaman dalam bidang perizinan dan pendirian badan usaha,
                kami percaya dapat memberikan solusi yang tepat dan efektif untuk memenuhi kebutuhan bisnis anda.
            </p>

            <p class="px-4 text-lg mt-5">
                Di saat yang lain hanya mampu mengurus pendirian badan usaha, ATNA Consulting mampu memberikan kelebihan
                lainnya
            </p>

            <p class="px-4 text-lg mt-5">
                Bergabunglah sekarang juga dan nikmati layanan terbaik dari kami.
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


    <section class="container mx-auto px-4 py-8">
        <h1 class="font-extrabold text-4xl text-center mb-10">
            Berikut adalah layanan pendirian usaha terbaik kami, Mulai dari Rp 2.000.000 anda sudah bisa mendirikan
            perusahaan sendiri !!!
        </h1>
        <h1 class="font-extrabold text-4xl text-center mb-10">
            Serta masih banyak promo paket menarik Lainnya khusus di bulan ini !!!
        </h1>
    </section>

    <div class="bg-gray-100 max-w-screen-xl mx-auto px-4 py-8 rounded-xl my-5">
        {{-- image as bg-cover full width rounded --}}
        <div class="bg-cover bg-center bg-no-repeat rounded-lg">
            <img src="https://via.placeholder.com/1920x1080" alt="placeholder" class="w-full h-full rounded-lg">
        </div>

    </div>

    <section class="bg-gray-100" id="pt">
        <div class="container mx-auto px-4 py-16">
            @php
                $PT = [
                    'FREE Konsultasi',
                    'Pengecekan Nama PT',
                    'Akta Notaris',
                    'SK Kemenkumham',
                    'NPWP Perusahaan',
                    'EFIN Pajak Perusahaan',
                    'SKT (Surat Keterangan Terdaftar)',
                    'Akun OSS',
                    'NIB (Nomor Induk Berusaha)',
                    'Rekening Perusahaan',
                    'BPJS Ketenagakerjaan',
                    'Virtual Office /1 tahun',
                    'Logo Perusahaan',
                    'Email Perusahaan',
                    'Website',
                    'Template Kartu Nama',
                    'Template Kop Surat',
                    'Template & cetak Amplop',
                    'Stempel Perusahaan',
                ];
            @endphp
            <div class="flex flex-col items-center mt-5">
                <p class="text-2xl font-extrabold">PROMO!!!</p>
                <p class="text-3xl font-bold inline-block">
                    Paket Pendirian PT
                </p>
                <p class="text-lg inline-block">
                    *Mulai Dari Rp 6.500.000
                </p>
            </div>
            {{-- pricing paket pendirian PT --}}
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3  mx-auto w-max my-5">

                <x-price-card title="Business Starter" :original-price="6800000" :discount-price="6500000" :features="$PT"
                    :included-features-count="10" button-text="Pilih Paket" modal-target="modal-paket" data-custom="perusahaan" data-nama-paket="Paket Pendirian PT" />

                <x-price-card title="Business Standard" :original-price="8600000" :discount-price="8550000" :features="$PT"
                    :included-features-count="14" button-text="Pilih Paket" modal-target="modal-paket" data-custom="perusahaan" data-nama-paket="Paket Pendirian PT" />

                <x-price-card title="Business Complete" :original-price="10200000" :discount-price="9528000" :features="$PT"
                    :included-features-count="19" button-text="Pilih Paket" modal-target="modal-paket" data-custom="perusahaan" data-nama-paket="Paket Pendirian PT" />
            </div>

        </div>
    </section>

    <section class="bg-gray-50" id="pma">
        <div class="container mx-auto px-4 py-16">
            @php
                $PT = [
                    'FREE Konsultasi',
                    'Pengecekan Nama PMA',
                    'Akta Notaris',
                    'SK Kemenkumham',
                    'NPWP Perusahaan',
                    'EFIN Pajak Perusahaan',
                    'SKT (Surat Keterangan Terdaftar)',
                    'Akun OSS',
                    'NIB (Nomor Induk Berusaha)',
                    'Rekening Perusahaan',
                    'Logo Perusahaan',
                    'Email Perusahaan',
                    'Virtual Office /1 tahun',
                    'BPJS Ketenagakerjaan',
                    'Website',
                    'Kartu Nama',
                    'Kop Surat',
                    'Design Amplop Perusahaan',
                    'Stempel Perusahaan',
                ];
            @endphp
            <div class="flex flex-col items-center mt-5">
                <p class="text-2xl font-extrabold">PROMO!!!</p>
                <p class="text-3xl font-bold inline-block">
                    Paket Pendirian PMA
                </p>
                <p class="text-lg inline-block">
                    *Mulai Dari Rp 12.500.000
                </p>
            </div>
            {{-- pricing paket pendirian PT --}}
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3  mx-auto w-max my-5">

                <x-price-card title="Business Starter" :original-price="13500000" :discount-price="12500000" :features="$PT"
                    :included-features-count="10" button-text="Pilih Paket" modal-target="modal-paket" data-custom="perusahaan"
                    data-nama-paket="Pendirian PMA" />

                <x-price-card title="Business Standard" :original-price="15500000" :discount-price="14500000" :features="$PT"
                    :included-features-count="14" button-text="Pilih Paket" modal-target="modal-paket" data-custom="perusahaan"
                    data-nama-paket="Pendirian PMA" />

                <x-price-card title="Business Complete" :original-price="17500000" :discount-price="16000000" :features="$PT"
                    :included-features-count="19" button-text="Pilih Paket" modal-target="modal-paket" data-custom="perusahaan"
                    data-nama-paket="Pendirian PMA" />
            </div>

        </div>
    </section>

    <section class="bg-gray-100" id="pt-perorangan">
        <div class="container mx-auto px-4 py-16">
            @php
                $PT = [
                    'FREE Konsultasi',
                    'Pengecekan Nama PT Perorangan',
                    'Akta Notaris',
                    'SK Kemenkumham',
                    'NPWP Perusahaan',
                    'EFIN Pajak Perusahaan',
                    'SKT (Surat Keterangan Terdaftar)',
                    'Akun OSS',
                    'NIB (Nomor Induk Berusaha)',
                    'Rekening Perusahaan',
                    'Logo Perusahaan',
                    'Company Profile',
                    'Email Perusahaan',
                    'BPJS Ketenagakerjaan',
                    'Kartu Nama',
                    'Kop Surat',
                    'Design Amplop Perusahaan',
                    'Stempel Perusahaan',
                    'Website',
                ];
            @endphp
            <div class="flex flex-col items-center mt-5">
                <p class="text-2xl font-extrabold">PROMO!!!</p>
                <p class="text-3xl font-bold inline-block">
                    Paket Pendirian PT Perorangan
                </p>
                <p class="text-lg inline-block">
                    *Mulai Dari Rp 2.000.000
                </p>
            </div>

            {{-- pricing paket pendirian PT --}}
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3  mx-auto w-max my-5">

                <x-price-card title="Business Starter" :original-price="2500000" :discount-price="2000000" :features="$PT"
                    :included-features-count="12" button-text="Pilih Paket" modal-target="modal-paket" data-custom="perusahaan" data-nama-paket="Paket Pendirian PT Perorangan" />

                <x-price-card title="Business Standard" :original-price="3500000" :discount-price="3250000" :features="$PT"
                    :included-features-count="14" button-text="Pilih Paket" modal-target="modal-paket" data-custom="perusahaan" data-nama-paket="Paket Pendirian PT Perorangan" />

                <x-price-card title="Business Complete" :original-price="4800000" :discount-price="4500000" :features="$PT"
                    :included-features-count="19" button-text="Pilih Paket" modal-target="modal-paket" data-custom="perusahaan" data-nama-paket="Paket Pendirian PT Perorangan" />
            </div>

        </div>
    </section>

    <section class="bg-gray-50">
        <div class="container mx-auto px-4 py-16">
            @php
                $yayasan = [
                    'FREE Konsultasi',
                    'Pengecekan Nama yayasan',
                    'Akta Notaris',
                    'SK Kemenkumham',
                    'NPWP Perusahaan',
                    'EFIN Pajak Perusahaan',
                    'SKT (Surat Keterangan Terdaftar)',
                    'Akun OSS',
                    'NIB (Nomor Induk Berusaha)',
                    'Rekening Bank',
                    'Logo Yayasan',
                    'Profile Yayasan',
                ];

                $koperasi = [
                    'FREE Konsultasi',
                    'Pengecekan Nama Koperasi',
                    'Akta Notaris',
                    'SK Kemenkumham',
                    'NPWP Perusahaan',
                    'EFIN Pajak Perusahaan',
                    'SKT (Surat Keterangan Terdaftar)',
                    'Akun OSS',
                    'NIB (Nomor Induk Berusaha)',
                    'Rekening Bank',
                    'Logo Koperasi',
                    'Website Koperasi',
                ];

                $perkumpulan = [
                    'FREE Konsultasi',
                    'Pengecekan Nama Perkumpulan',
                    'Akta Notaris',
                    'SK Kemenkumham',
                    'NPWP Perusahaan',
                    'EFIN Pajak Perusahaan',
                    'SKT (Surat Keterangan Terdaftar)',
                    'Akun OSS',
                    'NIB (Nomor Induk Berusaha)',
                    'Rekening Bank',
                    'Logo Perkumpulan',
                    'Website Perkumpulan',
                ];
            @endphp
            {{-- <div class="flex flex-col items-center mt-5">
                <p class="text-2xl font-extrabold">PROMO!!!</p>
                <p class="text-3xl font-bold inline-block">
                    Paket Pendirian PT Perorangan
                </p>
                <p class="text-lg inline-block">
                    *Mulai Dari Rp 2.000.000
                </p>
            </div> --}}

            {{-- pricing paket pendirian PT --}}
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3  mx-auto w-max my-5">

                <x-price-card id="yayasan" title="Paket Pendirian Yayasan" :original-price="5000000" :discount-price="5000000"
                    :features="$yayasan" :included-features-count="count($yayasan)" button-text="Pilih Paket" modal-target="modal-paket"
                    data-custom="yayasan" data-nama-paket="Paket Pendirian Yayasan" />

                <x-price-card id="koperasi" title="Paket Pendirian Koperasi" :original-price="8000000" :discount-price="8000000"
                    :features="$koperasi" :included-features-count="count($koperasi)" button-text="Pilih Paket" modal-target="modal-paket"
                    data-custom="koperasi"  data-nama-paket="Paket Pendirian Koperasi"/>

                <x-price-card id="perkumpulan" title="Paket Pendirian Perkumpulan" :original-price="8000000" :discount-price="8000000"
                    :features="$perkumpulan" :included-features-count="count($perkumpulan)" button-text="Pilih Paket" modal-target="modal-paket"
                    data-custom="perkumpulan"  data-nama-paket="Paket Pendirian Perkumpulan"/>
            </div>

        </div>
    </section>

    <section class="bg-gray-100">
        <div class="container mx-auto px-4 py-16" id="cv">
            @php
                $cv = [
                    'FREE Konsultasi',
                    'Pengecekan Nama CV',
                    'Akta Notaris',
                    'SK Kemenkumham',
                    'NPWP Perusahaan',
                    'EFIN Pajak Perusahaan',
                    'SKT (Surat Keterangan Terdaftar)',
                    'Akun OSS',
                    'NIB (Nomor Induk Berusaha)',
                    'Rekening Perusahaan',
                    'Logo Perusahaan',
                    'Company Profile',
                    'BPJS Ketenagakerjaan',
                    'Website',
                    'Virtual Office /1 tahun',
                ];
            @endphp
            <div class="flex flex-col items-center mt-5">
                <p class="text-3xl font-bold inline-block">
                    Paket Pendirian CV
                </p>
            </div>
            {{-- MODAL paket pendirian cv --}}

            {{-- pricing paket pendirian cv --}}
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3  mx-auto w-max my-5">

                <x-price-card title="Business Starter" :original-price="4500000" :discount-price="3900000" :features="$cv"
                    :included-features-count="count($cv) - 3" button-text="Pilih Paket" modal-target="modal-paket" data-nama-paket="Paket Pendirian CV" />
                <x-price-card title="Business Standard" :original-price="5000000" :discount-price="4500000" :features="$cv"
                    :included-features-count="count($cv) - 1" button-text="Pilih Paket" modal-target="modal-paket" data-nama-paket="Paket Pendirian CV" />
                <x-price-card title="Business Complete" :original-price="6800000" :discount-price="6400000" :features="$cv"
                    :included-features-count="count($cv)" button-text="Pilih Paket" modal-target="modal-paket" data-nama-paket="Paket Pendirian CV" />

            </div>

        </div>
    </section>
    <section class="bg-gray-50">
        <div class="container mx-auto px-4 py-16" id="firma">
            @php
                $firma = [
                    'FREE Konsultasi',
                    'Pengecekan Nama Firma',
                    'Akta Notaris',
                    'SK Kemenkumham',
                    'NPWP Perusahaan',
                    'EFIN Pajak Perusahaan',
                    'SKT (Surat Keterangan Terdaftar)',
                    'Akun OSS',
                    'NIB (Nomor Induk Berusaha)',
                    'Rekening Perusahaan',
                    'Logo Perusahaan',
                    'Company Profile',
                    'Email Perusahaan',
                    'BPJS Ketenagakerjaan',
                    'Website',
                    'Template Kartu Nama',
                    'Template Kop Surat',
                    'Template & cetak Amplop',
                    'Stempel Perusahaan',
                    'Virtual Office /1 tahun',
                ];
            @endphp
            <div class="flex flex-col items-center mt-5">
                <p class="text-3xl font-bold inline-block">
                    Paket Pendirian Firma
                </p>
            </div>
            {{-- pricing paket pendirian cv --}}
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3  mx-auto w-max my-5">

                <x-price-card title="Business Starter" :original-price="10000000" :discount-price="9000000" :features="$firma"
                    :included-features-count="count($firma) - 7" button-text="Pilih Paket" modal-target="modal-paket" data-nama-paket="Paket Pendirian Firma" />
                <x-price-card title="Business Standard" :original-price="12500000" :discount-price="10000000" :features="$firma"
                    :included-features-count="count($firma) - 5" button-text="Pilih Paket" modal-target="modal-paket" data-nama-paket="Paket Pendirian Firma" />
                <x-price-card title="Business Complete" :original-price="13500000" :discount-price="12000000" :features="$firma"
                    :included-features-count="count($firma)" button-text="Pilih Paket" modal-target="modal-paket" data-nama-paket="Paket Pendirian Firma" />
            </div>
        </div>
    </section>

    {{-- MODAL --}}
    <div id="modal-paket" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Hubungi kami dan dapatkan penawaran terbaik kami
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-hide="modal-paket">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('form-pendirian-badan-usaha') }}" method="POST">
                        @csrf
                        <div>
                            <label for="Paket" class="block mb-2 text-sm font-medium text-gray-900 ">Paket</label>
                            <input type="text" name="paket" readonly
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "required />
                            @error('paket')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama</label>
                            <input type="text" name="nama" id="nama_pt"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="Nama Anda" required />
                            @error('nama')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor
                                Telepon</label>
                            <input type="tel" name="nomor_telepon_pt" id="nomor_telepon_pt"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="No. Telepon Anda" required />
                            @error('nomor_telepon_pt')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                                <span x-ref="pek" id="nama-dinamis">Perusahaan</span>
                            </label>
                            <input type="text" name="nama_perusahaan" id="nama_perusahaan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="Contoh: PT. Atna Consulting/ CV. Atna Consulting/ Yayasan Atna Consulting"
                                required />
                            @error('nama_perusahaan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                            Dapatkan Penawaran
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    {{-- @push('scripts')
        @vite('resources/js/badan-usaha-modal.js')
    @endpush --}}

@endsection
