@extends('layouts.app')

@section('title', 'Gallery - DaVinci Reklame')

@section('content')
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Gallery Karya Kami</h1>
            <p class="text-gray-500">Kumpulan hasil karya terbaik DaVinci Reklame</p>
        </div>

        {{-- Filter Kategori --}}
        <div class="flex flex-wrap justify-center gap-2 mb-10">
            <a href="{{ route('gallery') }}" class="px-5 py-2 bg-blue-600 text-white rounded-full text-sm font-medium hover:bg-blue-700 transition">Semua</a>
            @foreach($categories as $kategori)
                <a href="{{ route('gallery', ['kategori' => $kategori]) }}" class="px-5 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-blue-600 hover:text-white transition">
                    {{ $kategori }}
                </a>
            @endforeach
        </div>

        {{-- Grid Gallery --}}
        @if($galleries->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($galleries as $item)
                    <div class="bg-white border border-gray-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition">
                        <img src="{{ asset('images/gallery/' . $item->gambar) }}" 
                             alt="{{ $item->judul }}" 
                             class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h5 class="font-bold text-gray-800">{{ $item->judul }}</h5>
                            <span class="text-xs text-blue-600 bg-blue-50 px-2 py-1 rounded-full">{{ $item->kategori }}</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $galleries->links() }}
            </div>
        @else
            <div class="text-center py-20 text-gray-400">
                <i class="fas fa-images text-5xl mb-4"></i>
                <p class="text-lg">Belum ada foto di gallery.</p>
            </div>
        @endif
    </div>
</section>
@endsection