<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        // Menggunakan paginate agar jika data banyak tidak berat
        $services = Service::orderBy('urutan', 'asc')->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required|max:255|unique:services,nama',
            'deskripsi' => 'required',
            'icon'      => 'nullable|max:50',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'urutan'    => 'nullable|integer',
        ]);

        try {
            $data = $request->all();
            
            // Otomatis buat slug dari nama
            $data['slug'] = Str::slug($request->nama);

            // Upload Gambar
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $filename = time() . '_' . Str::slug($request->nama) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/services'), $filename);
                $data['gambar'] = $filename;
            }

            Service::create($data);

            return redirect()->route('admin.services.index')
                ->with('success', 'Layanan berhasil ditambahkan!');

        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'nama'      => 'required|max:255|unique:services,nama,' . $service->id,
            'deskripsi' => 'required',
            'icon'      => 'nullable|max:50',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'urutan'    => 'nullable|integer',
        ]);

        try {
            $data = $request->all();
            $data['slug'] = Str::slug($request->nama);

            if ($request->hasFile('gambar')) {
                // Hapus gambar lama jika ada
                $oldPath = public_path('images/services/' . $service->gambar);
                if ($service->gambar && File::exists($oldPath)) {
                    File::delete($oldPath);
                }

                // Upload gambar baru
                $file = $request->file('gambar');
                $filename = time() . '_' . Str::slug($request->nama) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/services'), $filename);
                $data['gambar'] = $filename;
            }

            $service->update($data);

            return redirect()->route('admin.services.index')
                ->with('success', 'Layanan berhasil diupdate!');

        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal mengupdate data! ' . $e->getMessage());
        }
    }

    public function destroy(Service $service)
    {
        try {
            // Hapus file fisik gambar
            $path = public_path('images/services/' . $service->gambar);
            if ($service->gambar && File::exists($path)) {
                File::delete($path);
            }

            $service->delete();

            return redirect()->route('admin.services.index')
                ->with('success', 'Layanan berhasil dihapus!');
                
        } catch (\Exception $e) {
            return redirect()->route('admin.services.index')
                ->with('error', 'Gagal menghapus data!');
        }
    }
}