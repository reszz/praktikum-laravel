<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Mahasiswa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100 dark:from-gray-900 dark:to-gray-800 min-h-screen p-4 sm:p-8">
    <div class="max-w-2xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <a href="/mahasiswa" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-medium mb-4 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali
            </a>
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">Edit Mahasiswa</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-2">Perbarui informasi mahasiswa</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
            <form action="/mahasiswa/update/{{ $data->id }}" method="POST" class="space-y-6">
                @csrf
                
                <!-- Nama Input -->
                <div>
                    <label for="nama" class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">
                        Nama Mahasiswa
                    </label>
                    <input 
                        type="text" 
                        id="nama" 
                        name="nama" 
                        value="{{ $data->nama }}"
                        required
                        placeholder="Masukkan nama mahasiswa"
                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                    >
                </div>

                <!-- NIM Input -->
                <div>
                    <label for="nim" class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">
                        Nomor Induk Mahasiswa (NIM)
                    </label>
                    <input 
                        type="text" 
                        id="nim" 
                        name="nim" 
                        value="{{ $data->nim }}"
                        required
                        placeholder="Masukkan NIM"
                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                    >
                </div>

                <!-- Jurusan Input -->
                <div>
                    <label for="jurusan" class="block text-sm font-semibold text-gray-900 dark:text-white mb-2">
                        Jurusan
                    </label>
                    <input 
                        type="text" 
                        id="jurusan" 
                        name="jurusan" 
                        value="{{ $data->jurusan }}"
                        required
                        placeholder="Masukkan jurusan"
                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                    >
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 pt-4">
                    <button 
                        type="submit" 
                        class="flex-1 bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 flex items-center justify-center gap-2"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Update
                    </button>
                    <a 
                        href="/mahasiswa" 
                        class="flex-1 bg-gray-300 hover:bg-gray-400 dark:bg-gray-600 dark:hover:bg-gray-700 text-gray-900 dark:text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 flex items-center justify-center gap-2"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
