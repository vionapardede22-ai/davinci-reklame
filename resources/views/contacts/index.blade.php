@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-6 py-10">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold text-slate-800">Inbox Pesanan Masuk</h2>
        <span class="bg-blue-100 text-blue-800 px-4 py-1 rounded-full text-sm font-medium">Total: {{ $contacts->count() }} Pesan</span>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden border border-slate-200">
        <table class="w-full text-left">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600">Nama</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600">Subjek</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600">Tanggal</th>
                    <th class="px-6 py-4 text-sm font-semibold text-slate-600 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @foreach($contacts as $contact)
                <tr class="hover:bg-slate-50 transition">
                    <td class="px-6 py-4 font-medium">{{ $contact->nama }}</td>
                    <td class="px-6 py-4 text-slate-600">{{ $contact->subjek }}</td>
                    <td class="px-6 py-4 text-sm text-slate-500">{{ $contact->created_at->format('d M Y') }}</td>
                    <td class="px-6 py-4 flex justify-center space-x-2">
                        <a href="{{ route('admin.contacts.show', $contact->id) }}" class="text-blue-600 hover:text-blue-800 p-2">
                            <i class="fas fa-eye"></i>
                        </a>
                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 p-2">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection