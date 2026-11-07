<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - DaVinci</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-slate-900 text-white flex-shrink-0">
            <div class="p-6">
                <span class="text-2xl font-bold">Admin<span class="text-blue-400">Panel</span></span>
            </div>
            
            <nav class="mt-6 px-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center p-3 mb-2 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600' : '' }}">
                    <i class="fas fa-chart-line w-6 mr-3"></i> Dashboard
                </a>

                <a href="{{ route('admin.services.index') }}" class="flex items-center p-3 mb-2 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.services.*') ? 'bg-blue-600' : '' }}">
                    <i class="fas fa-concierge-bell w-6 mr-3"></i> Layanan
                </a>



                <a href="{{ route('admin.gallery.index') }}" class="flex items-center p-3 mb-2 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.gallery.*') ? 'bg-blue-600' : '' }}">
                    <i class="fas fa-images w-6 mr-3"></i> Gallery
                </a>

                <hr class="border-slate-700 my-4">

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center p-3 w-full text-red-400 hover:bg-slate-800 rounded-lg transition-colors">
                        <i class="fas fa-sign-out-alt w-6 mr-3"></i> Keluar
                    </button>
                </form>
            </nav>
        </aside>

        <main class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold text-gray-800">@yield('header', 'Dashboard')</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Halo, {{ Auth::user()->name }}</span>
                    <a href="{{ route('home') }}" target="_blank" class="text-blue-600 text-sm hover:underline">
                        Lihat Situs <i class="fas fa-external-link-alt ml-1"></i>
                    </a>
                </div>
            </header>

            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 shadow-sm flex justify-between items-center">
                    <span>{{ session('success') }}</span>
                    <button onclick="this.parentElement.remove()" class="text-green-500 hover:text-green-700">&times;</button>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 shadow-sm flex justify-between items-center">
                    <span>{{ session('error') }}</span>
                    <button onclick="this.parentElement.remove()" class="text-red-500 hover:text-red-700">&times;</button>
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>