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

<script>
    document.getElementById('menu-button')?.addEventListener('click', function () {
        document.getElementById('mobile-menu')?.classList.toggle('hidden');
    });
</script>
