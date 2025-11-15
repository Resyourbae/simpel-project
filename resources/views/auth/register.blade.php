<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Register - Sistem Sekolah</title>
</head>
<body class="bg-gradient-to-br from-blue-200 to-green-600 min-h-screen flex items-center justify-center p-4 py-8">
    <div class="w-full max-w-lg" data-aos="fade-up">
        <!-- Card Container -->
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-green-600 to-emerald-600 px-8 py-12 text-center">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-white">Daftar Akun</h1>
                <p class="text-green-100 text-sm mt-2">Bergabunglah dengan sistem pembelajaran kami</p>
            </div>

            <!-- Form Container -->
            <div class="px-8 py-8">
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                        @foreach ($errors->all() as $error)
                            <p class="text-red-600 text-sm">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form action="/register" method="POST" class="space-y-5">
                    @csrf

                    <!-- Nama Input -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama Lengkap
                        </label>
                        <input 
                            type="text" 
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Masukkan nama lengkap Anda"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-500 transition-colors"
                            required
                        >
                    </div>

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                            Email
                        </label>
                        <input 
                            type="email" 
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@sekolah.com"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-500 transition-colors"
                            required
                        >
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                            Password (minimum 6 karakter)
                        </label>
                        <input 
                            type="password" 
                            id="password"
                            name="password"
                            placeholder="••••••••"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-500 transition-colors"
                            required
                            minlength="6"
                        >
                    </div>

                    <!-- Role Selection -->
                    <div class="bg-gray-50 p-4 rounded-lg border-2 border-gray-200">
                        <p class="text-sm font-semibold text-gray-700 mb-3">Pilih Role Anda:</p>
                        
                        <!-- Guru Option -->
                        <div class="mb-3">
                            <label class="flex items-center p-3 border-2 border-gray-300 rounded-lg cursor-pointer hover:bg-blue-50 transition-colors">
                                <input type="radio" name="role_select" value="guru" class="w-4 h-4 text-blue-600">
                                <span class="ml-3 text-sm font-medium text-gray-700">
                                    👨‍🏫 Guru - Masukkan NIP
                                </span>
                            </label>
                            <input 
                                type="number" 
                                name="nip"
                                value="{{ old('nip') }}"
                                placeholder="Nomor Induk Pegawai"
                                class="w-full px-4 py-2 mt-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition-colors hidden"
                                id="nip_input"
                            >
                        </div>

                        <!-- Murid Option -->
                        <div>
                            <label class="flex items-center p-3 border-2 border-gray-300 rounded-lg cursor-pointer hover:bg-green-50 transition-colors">
                                <input type="radio" name="role_select" value="murid" class="w-4 h-4 text-green-600">
                                <span class="ml-3 text-sm font-medium text-gray-700">
                                    👨‍🎓 Murid - Masukkan NIS
                                </span>
                            </label>
                            <input 
                                type="number" 
                                name="nis"
                                value="{{ old('nis') }}"
                                placeholder="Nomor Induk Siswa"
                                class="w-full px-4 py-2 mt-2 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-green-500 transition-colors hidden"
                                id="nis_input"
                            >
                        </div>
                    </div>

                    <!-- Register Button -->
                    <button 
                        type="submit" 
                        class="w-full bg-gradient-to-r from-green-600 to-emerald-600 text-white font-bold py-3 rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-200"
                    >
                        Daftar Akun
                    </button>
                </form>

                <!-- Divider -->
                <div class="my-6 flex items-center">
                    <div class="flex-1 border-t-2 border-gray-300"></div>
                    <span class="px-3 text-gray-500 text-sm">atau</span>
                    <div class="flex-1 border-t-2 border-gray-300"></div>
                </div>

                <!-- Login Link -->
                <p class="text-center text-gray-600">
                    Sudah punya akun?
                    <a href="/login" class="text-green-600 font-bold hover:text-green-700 transition-colors">
                        Masuk di sini
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer Info -->
        <p class="text-center text-blue-100 text-xs mt-6">
            © 2025 Sistem Informasi Sekolah. Hak Cipta Dilindungi.
        </p>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Toggle NIP/NIS input based on role selection
        const roleRadios = document.querySelectorAll('input[name="role_select"]');
        const nipInput = document.getElementById('nip_input');
        const nisInput = document.getElementById('nis_input');

        roleRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'guru') {
                    nipInput.classList.remove('hidden');
                    nipInput.required = true;
                    nisInput.classList.add('hidden');
                    nisInput.required = false;
                } else {
                    nisInput.classList.remove('hidden');
                    nisInput.required = true;
                    nipInput.classList.add('hidden');
                    nipInput.required = false;
                }
            });
        });
    </script>
</body>
</html>