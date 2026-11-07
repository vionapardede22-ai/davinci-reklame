@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Galeri</h2>
        
        <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Judul Foto</label>
                <input type="text" name="judul" value="{{ old('judul', $gallery->judul) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Urutan Tampil</label>
                <input type="number" name="urutan" value="{{ old('urutan', $gallery->urutan) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Foto Saat Ini</label>
                <img src="{{ asset('images/gallery/' . $gallery->gambar) }}" class="h-40 w-full object-cover rounded mb-2 shadow-sm border">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Ganti Gambar (Opsional)</label>
                <input type="file" name="gambar" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg focus:outline-none focus:shadow-outline">
                    Update Foto
                </button>
                <a href="{{ route('admin.gallery.index') }}" class="text-gray-600 hover:underline">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection