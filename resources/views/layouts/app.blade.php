<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Davinci Reklame - Terpercaya')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-blue-900 to-blue-700 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <div class="bg-white p-2 rounded-lg">
                        <i class="fas fa-palette text-blue-600 text-2xl"></i>
                    </div>
                    <span class="text-2xl font-bold">Davinci <span class="text-blue-300">Reklame</span></span>
                </a>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-blue-300 transition {{ request()->routeIs('home') ? 'text-blue-300 font-semibold' : '' }}">Beranda</a>
                    <a href="{{ route('about') }}" class="hover:text-blue-300 transition {{ request()->routeIs('about') ? 'text-blue-300 font-semibold' : '' }}">Tentang</a>
                    <a href="{{ route('services') }}" class="hover:text-blue-300 transition {{ request()->routeIs('services') ? 'text-blue-300 font-semibold' : '' }}">Layanan</a>
                    <a href="{{ route('gallery') }}" class="hover:text-blue-300 transition {{ request()->routeIs('gallery') ? 'text-blue-300 font-semibold' : '' }}">Gallery</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-300 transition {{ request()->routeIs('contact') ? 'text-blue-300 font-semibold' : '' }}">Kontak</a>
                    <!-- <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg transition">
                        <i class="fas fa-lock mr-2"></i>Admin
                    </a> -->
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-white">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 space-y-3">
                <a href="{{ route('home') }}" class="block py-2 hover:text-blue-300">Beranda</a>
                <a href="{{ route('about') }}" class="block py-2 hover:text-blue-300">Tentang</a>
                <a href="{{ route('services') }}" class="block py-2 hover:text-blue-300">Layanan</a>
                <a href="{{ route('gallery') }}" class="block py-2 hover:text-blue-300">Gallery</a>
                <a href="{{ route('contact') }}" class="block py-2 hover:text-blue-300">Kontak</a>
                <a href="{{ route('login') }}" class="block py-2 text-blue-300">Admin Panel</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer
        class="relative bg-cover bg-center bg-no-repeat text-gray-300 pt-16 pb-8"
        style="background-image: url('{{ asset('reklame5.png') }}');">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 container mx-auto px-6">

    <div class="container mx-auto px-6 relative z-10">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="bg-blue-600 p-2 rounded">
                            <i class="fas fa-palette text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">Davinci Reklame</h3>
                    </div>
                    <p class="text-sm text-gray-400 mb-4">Yang terbaik akan kami berikan kepada pelanggan kami</p>
                    <div class="flex space-x-3">
                        <a href="#" class="bg-blue-600 p-2 rounded hover:bg-blue-700 transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="bg-blue-600 p-2 rounded hover:bg-blue-700 transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="bg-blue-600 p-2 rounded hover:bg-blue-700 transition"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Menu Cepat</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-blue-400 transition">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-blue-400 transition">Tentang Kami</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-blue-400 transition">Layanan</a></li>
                        <li><a href="{{ route('gallery') }}" class="hover:text-blue-400 transition">Gallery</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-blue-400 transition">Kontak</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Layanan Kami</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-blue-400 transition">Papan Bunga</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Stempel</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Batu Nisan</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Batu Prasas</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Dll</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Hubungi Kami</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-500 mt-1 mr-3"></i>
                            <span>Pakpak Bharat - Matakocing, salak Desa Salak 1  </span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone text-blue-500 mr-3"></i>
                            <span>0812-6971-5001</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-6 text-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} Davinci Reklame. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>