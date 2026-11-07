<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_klien' => 'required|max:255',
            'testimoni' => 'required',
            'foto' => 'nullable|image|max:2048',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/testimonials'), $filename);
            $data['foto'] = $filename;
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil ditambahkan!');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'nama_klien' => 'required|max:255',
            'testimoni' => 'required',
            'foto' => 'nullable|image|max:2048',
            'rating' => 'nullable|integer|min:1|max:5',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($testimonial->foto && file_exists(public_path('images/testimonials/' . $testimonial->foto))) {
                unlink(public_path('images/testimonials/' . $testimonial->foto));
            }

            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/testimonials'), $filename);
            $data['foto'] = $filename;
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil diupdate!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->foto && file_exists(public_path('images/testimonials/' . $testimonial->foto))) {
            unlink(public_path('images/testimonials/' . $testimonial->foto));
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil dihapus!');
    }
}