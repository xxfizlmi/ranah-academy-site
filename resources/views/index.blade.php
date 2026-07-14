<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                {{-- Logo --}}
                <a href="#" class="text-2xl font-bold text-blue-600">Home</a>
                {{-- Menu --}}
                <ul class="md:flex  items-center gap-8 hidden">
                    @foreach ($headers as $item)
                        <li class=""><a href=#
                                class="text-gray-90 hover:text-blue-600 transition duration-200">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
                {{-- Mobile Menu --}}
                <button class="md:hidden text-2xl" id="menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            {{-- Mobile Menu --}}
            <div class="hidden md:hidden py-4" id="mobile-menu">
                <ul class="space-y-3 text-center">
                    @foreach ($headers as $item)
                        <li class=""><a href=#
                                class="block text-gray-700 hover:text-blue-600">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="bg-gray-50">
            <div class="max-w-7xl mx-auto px-6 py-20">

                <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12">

                    <!-- Left -->
                    <div>

                        <span class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-medium">
                            Selamat Datang di Ranah Academy
                        </span>

                        <h1 class="mt-6 text-5xl font-bold leading-tight text-gray-900">
                            Belajar Tanpa Batas
                            <span class="text-blue-600">
                                Bersama Ranah Academy
                            </span>
                        </h1>

                        <p class="mt-6 text-lg text-gray-600">
                            Tingkatkan keterampilan melalui kelas online,
                            mentor profesional, dan sertifikat yang membantu
                            perkembangan kariermu.
                        </p>

                        <div class="mt-8 flex gap-4">

                            <a href="/courses"
                                class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                                Mulai Belajar
                            </a>

                            <a href="/about"
                                class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-50 transition">
                                Tentang Kami
                            </a>

                        </div>

                        <!-- Statistik -->
                        <div class="grid grid-cols-3 gap-8 mt-12">

                            <div>
                                <h2 class="text-3xl font-bold text-blue-600">
                                    10K+
                                </h2>
                                <p class="text-gray-600">
                                    Peserta
                                </p>
                            </div>

                            <div>
                                <h2 class="text-3xl font-bold text-blue-600">
                                    150+
                                </h2>
                                <p class="text-gray-600">
                                    Kelas
                                </p>
                            </div>

                            <div>
                                <h2 class="text-3xl font-bold text-blue-600">
                                    30+
                                </h2>
                                <p class="text-gray-600">
                                    Mentor
                                </p>
                            </div>

                        </div>

                    </div>

                    <!-- Right -->
                    <div class="flex justify-center">

                        <img src="{{ asset('assets/img/hero.jpg') }}" alt="Ranah Academy" class="w-full max-w-lg">

                    </div>

                </div>

            </div>
        </section>
    </main>
    <footer class="bg-gray-900 text-white mt-16">
        <div class="max-w-7xl mx-auto px-6 py-12">

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                <!-- Logo -->
                <div>
                    <h2 class="text-2xl font-bold text-blue-400">
                        Ranah Academy
                    </h2>

                    <p class="mt-4 text-gray-400">
                        Belajar, berkembang, dan raih sertifikat bersama Ranah Academy.
                    </p>
                </div>

                <!-- Menu -->
                <div>
                    <h3 class="font-semibold mb-4">Menu</h3>

                    <ul class="space-y-2">
                        <li><a href="/" class="hover:text-blue-400">Beranda</a></li>
                        <li><a href="/about" class="hover:text-blue-400">Tentang</a></li>
                        <li><a href="/articles" class="hover:text-blue-400">Artikel</a></li>
                        <li><a href="/events" class="hover:text-blue-400">Event</a></li>
                        <li><a href="/gallery" class="hover:text-blue-400">Galeri</a></li>
                    </ul>
                </div>

                <!-- Academy -->
                <div>
                    <h3 class="font-semibold mb-4">Academy</h3>

                    <ul class="space-y-2">
                        <li><a href="/courses" class="hover:text-blue-400">Kelas</a></li>
                        <li><a href="/mentors" class="hover:text-blue-400">Mentor</a></li>
                        <li><a href="/certificate" class="hover:text-blue-400">Sertifikat</a></li>
                        <li><a href="/faq" class="hover:text-blue-400">FAQ</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="font-semibold mb-4">Kontak</h3>

                    <ul class="space-y-2 text-gray-400">
                        <li>Email: hello@ranahacademy.com</li>
                        <li>WhatsApp: +62 xxx xxxx xxxx</li>
                        <li>Indonesia</li>
                    </ul>
                </div>

            </div>

            <hr class="my-8 border-gray-700">

            <div class="flex flex-col md:flex-row justify-between items-center gap-4">

                <p class="text-gray-400 text-sm">
                    © {{ date('Y') }} Ranah Academy. All rights reserved.
                </p>

                <div class="flex gap-2">
                    <a href="#"
                        class="hover:text-blue-400 hover:border-blue-400 border border-white rounded-full p-2 ">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="hover:text-blue-400 hover:border-blue-400 border border-white rounded-full p-2 ">
                        <i class="fa-brands fa-instagram"></i></a>
                    <a href="#"
                        class="hover:text-blue-400 hover:border-blue-400 border border-white rounded-full p-2 ">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="#"
                        class="hover:text-blue-400 hover:border-blue-400 border border-white rounded-full p-2 ">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>

            </div>

        </div>
    </footer>
</body>

</html>
