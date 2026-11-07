@extends('layouts.admin')

@section('header', 'Edit Layanan')

@section('content')

<div class="max-w-2xl bg-white rounded-xl shadow-sm p-8 border border-gray-100">

<form action="{{ route('admin.services.update', $service->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            Nama Layanan
        </label>

        <input type="text"
               name="nama"
               value="{{ old('nama', $service->nama) }}"
               class="w-full border rounded-lg p-3"
               required>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            FontAwesome Icon
        </label>

        <input type="text"
               name="icon"
               value="{{ old('icon', $service->icon) }}"
               class="w-full border rounded-lg p-3">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            Deskripsi
        </label>

        <textarea name="deskripsi"
                  rows="5"
                  class="w-full border rounded-lg p-3"
                  required>{{ old('deskripsi', $service->deskripsi) }}</textarea>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            Foto Layanan
        </label>

        @if($service->gambar)
            <img src="{{ asset('images/services/'.$service->gambar) }}"
                 class="w-40 rounded border mb-3">
        @endif

        <input type="file"
               name="gambar"
               class="w-full border rounded-lg p-3">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            Urutan Tampil
        </label>

        <input type="number"
               name="urutan"
               value="{{ old('urutan', $service->urutan) }}"
               class="w-full border rounded-lg p-3">
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2">
            Status
        </label>

        <select name="aktif"
                class="w-full border rounded-lg p-3">

            <option value="1" {{ $service->aktif ? 'selected' : '' }}>
                Aktif
            </option>

            <option value="0" {{ !$service->aktif ? 'selected' : '' }}>
                Nonaktif
            </option>

        </select>
    </div>

    <div class="flex space-x-3">
        <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg font-bold">
            Update Layanan
        </button>

        <a href="{{ route('admin.services.index') }}"
           class="bg-gray-200 text-gray-700 px-6 py-3 rounded-lg font-bold">
            Batal
        </a>
    </div>

</form>

</div>
@endsection
