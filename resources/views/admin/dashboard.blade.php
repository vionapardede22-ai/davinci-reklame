@extends('layouts.admin')

@section('header', 'Ringkasan Statistik')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <div class="flex items-center">
            <div class="p-3 bg-blue-100 text-blue-600 rounded-lg mr-4"><i class="fas fa-concierge-bell fa-2x"></i></div>
            <div>
                <p class="text-sm text-gray-500">Total Layanan</p>
                <h3 class="text-2xl font-bold">{{ $serviceCount }}</h3>
            </div>
        </div>
    </div>
    
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <div class="flex items-center">
            <div class="p-3 bg-green-100 text-green-600 rounded-lg mr-4"><i class="fas fa-images fa-2x"></i></div>
            <div>
                <p class="text-sm text-gray-500">Gallery</p>
                <h3 class="text-2xl font-bold">{{ $galleryCount }}</h3>
            </div>
        </div>
    </div>


@endsection