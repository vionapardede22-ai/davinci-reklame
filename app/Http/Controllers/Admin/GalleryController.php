<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
{
    $galleries = Gallery::orderBy('urutan')->get();
    return view('admin.gallery.index', compact('galleries'));
}

public function create()
{
    return view('admin.gallery.create');
}

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'gambar' => 'required|image|max:2048',
            'kategori' => 'nullable|max:100',
            'urutan' => 'nullable|integer',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $targetDir = public_path('images/gallery');
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0755, true);
            }
            $file->move($targetDir, $filename);
            $data['gambar'] = $filename;
        }

        Gallery::create($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Galeri berhasil ditambahkan!');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'gambar' => 'nullable|image|max:2048',
            'kategori' => 'nullable|max:100',
            'urutan' => 'nullable|integer',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if ($gallery->gambar && file_exists(public_path('images/gallery/' . $gallery->gambar))) {
                unlink(public_path('images/gallery/' . $gallery->gambar));
            }

            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $targetDir = public_path('images/gallery');
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0755, true);
            }
            $file->move($targetDir, $filename);
            $data['gambar'] = $filename;
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Galeri berhasil diupdate!');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->gambar && file_exists(public_path('images/gallery/' . $gallery->gambar))) {
            unlink(public_path('images/gallery/' . $gallery->gambar));
        }

        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Galeri berhasil dihapus!');
    }
}