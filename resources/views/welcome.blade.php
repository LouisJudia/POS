<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Laravel 12</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-lg rounded-xl p-8 max-w-xl w-full text-center">
        <h1 class="text-3xl font-bold text-red-600 mb-4">
            Praktikum Laravel 12
        </h1>

        <p class="text-gray-600 mb-6">
            Dokumentasi Instalasi & Implementasi Framework Laravel
        </p>

        <div class="text-left text-gray-700 space-y-2 mb-6">
            <p><strong>Nama :</strong> Louis Judia</p>
            <p><strong>NIM :</strong> 20XXXXXXXX</p>
            <p><strong>Kelas :</strong> TI-XX</p>
            <p><strong>Mata Kuliah :</strong> Web Programming</p>
        </div>

        <div class="flex justify-center gap-4">
            <a href="https://laravel.com/docs"
               target="_blank"
               class="px-5 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                Dokumentasi Laravel
            </a>

            <a href="https://github.com/username/repo-laravel"
               target="_blank"
               class="px-5 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-900 transition">
                GitHub Project
            </a>
        </div>

        <p class="mt-8 text-sm text-gray-400">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} |
            PHP v{{ PHP_VERSION }}
        </p>
    </div>

</body>
</html>
