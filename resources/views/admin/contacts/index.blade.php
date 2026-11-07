@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Pesan Masuk (Inbox)</h1>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subjek</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($contacts as $contact)
                <tr class="{{ $contact->is_read ? 'bg-white' : 'bg-blue-50' }}">
                    <td class="px-6 py-4">{{ $contact->name }}</td>
                    <td class="px-6 py-4">{{ $contact->email }}</td>
                    <td class="px-6 py-4 font-medium">{{ $contact->subject }}</td>
                    <td class="px-6 py-4 text-sm">{{ $contact->created_at->format('d M Y') }}</td>
                    <td class="px-6 py-4 flex space-x-2">
                        <a href="{{ route('admin.contacts.show', $contact->id) }}" class="text-blue-600 hover:text-blue-900">
                            <i class="fas fa-eye"></i> Baca
                        </a>
                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">
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