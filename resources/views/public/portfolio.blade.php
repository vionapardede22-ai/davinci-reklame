@extends('layouts.app') {{-- Pastikan Anda punya file layouts/app.blade.php --}}

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Gallery {{ $company->name ?? 'Kami' }}</h1>

    <div class="flex flex-wrap gap-2 mb-8">
        <a href="{{ route('portfolio') }}" class="px-4 py-2 bg-gray-200 rounded">Semua</a>
        @foreach($categories as $kategori)
            <span class="px-4 py-2 bg-blue-500 text-white rounded cursor-pointer">
                {{ $kategori }}
            </span>
        @endforeach
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($galleries as $item)
            <div class="border rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/gallery/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h5 class="font-bold">{{ $item->judul }}</h5>
                    <p class="text-sm text-gray-600">{{ $item->kategori }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $galleries->links() }}
    </div>
</div>
@endsection