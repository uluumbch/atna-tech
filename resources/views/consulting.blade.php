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

    <section class="container mx-auto px-4 py-8" id="keuntungan">
        <h1 class="font-extrabold text-4xl text-center mb-10">
            Keuntungan Mendirikan Badan Usaha di ATNA Consulting:
        </h1>

        <div class="max-w-4xl flex flex-col lg:flex-row justify-between mx-auto">
            <div class="">
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="text-lg"><span class="font-semibold">FREE</span> Konsultasi</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="text-lg"><span class="font-semibold">FREE</span> Virtual Office selama 1 s/d 5 Tahun
                            (*)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="text-lg"><span class="font-semibold">FREE</span> Pembuatan Logo, Company Profile,
                            Website
                            dan Email Perusahaan (*)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="text-lg"><span class="font-semibold">FREE</span> Pembukaan Rekening Perusahaan
                            (*)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="text-lg"><span class="font-semibold">FREE</span> Template Kartu Nama, Kop Surat, Amplop
                            (*)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="text-lg"><span class="font-semibold">FREE</span> Stempel Perusahaan (*)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="text-lg"><span class="font-semibold">FREE</span> BPJS Ketenagakerjaan (*)</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="text-lg"><span class="font-semibold">FREE</span> Office Printer (*)</span>
                    </li>
                </ul>
                {{-- snk --}}
                <p class="text-xs mt-5">
                    * Syarat dan Ketentuan Berlaku
                </p>
            </div>
            <div class="">
                <img src="https://via.placeholder.com/300" alt="placeholder"
                    class="w-full h-full object-cover rounded-lg">
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 py-8">
        <h1 class="font-extrabold text-4xl text-center mb-10">
            Pilih sekarang !! mulai dari Rp 2.000.000 anda sudah bisa mendirikan perusahaan sendiri secara sah dan terdaftar
            !
        </h1>
    </section>


    <section class="bg-gray-100">
        <div class="container mx-auto px-4 py-16">
            <h1 class="font-extrabold text-4xl text-center mb-10">
                Pendirian Badan Usaha
            </h1>

            @php
                $BadanUsaha = [
                    [
                        'name' => 'Pendirian PT Perorangan',
                        'price' => 'Rp 2.000.000',
                        'promo' => '*Paket Promo',
                    ],
                    [
                        'name' => 'Pendirian PT',
                        'price' => 'Rp 6.500.000',
                        'promo' => '*Paket Promo',
                    ],
                    [
                        'name' => 'Pendirian PMA',
                        'price' => 'Rp 12.500.000',
                        'promo' => '*Paket Promo',
                    ],
                    [
                        'name' => 'Pendirian CV',
                        'price' => 'Rp 3.900.000',
                    ],
                    [
                        'name' => 'Pendirian Firma',
                        'price' => 'Rp 9.000.000',
                    ],
                    [
                        'name' => 'Pendirian Koperasi',
                        'price' => 'Rp 8.000.000',
                    ],
                    [
                        'name' => 'Pendirian Yayasan',
                        'price' => 'Rp 5.000.000',
                    ],
                    [
                        'name' => 'Pendirian Perkumpulan',
                        'price' => 'Rp 8.000.000',
                    ],
                ];
            @endphp

            <div class="flex flex-col lg:flex-row justify-between gap-4">
                <div class="my-auto">
                    @foreach ($BadanUsaha as $item)
                        {{-- <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                </path>
                            </svg>
                            <p class="text-lg"><span class="font-semibold">{{ $item['name'] }} </span>(Mulai dari
                                {{ $item['price'] }})
                                @if (isset($item['promo']))
                                    <span class="text-xs">{{ $item['promo'] }}</span>
                                @endif
                            </p>
                        </li> --}}
                        <a href="#"
                            class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-600 rounded-t-lg hover:bg-gray-200 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 group">

                            <svg class="w-8 h-8 group-hover:text-blue-700" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                </path>
                            </svg>
                            <p class="text-lg"><span class="font-semibold">{{ $item['name'] }} </span>(Mulai dari
                                {{ $item['price'] }})
                                @if (isset($item['promo']))
                                    <span class="text-xs">{{ $item['promo'] }}</span>
                                @endif
                            </p>

                        </a>
                    @endforeach
                </div>
                <div class="">
                    <img src="https://via.placeholder.com/300" alt="placeholder"
                        class="w-full h-full object-cover rounded-lg">
                    {{-- cta button --}}
                    <a href="#"
                        class="inline-flex items-center bg-primary-500 text-slate-100 px-4 py-2 rounded-lg mt-5">
                        Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 py-8">
        <h1 class="font-extrabold text-4xl text-center my-10">
            Kami siap membantu anda dalam mengurus perizinan usaha yang sah dan terdaftar !
        </h1>
    </section>

    <section class="bg-gray-100">
        <div class="container mx-auto px-4 py-16">
            @php
                $perizinan = [
                    'Pendaftaran Perizinan',
                    'Perizinan Resiko Menengah - Tinggi',
                    'Izin Impor & Ekspor',
                    'BPOM (Badan Pengawas Obat dan Makanan)',
                    'PIRT (Pangan Industri Rumah Tangga)',
                    'PKRT (Perbekalan Kesehatan Rumah Tangga)',
                    'BPOM Kosmetik',
                    'Pengurusan, Merk, Hak Cipta, Dan Paten',
                    'SKA (Sertifikasi Tenaga Ahli)',
                    'SBU-SKK-SKT',
                    'SBUJK (Sertifikasi Badan Usaha Jasa Konstruksi)',
                    'IPAK (Izin Penyalur Alat Kesehatan)',
                    'IDAK (Izin Distribusi Alat Kesehatan)',
                    'Standard Nasional Indonesia (SNI)',
                    'International Organization For Standardization (ISO)',
                    'IUP-OPK (Izin Tambang)',
                    'Daftar KBLI 2020',
                ];
            @endphp
            <h1 class="font-extrabold text-4xl text-center my-10">
                Perizinan Usaha
            </h1>
            <div class="flex flex-col lg:flex-row justify-between gap-4">
                <div class="w-full lg:w-3/4 text-gray-900 bg-white border border-gray-200 rounded-lg">
                    @foreach ($perizinan as $data)
                        <button type="button"
                            class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z">
                                </path>
                            </svg>
                            {{ $data }}
                        </button>
                    @endforeach
                    {{-- cta whatsapp hubungi kami --}}
                    <a href="https://wa.me/62818904230"
                        class="inline-flex items-center bg-primary-500 text-slate-100 px-4 py-2 rounded-lg m-5">
                        Hubungi konsultan kami untuk mendapatkan penawaran terbaik
                    </a>
                </div>
                <div class="w-full lg:w-1/4">
                    <img src="https://via.placeholder.com/300" alt="placeholder"
                        class="w-full h-full object-cover rounded-lg">
                </div>
            </div>

        </div>
    </section>

    <section class="container mx-auto px-4 py-8">
        <h1 class="font-extrabold text-4xl text-center my-10">
            We Also One Stop Solution For Your Foreign Services
        </h1>
    </section>

    <section class="bg-gray-100">
        <div class="container mx-auto px-4 py-16">
            @php
                $perizinan = [
                    'Foreign-Owned Company Establishment / PT PMA (Start From USD 800)<span class="text-xs">*Hot Promo</span>',
                    'VISA',
                    'KITAS / Temporary Stay Permit',
                    'Work Permit',
                    'Brand Registration',
                    'Representative Office',
                    'Legal Services',
                ];
            @endphp
            <h1 class="font-extrabold text-4xl text-center mb-10">
                Foreign Services
            </h1>
            <div class="flex flex-col lg:flex-row justify-between gap-4">
                <div class="w-full lg:w-3/4 text-gray-900 bg-white border border-gray-200 rounded-lg">
                    @foreach ($perizinan as $data)
                        <button type="button"
                            class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 rounded-t-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 ">
                            <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z">
                                </path>
                            </svg>
                            {!! $data !!}
                        </button>
                    @endforeach
                    {{-- cta whatsapp hubungi kami --}}
                    <a href="https://wa.me/62818904230"
                        class="inline-flex items-center bg-primary-500 text-slate-100 px-4 py-2 rounded-lg m-5">
                        Contact our consultant team to get the best offer
                    </a>
                </div>
                <div class="w-full lg:w-1/4">
                    <img src="https://via.placeholder.com/300" alt="placeholder"
                        class="w-full h-full object-cover rounded-lg">
                </div>
            </div>

        </div>
    </section>

    {{-- iframe to website 'https://ahu.go.id/sabh/perseroan/pesannama' --}}
    <section class="container mx-auto px-4 py-8">
        <h1 class="font-extrabold text-4xl text-center my-10">
            Cek Ketersediaan Nama Perusahaan Anda
        </h1>
        <div class="h-20 bg-primary-100 text-center">DEVELOPMENT</div>
    </section>

    <section class="container mx-auto px-4 py-8 ">
        <h1 class="font-extrabold text-4xl text-center my-10">
            Cek Kode KBLI Yang Anda Butuhkan Disini
        </h1>

        <form class="max-w-3xl w-full mx-auto">
            <div class="flex items-center gap-3">
                <input type="text"
                    class="w-full p-2.5 text-sm bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari KBLI" />
                <button
                    class="bg-primary-500 text-white px-4 py-2 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Cari
                </button>
            </div>
        </form>
    </section>

    <section class="container mx-auto px-4 py-8">

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2  mx-auto w-max my-5">
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow flex flex-col items-center">
                <svg class="w-8 h-8 fill-primary-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M7 17H2a2 2 0 0 1-2-2V2C0 .9.9 0 2 0h16a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2h-5l4 2v1H3v-1l4-2zM2 2v11h16V2H2z">
                    </path>
                </svg>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">
                        Apa itu KBLI?
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 text-center">
                    KBLI adalah kode klasifikasi resmi untuk mengklasifijasikan jenis bidang usaha perusahaan di Indonesia
                    yang ingin mendaftarkan bidang usahanya di akta ataupun NIB.
                </p>
            </div>

            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow flex flex-col items-center">
                <svg class="w-8 h-8 fill-primary-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path
                        d="M7 17H2a2 2 0 0 1-2-2V2C0 .9.9 0 2 0h16a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2h-5l4 2v1H3v-1l4-2zM2 2v11h16V2H2z">
                    </path>
                </svg>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">
                        Apa fungsi KBLI?
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 text-center">
                    KBLI berfungsi untuk menyeragamkan aktivitas usaha di Indonesia menjadi sebuah klasifikasi yang bisa
                    digolongkan dan menjadi acuan untuk pendaftaran legalitas di Akta Perusahaaan ataupun NIB.
                </p>
            </div>

        </div>


        {{-- FAQ --}}
        <h1 class="font-extrabold text-4xl text-center my-10">
            Frequently Asked Questions (FAQ)
        </h1>
        <div x-data="{
            activeAccordion: '',
            setActiveAccordion(id) {
                this.activeAccordion = (this.activeAccordion == id) ? '' : id
            }
        }"
            class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white border border-gray-200 divide-y divide-gray-200 rounded-md my-10">
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)"
                    class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                    <span>What is lorem?</span>
                    <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci, numquam.
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)"
                    class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, consequuntur?</span>
                    <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70">
                        animi molestias quibusdam quisquam sit odio veritatis repudiandae facere maiores itaque tenetur.
                        Placeat atque dolores mollitia temporibus sint eos expedita voluptatem iure ratione, voluptas
                        nesciunt a doloribus, laborum beatae cupiditate.
                    </div>
                </div>
            </div>
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                <button @click="setActiveAccordion(id)"
                    class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                    <span>
                        Doloribus quis eum aperiam sequi et dignissimos, nulla
                        mollitia?
                    </span>
                    <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div x-show="activeAccordion==id" x-collapse x-cloak>
                    <div class="p-4 pt-0 opacity-70">
                        Absolutely! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, eum ipsa vitae
                        voluptates aspernatur blanditiis quis, adipisci exercitationem id, assumenda sit? Iste id ex, quod
                        cupiditate quia tempore fugiat architecto.
                    </div>
                </div>
            </div>
        </div>
        {{-- END FAQ --}}


        {{-- Contact --}}
        <div
            class="flex
                        lg:flex-row flex-col-reverse max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16
                        bg-gray-100 rounded-lg">
            <div class="w-full lg:w-1/2">
                <form class="max-w-sm mx-auto">
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            placeholder="Nama Anda" required />
                    </div>

                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            placeholder="nama@domain.com" required />
                    </div>
                    <div class="mb-5">
                        <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Nomor Telepon
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" id="phone-number"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            required />
                    </div>

                    <div class="mb-5">
                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Nama Perusahaan
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="company"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            required />
                    </div>

                    <div class="mb-5">
                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Jabatan
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="position"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            required />
                    </div>
                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input id="terms" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                required />
                        </div>
                        <label for="terms" class="ms-2 text-sm font-medium text-gray-900 ">
                            Saya setuju dengan
                            <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Syarat
                                dan
                                ketentuan</a>
                        </label>
                    </div>
                    <p class="text-sm text-gray-500 py-2">
                        Atna Tech akan menggunakan informasi yang Anda berikan pada formulir ini untuk
                        menghubungi
                        Anda. Silahkan centang kotak diatas jika
                        Anda setuju.
                    </p>
                    <button type="submit"
                        class="inline-flex gap-x-1 text-white bg-primary-500 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        Kirim
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-send-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z" />
                            <path d="M6.5 12h14.5" />
                        </svg>
                    </button>
                </form>

            </div>
            <div class="relative w-full lg:w-1/2 hidden lg:flex">
                <!-- Background Image -->
                <img src="{{ asset('images/undraw_contact-us_kcoa.svg') }}" alt="contact us illustration"
                    class="absolute inset-0 w-full top-2/4  object-cover z-0" />
                <!-- Overlay Text -->
                <div class="absolute top-1/2 left-4 z-10 text-primary-500">
                    <h1 class="text-xl lg:text-3xl font-bold break-words">Build Your Network</h1>
                </div>
            </div>

        </div>
        {{-- END Contact --}}


    @endsection
