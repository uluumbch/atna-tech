@extends('layouts.main')
 
@section('title', 'Atna Consulting')
@section('content')
<section class="min-h-screen mb-10 flex items-center relative pt-20 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/pexels-lkloeppel-466685.jpg') }}')">
    <div class="absolute inset-0 bg-primary-600/80 z-10"></div>
    <div class="container max-w-screen-md text-slate-50 text-justify mx-auto relative z-20">
        <h1 class="font-bold text-6xl text-center">
            Solusi Terbaik Untuk Perizinan dan Pendirian Badan Usaha							
        </h1>
        <p class="text-lg mt-5">
            <span class="font-semibold">
                ATNA Consulting
            </span>
             hadir berkomitmen penuh untuk membantu para Start Up, Perusahaan Menengah dan Perusahaan Besar dalam mewujudkan bisnis impian anda dengan mudah.
        </p>

        <p class="text-lg mt-5">
        Dengan dibantu oleh tim ahli kami yang sudah berpengalaman dalam bidang perizinan dan pendirian badan usaha, kami percaya dapat memberikan solusi yang tepat dan efektif untuk memenuhi kebutuhan bisnis anda.
        </p>

        <p class="text-lg mt-5">
        Di saat yang lain hanya mampu mengurus pendirian badan usaha, ATNA Consulting mampu memberikan kelebihan lainnya
        </p>

        <p class="text-lg mt-5">
        Bergabunglah sekarang juga dan nikmati layanan terbaik dari kami.
        </p>
    </div>
</section>

<section class="container mx-auto px-4 py-8">
    <h1 class="font-extrabold text-4xl text-center mb-10">
        Keuntungan Mendirikan Badan Usaha di ATNA Consulting:
    </h1>
    
    <div class="max-w-3xl mx-auto">

        <ul class="space-y-4">
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="text-lg"><span class="font-semibold">FREE</span> Konsultasi</span>
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="text-lg"><span class="font-semibold">FREE</span> Virtual Office selama 1 s/d 5 Tahun (*)</span>
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="text-lg"><span class="font-semibold">FREE</span> Pembuatan Logo, Company Profile, Website dan Email Perusahaan (*)</span>
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="text-lg"><span class="font-semibold">FREE</span> Pembukaan Rekening Perusahaan (*)</span>
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="text-lg"><span class="font-semibold">FREE</span> Template Kartu Nama, Kop Surat, Amplop (*)</span>
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="text-lg"><span class="font-semibold">FREE</span> Stempel Perusahaan (*)</span>
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="text-lg"><span class="font-semibold">FREE</span> BPJS Ketenagakerjaan (*)</span>
            </li>
            <li class="flex items-start gap-3">
                <svg class="w-6 h-6 text-primary-800 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M22 11.0857V12.0057C21.9988 14.1621 21.3005 16.2604 20.0093 17.9875C18.7182 19.7147 16.9033 20.9782 14.8354 21.5896C12.7674 22.201 10.5573 22.1276 8.53447 21.3803C6.51168 20.633 4.78465 19.2518 3.61096 17.4428C2.43727 15.6338 1.87979 13.4938 2.02168 11.342C2.16356 9.19029 2.99721 7.14205 4.39828 5.5028C5.79935 3.86354 7.69279 2.72111 9.79619 2.24587C11.8996 1.77063 14.1003 1.98806 16.07 2.86572M22 4L12 14.01L9 11.01" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="text-lg"><span class="font-semibold">FREE</span> Office Printer (*)</span>
            </li>
        </ul>
        {{-- snk--}}
        <p class="text-xs mt-5">
            * Syarat dan Ketentuan Berlaku
        </p>
    </div>
</section>
@endsection