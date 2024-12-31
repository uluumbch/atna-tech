<div
class="flex lg:flex-row flex-col-reverse  max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 bg-gray-100 rounded-lg">
<div class="w-full lg:w-1/2">
    <form class="max-w-sm mx-auto" action="{{ route('contact') }}" method="POST">
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                <span class="text-red-500">*</span>
            </label>
            <input type="text" id="name"
                name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                placeholder="Nama Anda" required />
                @error('name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
        </div>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email
                <span class="text-red-500">*</span>
            </label>
            <input type="email" id="email"
                name="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                placeholder="nama@domain.com" required />
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
        </div>
        <div class="mb-5">
            <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900 ">
                Nomor Telepon
                <span class="text-red-500">*</span>
            </label>
            <input type="tel" id="phone-number"
                name="phone"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                required />
                @error('phone')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
        </div>

        <div class="mb-5">
            <label for="company" class="block mb-2 text-sm font-medium text-gray-900 ">
                Nama Perusahaan
                <span class="text-red-500">*</span>
            </label>
            <input type="text" id="company"
                name="company"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                required />
                @error('company')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
        </div>

        <div class="mb-5">
            <label for="position" class="block mb-2 text-sm font-medium text-gray-900 ">
                Jabatan
                <span class="text-red-500">*</span>
            </label>
            <input type="text" id="position"
            name="position"
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
                <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Syarat dan
                    ketentuan</a>
            </label>
        </div>
        <p class="text-sm text-gray-500 py-2">
            Atna Tech akan menggunakan informasi yang Anda berikan pada formulir ini untuk menghubungi
            Anda. Silahkan centang kotak diatas jika
            Anda setuju.
        </p>
        @session('success')
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-4"
            role="alert">
            <strong class="font-bold">Terima kasih!</strong>
            <span class="block sm:inline">Pesan Anda telah terkirim.</span>
        </div>
        @endsession
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