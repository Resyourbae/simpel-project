<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Login - Sistem Sekolah</title>
</head>
<body class="bg-gradient-to-br from-blue-200 to-indigo-600 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md" data-aos="fade-up">
        <!-- Card Container -->
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-8 py-12 text-center">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#4556b0" stroke-width="1.05" stroke-linecap="round" 
                    stroke-linejoin="round" class="lucide lucide-school-icon lucide-school"><path d="M14 21v-3a2 2 0 0 0-4 0v3"/><path d="M18 5v16"/><path d="m4 6 7.106-3.79a2 2 0 0 1 1.788 0L20 6"/><path d="m6 11-3.52 2.147a1 1 0 0 0-.48.854V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5a1 1 0 0 0-.48-.853L18 11"/><path d="M6 5v16"/><circle cx="12" cy="9" r="2"/></svg>
                </div>
                <h1 class="text-3xl font-bold text-white">Sistem Sekolah</h1>
                <p class="text-blue-100 text-sm mt-2">Portal Pembelajaran Digital</p>
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

                <form action="/login" method="POST" class="space-y-6">
                    @csrf

                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                            Email Anda
                        </label>
                        <input 
                            type="email" 
                            id="email"
                            name="email" 
                            value="{{ old('email') }}"
                            placeholder="nama@sekolah.com"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition-colors"
                            required
                        >
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                            Password
                        </label>
                        <input 
                            type="password" 
                            id="password"
                            name="password" 
                            placeholder="••••••••"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition-colors"
                            required
                        >
                    </div>

                    <!-- Login Button -->
                    <button 
                        type="submit" 
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold py-3 rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-200"
                    >
                        Masuk
                    </button>
                </form>

                <!-- Divider -->
                <div class="my-6 flex items-center">
                    <div class="flex-1 border-t-2 border-gray-300"></div>
                    <span class="px-3 text-gray-500 text-sm">atau</span>
                    <div class="flex-1 border-t-2 border-gray-300"></div>
                </div>

                <!-- Register Link -->
                <p class="text-center text-gray-600">
                    Belum punya akun?
                    <a href="/register" class="text-blue-600 font-bold hover:text-blue-700 transition-colors">
                        Daftar di sini
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
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>