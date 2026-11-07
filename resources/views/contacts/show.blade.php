@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-6 py-10">
    <nav class="flex mb-5 text-slate-500 text-sm" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li><a href="{{ route('admin.contacts.index') }}" class="hover:text-blue-600">Inbox</a></li>
            <li><span class="mx-2">/</span></li>
            <li class="text-slate-800 font-semibold">Detail Pesan</li>
        </ol>
    </nav>

    <div class="max-w-3xl bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="bg-slate-50 border-b border-slate-200 p-6 flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-slate-800">{{ $contact->subjek }}</h2>
                <p class="text-sm text-slate-500">Diterima pada: {{ $contact->created_at->format('d F Y, H:i') }}</p>
            </div>
            <a href="{{ route('admin.contacts.index') }}" class="bg-white border border-slate-300 hover:bg-slate-100 text-slate-700 px-4 py-2 rounded-lg text-sm transition">
                <i class="fas fa-arrow-left mr-1"></i> Kembali
            </a>
        </div>

        <div class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 bg-blue-50 p-6 rounded-xl border border-blue-100">
                <div>
                    <span class="block text-xs font-bold uppercase text-blue-600 mb-1">Nama Pengirim</span>
                    <p class="text-lg font-semibold text-slate-800">{{ $contact->nama }}</p>
                </div>
                <div>
                    <span class="block text-xs font-bold uppercase text-blue-600 mb-1">Alamat Email</span>
                    <a href="mailto:{{ $contact->email }}" class="text-lg font-semibold text-blue-700 hover:underline">
                        {{ $contact->email }} <i class="fas fa-external-link-alt text-xs"></i>
                    </a>
                </div>
            </div>

            <div class="mb-8">
                <span class="block text-xs font-bold uppercase text-slate-400 mb-3">Isi Pesan / Kebutuhan Reklame</span>
                <div class="bg-slate-50 p-6 rounded-xl text-slate-700 leading-relaxed italic border-l-4 border-blue-500">
                    "{{ $contact->pesan }}"
                </div>
            </div>

            <div class="flex space-x-3 pt-6 border-t border-slate-100">
                <a href="https://wa.me/628123456789?text=Halo+{{ urlencode($contact->nama) }}%2C+terima+kasih+sudah+menghubungi+DaVinci+Reklame+mengenai+*{{ urlencode($contact->subjek) }}*." 
                   target="_blank"
                   class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-lg font-medium transition flex items-center">
                    <i class="fab fa-whatsapp mr-2"></i> Balas via WhatsApp
                </a>

                <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini secara permanen?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:bg-red-50 px-6 py-2 rounded-lg font-medium transition">
                        <i class="fas fa-trash-alt mr-2"></i> Hapus Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection