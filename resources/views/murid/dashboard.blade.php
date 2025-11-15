<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Dashboard Murid - Sistem Sekolah</title>
</head>
<body class="bg-gray-200">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('logo-sekolah.png') }}" alt="Logo Sekolah" class="h-12 w-12 object-contain">
                <h1 class="text-2xl font-bold text-gray-800">Sistem Sekolah</h1>
            </div>
            
            <div class="flex items-center space-x-6">
                <div class="flex items-center space-x-3 border-l-2 border-gray-300 pl-6">
                    <div class="text-right">
                        <p class="font-semibold text-gray-800">{{ auth()->user()->name }}</p>
                        <p class="text-sm text-gray-500">👨‍🎓 Murid</p>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center text-white text-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#f0fff4" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap-icon 
                        lucide-graduation-cap"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/></svg>
                    </div>
                </div>

                <form action="/logout" method="POST" style="display: inline;">
                    @csrf
                    <button 
                        type="submit"
                        class="text-red-600 hover:text-red-700 font-semibold transition flex items-center space-x-1"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content (Full Width) -->
    <main class="max-w-7xl mx-auto p-8">
        <!-- Welcome Section -->
        <div class="mb-8" data-aos="fade-down">
            <div class="bg-gradient-to-r from-green-600 to-emerald-600 text-white p-8 rounded-xl shadow-lg">
                <h2 class="text-3xl font-bold mb-2">Selamat Datang, {{ auth()->user()->name }}! 👋</h2>
                <p class="text-green-100">Portal pembelajaran digital - Kelola akun dan data akademik Anda</p>
            </div>
        </div>

        <!-- Informasi Akun -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8" data-aos="fade-up" data-aos-delay="100">
            <!-- Left Column: Informasi Pribadi -->
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-800 flex items-center">
                        <svg class="w-8 h-8 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Informasi Pribadi
                    </h3>
                    <p class="text-gray-500 text-sm mt-1">Data diri dan identitas murid</p>
                </div>

                <div class="space-y-4">
                    <!-- Nama Lengkap -->
                    <div class="flex items-center space-x-4 p-4 bg-blue-50 rounded-lg">
                        <div class="w-12 h-12 bg-blue-200 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Nama Lengkap</p>
                            <p class="text-gray-800 font-bold text-lg">{{ auth()->user()->name }}</p>
                        </div>
                    </div>

                    <!-- NIS -->
                    <div class="flex items-center space-x-4 p-4 bg-purple-50 rounded-lg">
                        <div class="w-12 h-12 bg-purple-200 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-700" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M7 3a1 1 0 000 2h6a1 1 0 000-2H7zM4 7a1 1 0 011-1h10a1 1 0 011 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1V7zM2 11a2 2 0 012-2h12a2 2 0 012 2v3a2 2 0 01-2 2H4a2 2 0 01-2-2v-3z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Nomor Induk Siswa (NIS)</p>
                            <p class="text-gray-800 font-bold text-lg">{{ auth()->user()->nis ?? '-' }}</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-center space-x-4 p-4 bg-pink-50 rounded-lg">
                        <div class="w-12 h-12 bg-pink-200 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-pink-700" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Email</p>
                            <p class="text-gray-800 font-bold break-all">{{ auth()->user()->email }}</p>
                        </div>
                    </div>


                </div>
            </div>

            <!-- Right Column: Status Akun -->
            <div class="space-y-6">
                <!-- Status Akun Header -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold text-gray-800 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#19e14e" stroke-width="1.1666666666666667" stroke-linecap="round" stroke-linejoin="round" class="lucide 
                            lucide-chart-no-axes-column-increasing-icon lucide-chart-no-axes-column-increasing"><path d="M5 21v-6"/><path d="M12 21V9"/><path d="M19 21V3"/></svg>
                            Status Akun
                        </h3>
                        <p class="text-gray-500 text-sm mt-1">Informasi status dan aktivitas</p>
                    </div>

                    <div class="bg-green-50 border-l-4 border-green-600 rounded-lg p-6">
                        <div class="flex items-center mb-2">
                            <div class="w-3 h-3 bg-green-600 rounded-full mr-3"></div>
                            <p class="text-green-800 font-bold text-lg">Akun Aktif</p>
                        </div>
                        <p class="text-green-700 text-sm">Akun Anda dalam status aktif dan dapat mengakses semua fitur portal murid.</p>
                    </div>
                </div>

                <!-- Tipe Akun -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <p class="text-gray-700 font-semibold mb-4 text-lg">Tipe Akun</p>
                    <div class="bg-blue-50 border border-blue-300 rounded-lg p-5">
                        <p class="text-blue-800 font-bold text-lg">Murid / Siswa</p>
                    </div>
                </div>


                <!-- Informasi Penting -->
                <div class="bg-blue-50 border-l-4 border-blue-600 rounded-lg p-6">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zm-11-1a1 1 0 11-2 0 1 1 0 012 0zm3 0a1 1 0 11-2 0 1 1 0 012 0zm3 0a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <p class="text-blue-800 font-bold">Informasi</p>
                            <p class="text-blue-700 text-sm mt-1">Simpan NIS Anda dengan baik. Gunakan NIS untuk login ke sistem.</p>
                        </div>
                    </div>
                </div>

        </div>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>
