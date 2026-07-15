<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">
    <nav class="bg-white shadow-sm sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="text-xl font-bold text-blue-600">Ranah Academy</a>

                <ul class="md:flex items-center gap-8 hidden">
                    @foreach ($headers as $item)
                        <li>
                            <a href="{{ $item['url'] }}" class="text-gray-700 hover:text-blue-600 transition duration-200">
                                {{ $item['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <button class="md:hidden text-2xl text-gray-700" id="menu-button" type="button" aria-label="Toggle menu">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            <div class="hidden md:hidden py-4 border-t border-gray-100" id="mobile-menu">
                <ul class="space-y-3 text-center">
                    @foreach ($headers as $item)
                        <li>
                            <a href="{{ $item['url'] }}" class="block text-gray-700 hover:text-blue-600">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="bg-gradient-to-br from-blue-50 via-white to-gray-100">
            <div class="max-w-7xl mx-auto px-6 py-20 lg:py-28">
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12">
                    <div>
                        <span class="inline-block bg-blue-100 text-blue-600 px-4 py-2 rounded-full text-sm font-medium">
                            {{ $hero['badge'] }}
                        </span>

                        <h1 class="mt-6 text-4xl sm:text-5xl font-bold leading-tight text-gray-900">
                            {{ $hero['title'] }}
                            <span class="text-blue-600 block sm:inline">{{ $hero['highlight'] }}</span>
                        </h1>

                        <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                            {{ $hero['description'] }}
                        </p>

                        <div class="mt-8 flex flex-col sm:flex-row gap-4">
                            <a href="{{ $hero['primary_cta']['url'] }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition text-center font-medium">
                                {{ $hero['primary_cta']['label'] }}
                            </a>
                            <a href="{{ $hero['secondary_cta']['url'] }}" class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-50 transition text-center font-medium">
                                {{ $hero['secondary_cta']['label'] }}
                            </a>
                        </div>

                        <div class="grid grid-cols-3 gap-6 mt-12">
                            @foreach ($stats as $stat)
                                <div class="text-center sm:text-left">
                                    <h2 class="text-2xl sm:text-3xl font-bold text-blue-600">{{ $stat['value'] }}</h2>
                                    <p class="text-gray-600 mt-1">{{ $stat['label'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <img src="{{ asset('assets/img/hero.jpg') }}" alt="Ranah Academy" class="w-full max-w-lg rounded-2xl shadow-xl">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 px-6">
            <div class="max-w-7xl mx-auto">
                <div class="text-center max-w-3xl mx-auto">
                    <span class="text-blue-600 font-semibold">Kenapa Memilih Ranah Academy</span>
                    <h2 class="mt-3 text-3xl font-bold text-gray-900">Belajar yang terarah, praktis, dan menyenangkan</h2>
                    <p class="mt-4 text-gray-600">Kami menghadirkan pengalaman belajar yang modern untuk membantu kamu berkembang dengan percaya diri.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    @foreach ($features as $feature)
                        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold">✓</div>
                            <h3 class="mt-5 text-xl font-semibold text-gray-900">{{ $feature['title'] }}</h3>
                            <p class="mt-3 text-gray-600">{{ $feature['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-20 px-6 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
                    <div>
                        <span class="text-blue-600 font-semibold">Program Unggulan</span>
                        <h2 class="mt-2 text-3xl font-bold text-gray-900">Pilihan tepat untuk kebutuhan belajar kamu</h2>
                    </div>
                    <a href="/courses" class="text-blue-600 font-medium hover:underline">Lihat Semua Program</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    @foreach ($programs as $program)
                        <div class="border border-gray-200 rounded-2xl p-8 bg-gray-50">
                            <span class="inline-block text-sm font-medium text-blue-600 bg-blue-100 px-3 py-1 rounded-full">{{ $program['badge'] }}</span>
                            <h3 class="mt-4 text-xl font-semibold text-gray-900">{{ $program['title'] }}</h3>
                            <p class="mt-3 text-gray-600">{{ $program['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-20 px-6">
            <div class="max-w-7xl mx-auto">
                <div class="bg-blue-600 rounded-3xl p-10 text-center text-white shadow-xl">
                    <h2 class="text-3xl font-bold">{{ $cta['title'] }}</h2>
                    <p class="mt-4 text-blue-100 max-w-2xl mx-auto">{{ $cta['description'] }}</p>
                    <a href="{{ $cta['button']['url'] }}" class="mt-8 inline-block bg-white text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-blue-50 transition">
                        {{ $cta['button']['label'] }}
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h2 class="text-2xl font-bold text-blue-400">Ranah Academy</h2>
                    <p class="mt-4 text-gray-400">Belajar, berkembang, dan raih sertifikat bersama Ranah Academy.</p>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Menu</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/" class="hover:text-blue-400">Beranda</a></li>
                        <li><a href="/about" class="hover:text-blue-400">Tentang</a></li>
                        <li><a href="/articles" class="hover:text-blue-400">Artikel</a></li>
                        <li><a href="/events" class="hover:text-blue-400">Event</a></li>
                        <li><a href="/gallery" class="hover:text-blue-400">Galeri</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Academy</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/courses" class="hover:text-blue-400">Kelas</a></li>
                        <li><a href="/mentors" class="hover:text-blue-400">Mentor</a></li>
                        <li><a href="/certificate" class="hover:text-blue-400">Sertifikat</a></li>
                        <li><a href="/faq" class="hover:text-blue-400">FAQ</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>Email: hello@ranahacademy.com</li>
                        <li>WhatsApp: +62 812-3456-7890</li>
                        <li>Indonesia</li>
                    </ul>
                </div>
            </div>

            <hr class="my-8 border-gray-700">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-400 text-sm">© {{ date('Y') }} Ranah Academy. All rights reserved.</p>
                <div class="flex gap-2">
                    <a href="#" class="hover:text-blue-400 border border-gray-600 rounded-full p-2">f</a>
                    <a href="#" class="hover:text-blue-400 border border-gray-600 rounded-full p-2">in</a>
                    <a href="#" class="hover:text-blue-400 border border-gray-600 rounded-full p-2">ig</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('menu-button')?.addEventListener('click', function () {
            document.getElementById('mobile-menu')?.classList.toggle('hidden');
        });
    </script>
</body>

</html>
