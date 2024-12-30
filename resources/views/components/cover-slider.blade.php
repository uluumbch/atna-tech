@php
    $data = [
        [
            'title' => 'Atna Consulting',
            'url' => route('consulting'),
            'desc' => 'Solusi Terbaik Untuk Perizinan dan Pendirian Badan Usaha',
            'img' => asset('images/pexels-lkloeppel-466685.jpg'),
        ],
        [
            'title' => 'Atna Office',
            'url' => route('office'),
            'desc' => 'Inovasi Produk Pilihan Untuk Melengkapi Kebutuhan Kantor Anda',
            'img' => asset('images/pexels-nietjuh-934062.jpg'),
        ],
        [
            'title' => 'Atna IT',
            'desc' => 'Solusi Teknologi Terpercaya untuk Kemajuan Bisnis Anda',
            'url' => route('it'),
            'img' => asset('images/pexels-lkloeppel-466685.jpg'),
        ],
    ];
@endphp

@push('styles')
    <style>
        #hero-slider {
            position: relative;
            height: 100vh;
        }

        #hero-slider .hero-slider__slide {
            height: 100vh;
            position: relative;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
        }

        #hero-slider .hero-slider__slide h1 {
            font-size: 48px;
        }

        @media (min-width: 576px) {
            #hero-slider .hero-slider__slide h1 {
                font-size: 78px;
            }
        }

        @media (min-width: 768px) {
            #hero-slider .hero-slider__slide h1 {
                font-size: 98px;
            }
        }

        @media (min-width: 992px) {
            #hero-slider .hero-slider__slide h1 {
                font-size: 124px;
            }
        }

        #hero-slider .hero-slider__slide h4 {
            position: relative;
            margin-bottom: 20px;
            font-weight: normal;
            font-size: 18px;
        }

        @media (min-width: 576px) {
            #hero-slider .hero-slider__slide h4 {
                font-size: 24px;
            }
        }

        @media (min-width: 768px) {
            #hero-slider .hero-slider__slide h4 {
                font-size: 28px;
            }
        }

        @media (min-width: 992px) {
            #hero-slider .hero-slider__slide h4 {
                font-size: 36px;
            }
        }

        #hero-slider .hero-slider__slide h4 .left-wing,
        #hero-slider .hero-slider__slide h4 .right-wing {
            display: block;
            position: absolute;
            width: 100px;
            top: 50%;
            transform: translateY(-50%);
        }

        #hero-slider .hero-slider__slide h4 .left-wing:before,
        #hero-slider .hero-slider__slide h4 .right-wing:before {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background: white;
            margin-bottom: 2px;
        }

        #hero-slider .hero-slider__slide h4 .left-wing:after,
        #hero-slider .hero-slider__slide h4 .right-wing:after {
            content: "";
            display: block;
            width: 50%;
            height: 1px;
            background: white;
        }

        #hero-slider .hero-slider__slide h4 .left-wing {
            right: 100%;
            margin-right: 10px;
        }

        #hero-slider .hero-slider__slide h4 .left-wing:after {
            float: right;
        }

        #hero-slider .hero-slider__slide h4 .right-wing {
            left: 100%;
            margin-left: 10px;
        }

        #hero-slider .hero-slider__slide a:hover {
            text-decoration: none;
        }

        #hero-slider .hero-slider__button {
            position: absolute;
            top: 50%;
            color: white;
            height: 50px;
            transform: translateY(-50%);
            width: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
            transition: 300ms ease-in-out;
        }

        #hero-slider .hero-slider__button:hover {
            box-shadow: 0px 0px 15px 1px black;
        }

        #hero-slider .hero-slider__button--next {
            right: 10px;
        }

        #hero-slider .hero-slider__button--prev {
            left: 10px;
        }
    </style>
@endpush

<section id="hero-slider">
    <div class="hero-slider__wrapper">
        @foreach ($data as $item)
            <div>
                <div class="hero-slider__slide px-5" style="background-image: url('{{ $item['img'] }}');">
                    <!-- Dark Overlay -->
                    <div class="absolute z-[1] inset-0 bg-black bg-opacity-50"></div>
                    <h1 class="z-10">{{ $item['title'] }}</h1>
                    <h4 class="z-10">{{ $item['desc'] }}</h4>
                    <a href="{{ $item['url'] }}"
                        class="inline-flex items-center bg-primary-500 text-slate-100 px-4 py-2 rounded-lg z-10">
                        Info Lebih Lanjut
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    <span class="hero-slider__button--prev hero-slider__button">
        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
        </svg>
    </span>
    <span class="hero-slider__button hero-slider__button--next">
        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
        </svg>
    </span>
</section>
