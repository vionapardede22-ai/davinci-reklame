<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;

use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    // 1. Statistik Utama (Pastikan nama variabel sama dengan di Blade)
    $serviceCount = Service::count();

    $galleryCount = Gallery::count();
    $testimonialCount = Testimonial::count();
    
    // Sesuaikan ini menjadi contactCount agar tidak error lagi
    $contactCount = Contact::count(); 
    
    // Variabel tambahan untuk notifikasi (jika diperlukan di layout)
    $unreadMessages = Contact::where('dibaca', false)->count();

    // 2. Data Aktivitas Terbaru
    $recentContacts = Contact::latest()->limit(5)->get();


    // 3. Logika Greeting
    $hour = date('H');
    if ($hour < 12) {
        $greeting = 'Selamat Pagi';
    } elseif ($hour < 16) {
        $greeting = 'Selamat Siang';
    } elseif ($hour < 19) {
        $greeting = 'Selamat Sore';
    } else {
        $greeting = 'Selamat Malam';
    }

    // 4. Kirim ke View
    return view('admin.dashboard', compact(
        'serviceCount', 
        'galleryCount', 
        'testimonialCount', 
        'contactCount', // Ini yang dicari oleh file Blade Anda
        'unreadMessages',
        'recentContacts', 
        'greeting'
    ));
}
}