<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\CompanyInfoController;
use App\Http\Controllers\Admin\ContactController;

/*
|--------------------------------------------------------------------------
| Public Routes (Halaman Depan)
|--------------------------------------------------------------------------
*/
Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/tentang', 'about')->name('about');
    Route::get('/layanan', 'services')->name('services');
    Route::get('/layanan/{slug}', 'serviceDetail')->name('services.detail');
    // Route::get('/portofolio', 'portfolio')->name('portfolio');
    Route::get('/galerry', 'gallery')->name('gallery');
    Route::get('/kontak', 'contact')->name('contact');
    Route::post('/kontak', 'contactStore')->name('contact.send');
});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['guest'])->group(function () {
    Route::get('/panel-dvr2026', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/panel-dvr2026', [AuthController::class, 'login'])->name('login.post');
});

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

/*
|--------------------------------------------------------------------------
| Admin Routes (Protected by Auth)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('lmerlk2689')->name('admin.')->group(function () {
    
    // Dashboard & Redirect
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



    // Layanan (Services)
    Route::resource('services', ServiceController::class);

    // Galeri - DISESUAIKAN menjadi 'gallery' agar sesuai sidebar (admin.gallery.index)
    Route::resource('gallery', GalleryController::class);
    
    // Testimonial
    Route::resource('testimonials', TestimonialController::class);

    // Informasi Perusahaan
    Route::controller(CompanyInfoController::class)->group(function() {
        Route::get('/company-info', 'edit')->name('company-info.edit');
        Route::put('/company-info', 'update')->name('company-info.update');
    });

    // Inbox Pesan Kontak
    Route::controller(ContactController::class)->group(function() {
        Route::get('/contacts', 'index')->name('contacts.index');
        Route::get('/contacts/{contact}', 'show')->name('contacts.show');
        Route::patch('/contacts/{contact}/read', 'markAsRead')->name('contacts.read');
        Route::delete('/contacts/{contact}', 'destroy')->name('contacts.destroy');
    });
});

/*
|--------------------------------------------------------------------------
| Fallback Route (404)
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    if (view()->exists('errors.404')) {
        return response()->view('errors.404', [], 404);
    }
    abort(404);
});