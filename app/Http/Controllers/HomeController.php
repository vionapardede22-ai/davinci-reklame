<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\CompanyInfo;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::where('aktif', true)
            ->orderBy('urutan')
            ->limit(6)
            ->get();

        $galleries = Gallery::orderBy('urutan')
            ->limit(6)
            ->get();

        $testimonials = Testimonial::where('tampilkan', true)
            ->latest()
            ->limit(3)
            ->get();

        $company = CompanyInfo::first();

        return view('public.home', compact(
            'services',
            'galleries',
            'testimonials',
            'company'
        ));
    }

    public function about()
    {
        $company = CompanyInfo::first();

        return view('public.about', compact('company'));
    }

    public function services()
    {
        $services = Service::where('aktif', true)
            ->orderBy('urutan')
            ->get();

        $company = CompanyInfo::first();

        return view('public.services', compact('services', 'company'));
    }

    public function gallery()
    {
        $galleries = Gallery::orderBy('urutan')
            ->paginate(12);

        $categories = Gallery::select('kategori')
            ->distinct()
            ->pluck('kategori');

        $company = CompanyInfo::first();

        return view('public.gallery', compact(
            'galleries',
            'categories',
            'company'
        ));
    }

    public function contact()
    {
        $company = CompanyInfo::first();

        return view('public.contact', compact('company'));
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'nama'   => 'required|max:255',
            'email'  => 'required|email',
            'subjek' => 'required|max:255',
            'pesan'  => 'required',
        ]);

        Contact::create($request->all());

        return redirect()
            ->route('contact')
            ->with('success', 'Pesan berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}