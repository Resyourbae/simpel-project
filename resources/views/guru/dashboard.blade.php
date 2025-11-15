<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Dashboard Guru - Sistem Sekolah</title>
</head>
<body class="bg-gradient-to-r from-blue-100 to-indigo-300">
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
                        <p class="text-sm text-gray-500">👨‍🏫 Guru</p>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white text-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
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
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-8 rounded-xl shadow-lg">
                <h2 class="text-3xl font-bold mb-2">Selamat Datang, {{ auth()->user()->name }}! 👋</h2>
                <p class="text-blue-100">Dashboard Guru - Kelola kelas, siswa, dan nilai dengan mudah</p>
            </div>
        </div>

        <!-- Informasi Profil -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user mr-2 text-blue-600">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                    Informasi Profil Anda
                </h3>
                <div class="space-y-4">
                    <div class="p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border-l-4 border-blue-600">
                        <p class="text-gray-500 font-medium text-sm">Nama Lengkap</p>
                        <p class="text-gray-800 font-bold text-lg mt-1">{{ auth()->user()->name }}</p>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-lg border-l-4 border-purple-600">
                        <p class="text-gray-500 font-medium text-sm">Email</p>
                        <p class="text-gray-800 font-bold mt-1">{{ auth()->user()->email }}</p>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-lg border-l-4 border-yellow-600">
                        <p class="text-gray-500 font-medium text-sm">NIP (Nomor Induk Pegawai)</p>
                        <p class="text-gray-800 font-bold text-lg mt-1">{{ auth()->user()->nip ?? 'Belum diisi' }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6" data-aos="fade-up" data-aos-delay="200">
                <div class="space-y-4">
                    <div class="p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg">
                        <p class="text-gray-500 font-medium text-sm">Status</p>
                        <p class="mt-1">
                            <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">
                                ✓ Aktif
                            </span>
                        </p>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg">
                        <p class="text-gray-500 font-medium text-sm">Role / Peran</p>
                        <p class="text-gray-800 font-bold text-lg mt-1">Guru</p>
                    </div>
                    <div class="p-4 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg">
                        <p class="text-gray-500 font-medium text-sm">Bergabung Sejak</p>
                        <p class="text-gray-800 font-bold text-lg mt-1">{{ auth()->user()->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info Footer -->
        <div class="mt-8 text-center text-gray-500 text-sm">
            <p>© 2025 Sistem Informasi Sekolah. Hak Cipta Dilindungi.</p>
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