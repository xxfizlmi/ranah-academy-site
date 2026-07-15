<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">
    @include('partials.navbar')

    <main class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-3xl mx-auto">
                <span class="text-blue-600 font-semibold">Kontak</span>
                <h1 class="mt-3 text-4xl font-bold text-gray-900">{{ $page['headline'] }}</h1>
                <p class="mt-4 text-gray-600">{{ $page['description'] }}</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                @foreach ($page['items'] as $item)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <h3 class="text-xl font-semibold text-gray-900">{{ $item['title'] }}</h3>
                        <p class="mt-3 text-gray-600">{{ $item['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
