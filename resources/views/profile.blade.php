<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100 dark:from-gray-900 dark:to-gray-800 min-h-screen p-4 sm:p-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <a href="/mahasiswa" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-medium mb-6 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali
        </a>

        <!-- Profile Card -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <!-- Header Background -->
            <div class="h-32 bg-gradient-to-r from-blue-600 to-blue-700"></div>

            <!-- Content -->
            <div class="px-8 pb-8">
                <div class="flex items-start gap-6 -mt-16 mb-8">
                    <div class="w-32 h-32 bg-blue-600 rounded-full border-4 border-white dark:border-gray-800 flex items-center justify-center shadow-lg">
                        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <div class="flex-1 mt-2">
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Profil Pengguna</h1>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">Kelola informasi akun Anda</p>
                    </div>
                </div>

                <!-- Info Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg">
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-medium uppercase tracking-wide">Nama Lengkap</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white mt-2">Pengguna</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg">
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-medium uppercase tracking-wide">Email</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white mt-2">user@example.com</p>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg">
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-medium uppercase tracking-wide">Status</p>
                        <div class="flex items-center gap-2 mt-2">
                            <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                            <span class="text-lg font-semibold text-gray-900 dark:text-white">Aktif</span>
                        </div>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg">
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-medium uppercase tracking-wide">Tergabung</p>
                        <p class="text-lg font-semibold text-gray-900 dark:text-white mt-2">2024</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-4 mt-8">
                    <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit Profile
                    </button>
                    <button class="bg-gray-300 hover:bg-gray-400 dark:bg-gray-600 dark:hover:bg-gray-700 text-gray-900 dark:text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>