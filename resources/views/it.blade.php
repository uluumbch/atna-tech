@extends('layouts.main')

@section('title', 'Atna IT')
@section('content')
    <section class="min-h-screen mb-10 flex items-center relative pt-20 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('images/pexels-lkloeppel-466685.jpg') }}')">
        <div class="absolute inset-0 bg-primary-600/80 z-10"></div>
        <div class="container max-w-screen-md text-slate-50 text-justify mx-auto relative z-20">
            <h1 class="font-bold text-3xl lg:text-6xl text-center">
                Solusi Teknologi Terpercaya untuk Kemajuan Bisnis Anda
            </h1>
            <p class="px-4 text-lg mt-5">
                <span class="font-bold">Atna Tech</span>
                hadir sebagai perusahaan yang menyediakan layanan di bidang teknologi informasi untuk membantu
                anda mengoptimalkan akses yang dibutuhkan melalui dukungan website, aplikasi, serta keamanan jaringan pada
                sistem perangkat lunak dan keras.
            </p>

            <p class="px-4 text-lg mt-5">
                Dengan dukungan tim profesional dan berpengalaman, kami berkomitmen memberikan solusi dan pelayanan yang
                terbaik sesuai kebutuhan anda.
            </p>

            <a href="#paket" x-on:click.prevent="$scrollTo"
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
        <h1 class="font-extrabold text-4xl text-center my-10">
            Pelayanan terbaik untuk sistem networking anda
        </h1>
    </section>

    <section class="p-4" id="paket">
        <h1 class="font-extrabold text-4xl text-center my-10">
            Berikut adalah layan IT Kami :
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 gap-y-10 max-w-screen-lg mx-auto">

            @php
                $cloud = [
                    [
                        'title' => 'Website Development',
                        'desc' =>
                            'Penggunaan Website terbukti sebagai platform yang ampuh untuk meningkatkan efektifitas pemasaran dan penjualan bisnis. Dengan adanya website anda dapat menjangkau lebih banyak pelanggan dan menghemat biaya pemasaran jika dibandingkan dengan metode promosi tradisional seperti iklan di media cetak atau radio.',
                        'harga' => 'Rp. 2.500.000',
                    ],
                    [
                        'title' => 'Apps Development',
                        'desc' =>
                            'Dengan kehadiran application store pada sistem Android & IOS anda dapat meningkatkan peluang dalam mendapatkan keuntungan dari penjualan aplikasi yang baik, atau anda juga dapat menggunakannya untuk kebutuhan sistem internal, seperti sistem absensi perkantoran maupun instansi umum lainnya, kebutuhan untuk cara penggunaan produk anda oleh klien, serta banyak hal lainnya yang dapat anda manfaatkan sesuai kebutuhan anda.',
                        'harga' => 'Rp. 15.000.000',
                    ],
                    [
                        'title' => 'Domain & Email Hosting',
                        'desc' =>
                            'Nama Domain menjadi salah satu identitas untuk perusahaan/oganisasi dan produk digital yang kamu buat, dengan nama domain dan Hosting yang baik secara spesifik dapat mengarahkan calon klien langsung kepada halaman website anda.',
                        'harga' => 'Rp. 1.000.000',
                    ],
                    [
                        'title' => 'Google Workspace',
                        'desc' =>
                            'Dengan Google Workspace anda dapat mengintegrasikan semua kebutuhan perusahaan anda mulai dari Email Domain & Hosting, Chat, Video Meeting, Penyimpanan Dokumen, serta masih banyak aplikasi lainnya. Sehingga pengguna dapat berkreasi, berkomunikasi, dan berkolaborasi dengan mudah dan aman.',
                        'harga' => 'Rp. 150.000/user/bulan',
                    ],
                ];

                $network = [
                    [
                        'title' => 'Instalasi Jaringan LAN, Wireless, Hotspot, & Access Point',
                        'desc' =>
                            'Kami memberikan solusi terbaik untuk memenuhi kebutuhan IT anda meliputi Jasa Instalasi Jaringan LAN, Wireless, Hotspot serta perangkat Firewall, Router Mikrotik, Switch, dan lainnya.',
                        'harga' => 'Mulai Dari Rp 150.000 - Rp 200.000 Per titik',
                    ],
                    [
                        'title' => 'Instalasi Jaringan Fiber Optic',
                        'desc' =>
                            'Jasa Instalasi jaringan Fiber Optic untuk Indoor, penarikan kabel antar gedung dalam satu area dan lainnya, beserta Jasa Splicing kabel. Mulai dari 12 Core sampai dengan 244 Core.',
                        'harga' => 'Mulai Dari Rp 150.000 - Rp 250.000 Per titik',
                    ],
                    [
                        'title' => 'Instalasi PABX / IP PBX',
                        'desc' =>
                            'Dengan PABX atau IP PBX anda dapat menghemat biaya panggilan telepon, untuk komunikasi panggilan antar kantor maupun karyawan yang berlokasi jauh dan dapat dilakukan melalui jaringan internet.',
                        'harga' => 'Mulai Dari Rp 4.500.000',
                    ],
                ];

                $hardware = [
                    [
                        'title' => 'Intalasi Smart Door Lock',
                        'desc' =>
                            'Smart Door Lock adalah solusi pintar untuk keamanan pintu rumah anda, dengan menggunakan teknologi RFID, Fingerprint, dan Bluetooth, anda dapat mengontrol akses masuk ke rumah anda dengan mudah dan aman.',
                        'harga' => 'Rp. 1.500.000',
                    ],
                    [
                        'title' => 'Instalasi CCTV',
                        'desc' =>
                            'CCTV adalah solusi terbaik untuk memantau keamanan rumah, kantor, dan tempat usaha anda. Dengan menggunakan CCTV anda dapat memantau keadaan sekitar secara real-time melalui smartphone anda.',
                        'harga' => 'Rp. 2.500.000',
                    ],
                    [
                        'title' => 'Logitech Video Conference Meeting Setup',
                        'desc' =>
                            'Logitech Video Conference Meeting Setup adalah solusi terbaik untuk kebutuhan meeting online anda. Dengan menggunakan Logitech Video Conference Meeting Setup anda dapat melakukan meeting online dengan kualitas suara dan gambar yang jernih.',
                        'harga' => 'Rp. 5.000.000',
                    ],
                    [
                        'title' => 'Instalasi LPR Barrier Gate',
                        'desc' =>
                            'LPR Barrier Gate adalah solusi terbaik untuk keamanan parkir anda. Dengan menggunakan LPR Barrier Gate anda dapat mengontrol akses masuk dan keluar kendaraan dengan mudah dan aman.',
                        'harga' => 'Rp. 3.500.000',
                    ],
                    [
                        'title' => 'Pengadaan Hardware, Komputer & Laptop',
                        'desc' =>
                            'Pengadaan Hardware, Komputer & Laptop adalah solusi terbaik untuk kebutuhan perangkat keras anda. Dengan menggunakan Hardware, Komputer & Laptop yang berkualitas anda dapat bekerja dengan lebih efisien dan produktif.',
                        'harga' => 'Rp. 5.000.000',
                    ],
                ];
            @endphp

            <div
                class="w-full md:w-80 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-9 space-y-3 relative overflow-hidden">
                <div class="w-24 h-24 bg-violet-500 rounded-full absolute -right-5 -top-7">
                    <p class="absolute bottom-6 left-7 text-white text-2xl">01</p>
                </div>
                <div class="fill-violet-500 w-12">
                    <svg class="fill-violet-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-5 14H4v-4h11v4zm0-5H4V9h11v4zm5 5h-4V9h4v9z">
                        </path>
                    </svg>
                </div>
                <h1 class="font-bold text-xl">Cloud Development</h1>
                <ul class="list-disc list-inside text-base text-zinc-500 leading-6">
                    @foreach ($cloud as $item)
                        <li>{{ $item['title'] }}</li>
                    @endforeach
                </ul>

            </div>
            <div
                class="w-full md:w-80 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-9 space-y-3 relative overflow-hidden">
                <div class="w-24 h-24 bg-violet-500 rounded-full absolute -right-5 -top-7">
                    <p class="absolute bottom-6 left-7 text-white text-2xl">02</p>
                </div>
                <div class=" w-12">
                    <svg class="w-12 h-12  stroke-violet-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="16" y="16" width="6" height="6" rx="1"></rect>
                        <rect x="2" y="16" width="6" height="6" rx="1"></rect>
                        <rect x="9" y="2" width="6" height="6" rx="1"></rect>
                        <path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"></path>
                        <path d="M12 12V8"></path>
                    </svg>
                </div>
                <h1 class="font-bold text-xl">Cable & Network</h1>
                <ul class="list-disc list-inside text-base text-zinc-500 leading-6">
                    @foreach ($network as $item)
                        <li>{{ $item['title'] }}</li>
                    @endforeach
                </ul>
            </div>
            <div
                class="w-full md:w-80 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-9 space-y-3 relative overflow-hidden">
                <div class="w-24 h-24 bg-violet-500 rounded-full absolute -right-5 -top-7">
                    <p class="absolute bottom-6 left-7 text-white text-2xl">03</p>
                </div>
                <div class="fill-violet-500 w-12">
                    <svg class="w-12 h-12 fill-violet-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        fill="currentColor">
                        <rect x="160" y="160" width="192" height="192"></rect>
                        <path
                            d="M480,198V154H448V88a24,24,0,0,0-24-24H358V32H314V64H278V32H234V64H198V32H154V64H88A24,24,0,0,0,64,88v66H32v44H64v36H32v44H64v36H32v44H64v66a24,24,0,0,0,24,24h66v32h44V448h36v32h44V448h36v32h44V448h66a24,24,0,0,0,24-24V358h32V314H448V278h32V234H448V198ZM128,128H384V384H128Z">
                        </path>
                    </svg>
                </div>
                <h1 class="font-bold text-xl">Hardware & Infrastructur </h1>
                <ul class="list-disc list-inside text-base text-zinc-500 leading-6">
                    @foreach ($hardware as $item)
                        <li>{{ $item['title'] }}</li>
                    @endforeach
                </ul>
            </div>

        </div>
    </section>

    <div class="max-w-screen-lg mx-auto p-4">
        <section class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <h1 class="font-extrabold text-4xl text-center my-10">
                Cloud Development
            </h1>
            <div class=""></div>
            <!-- Left Column -->
            <div class="grid grid-cols-2 gap-4">
                @foreach ($cloud as $item)
                    <div
                        class=" bg-white rounded-b-lg border-t-8 border-primary-400 px-4 py-5 flex flex-col justify-around shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                        <p class="text-lg font-bold font-sans">{{ $item['title'] }}</p>
                        <div class="py-3">
                            <p class="text-gray-400 text-sm">
                                {{ $item['desc'] }}
                            </p>
                        </div>
                        <div class="flex justify-between">
                            <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"
                                    stroke-linejoin="round" stroke-linecap="round"></path>
                            </svg>
                            <div class="text-sm flex gap-2">
                                <p class="font-bold">Mulai dari {{ $item['harga'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Right Column -->
            <div class="flex items-center justify-center">
                <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="max-w-full h-auto">
            </div>
        </section>
    </div>

    {{-- CABLE and network --}}

    <div class="max-w-screen-lg mx-auto p-4">
        <section class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <h1 class="font-extrabold text-4xl text-center my-10">
                Cable & Network
            </h1>
            <div class=""></div>
            <!-- Left Column -->
            <div class="grid grid-cols-2 gap-4">
                @foreach ($network as $item)
                    <div
                        class=" bg-white rounded-b-lg border-t-8 border-primary-400 px-4 py-5 flex flex-col justify-around shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                        <p class="text-lg font-bold font-sans">{{ $item['title'] }}</p>
                        <div class="py-3">
                            <p class="text-gray-400 text-sm">
                                {{ $item['desc'] }}
                            </p>
                        </div>

                        <div class="text-sm flex gap-2">
                            <p class="font-bold">{{ $item['harga'] }}</p>
                        </div>

                    </div>
                @endforeach
            </div>
            <!-- Right Column -->
            <div class="flex items-center justify-center">
                <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="max-w-full h-auto">
            </div>
        </section>
    </div>

    <div class="max-w-screen-lg mx-auto p-4">
        <div class="w-full my-5">
            <img src="https://via.placeholder.com/300x100" alt="Placeholder Image" class="w-full h-auto rounded-lg">
        </div>
        <section class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div
                class=" bg-white rounded-b-lg border-t-8 border-primary-400 px-4 py-5 flex flex-col justify-around shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                <p class="text-lg font-bold font-sans">Logitech Video Conference Meeting Setup</p>
                <div cla ss="py-3">
                    <p class="text-gray-400 text-sm">
                        Fasilitasi ruangan meeting anda dengan produk pilihan dari Logitech! Beberapa kelebihan menggunakan
                        Logitech Video Conference Meeting Setup adalah anda dapat menampilkan gambar yang jernih pada video
                        dan bisa mendapatkan kenyamanan suara yang sesuai dengan spesifikasi ruangan meeting. Serta lebih
                        praktis dengan adanya penambahan Mic pada alat ini.
                    </p>
                </div>
                <div class="flex justify-between">
                    <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" stroke-linejoin="round"
                            stroke-linecap="round"></path>
                    </svg>
                    <div class="text-sm flex gap-2">
                        <p class="font-bold">Mulai dari Rp 5.000.000</p>
                    </div>
                </div>
            </div>
            <div
                class=" bg-white rounded-b-lg border-t-8 border-primary-400 px-4 py-5 flex flex-col justify-around shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                <p class="text-lg font-bold font-sans">Pengadaan Hardware/Software</p>
                <div cla ss="py-3">
                    <p class="text-gray-400 text-sm">
                        Sebagai bentuk kepedulian kami akan kebutuhan anda dengan senantiasa kami memberikan solusi terkait
                        pengadaan Hardware maupun Software untuk menunjang efektifitas dan produktifitas kinerja perusahaan
                        anda. Segera hubungi kami dan dapatkan layanan terbaik untuk kebutuhan anda.
                        (Komputer, Laptop kantor, Mesin dan kebutuhan pabrik, Upgrade CPU Siemens, Mesin Las, Pengadaan
                        License Plate Recognition untuk Barrier Gate, Office supply, dan lainnya).
                    </p>
                </div>
                <div class="flex justify-between">
                    <svg class="w-6 h-6" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" stroke-linejoin="round"
                            stroke-linecap="round"></path>
                    </svg>
                    <div class="text-sm flex gap-2">
                        <p class="font-bold">Kontak Team Kami Segera</p>
                    </div>
                </div>
            </div>
            <div
                class=" bg-white rounded-b-lg border-t-8 border-primary-400 px-4 py-5 flex flex-col justify-around shadow-md hover:shadow-lg transition duration-300 ease-in-out">
                <p class="text-lg font-bold font-sans">Butuh hal lain? Hubungi kami untuk diskusi </p>
                <div class="py-3">
                    <!-- Form at the Bottom -->
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Nomor
                                Telepon</label>
                            <input type="text" id="phone" name="phone"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="items" class="block text-sm font-medium text-gray-700">Barang yang
                                Dibutuhkan</label>
                            <textarea id="items" name="items" rows="3"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md"
                                placeholder="Contoh: Safety Deposit Box, Kursi dan Meja Kantor, Monitor, dll"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-primary-500 text-white p-2 rounded-md hover:bg-primary-600">Submit</button>
                    </form>
                    <!-- End of Form -->
                </div>
            </div>
        </section>

    </div>

@endsection
