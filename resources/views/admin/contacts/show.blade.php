@extends('layouts.admin')

@section('header', 'Detail Pesan')

@section('content')
<div class="max-w-4xl">
    <a href="{{ route('admin.contacts.index') }}" class="text-blue-600 hover:underline mb-4 inline-block">
        <i class="fas fa-arrow-left mr-1"></i> Kembali ke Inbox
    </a>

    <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
        <div class="p-6 border-b border-gray-100 bg-gray-50">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">
                        {{ $contact->subject ?? $contact->subjek ?? 'Tanpa Subjek' }}
                    </h2>
                    <p class="text-sm text-gray-500 mt-1">
                        Dari: <span class="text-blue-500 font-medium">{{ $contact->name }}</span> 
                        <span class="text-gray-400">({{ $contact->email }})</span>
                    </p>
                </div>
                <div class="text-right text-sm text-gray-500">
                    <p>Diterima pada:</p>
                    <p class="font-medium text-gray-700">{{ $contact->created_at->format('d M Y, H:i') }}</p>
                </div>
            </div>
        </div>

        <div class="p-8 min-h-[200px]">
            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-6">ISI PESAN:</h3>
            <div class="text-gray-700 leading-relaxed text-lg">
                {{ $contact->message ?? $contact->pesan }}
            </div>
        </div>

        <div class="p-6 bg-gray-50 border-t border-gray-100 flex justify-end space-x-3">
            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-lg text-sm font-semibold transition flex items-center">
                    <i class="fas fa-trash-alt mr-2"></i> Hapus Pesan
                </button>
            </form>
            
            <a href="mailto:{{ $contact->email }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg text-sm font-semibold transition flex items-center">
                <i class="fas fa-reply mr-2"></i> Balas via Email
            </a>
        </div>
    </div>
</div>
@endsection