@extends('layouts.admin')

@section('header', 'Manajemen Layanan')

@section('content')
<div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
    <div class="p-6 flex justify-between items-center border-b">
        <h3 class="font-bold text-gray-700">Daftar Layanan</h3>
        <a href="{{ route('admin.services.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            <i class="fas fa-plus mr-2"></i> Tambah Layanan
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-sm font-semibold text-gray-600">Nama Layanan</th>
                    <th class="px-6 py-4 text-sm font-semibold text-gray-600">Icon/Foto</th>
                    <th class="px-6 py-4 text-sm font-semibold text-gray-600 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($services as $service)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium text-gray-800">{{ $service->nama }}</td>
                    <td class="px-6 py-4">
                        <i class="{{ $service->icon }} text-blue-600 text-xl"></i>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end space-x-2">
                            <a href="{{ route('admin.services.edit', $service->id) }}" class="p-2 text-yellow-600 hover:bg-yellow-50 rounded"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Hapus layanan ini?')">
                                @csrf @method('DELETE')
                                <button class="p-2 text-red-600 hover:bg-red-50 rounded"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection