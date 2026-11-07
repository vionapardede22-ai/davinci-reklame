@extends('layouts.admin')

@section('header', 'Tambah Layanan Baru')

@section('content')

<div class="max-w-2xl bg-white rounded-xl shadow-sm p-8 border border-gray-100">

<form action="{{ route('admin.services.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            Nama Layanan
        </label>

        <input type="text"
               name="nama"
               class="w-full border rounded-lg p-3"
               required>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            FontAwesome Icon
        </label>

        <input type="text"
               name="icon"
               class="w-full border rounded-lg p-3">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            Deskripsi
        </label>

        <textarea name="deskripsi"
                  rows="5"
                  class="w-full border rounded-lg p-3"
                  required></textarea>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2">
            Foto Layanan
        </label>

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
               value="0"
               class="w-full border rounded-lg p-3">
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 font-semibold mb-2">
            Status
        </label>

        <select name="aktif"
                class="w-full border rounded-lg p-3">
            <option value="1">Aktif</option>
            <option value="0">Nonaktif</option>
        </select>
    </div>

    <button type="submit"
            class="bg-blue-600 text-white px-6 py-3 rounded-lg">
        Simpan Layanan
    </button>

</form>

</div>
@endsection
