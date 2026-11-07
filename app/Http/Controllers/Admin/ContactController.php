<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Exception;

class ContactController extends Controller
{
    /**
     * Menampilkan daftar pesan masuk.
     */
    public function index()
    {
        // Menggunakan paginate agar ringan saat data sudah banyak (10 data per halaman)
        $contacts = Contact::latest()->paginate(10);
        
        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Menampilkan detail pesan.
     */
    public function show(Contact $contact)
    {
        // Update status dibaca hanya jika sebelumnya masih false/0
        if (!$contact->dibaca) {
            $contact->update(['dibaca' => true]);
        }
        
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Fitur tambahan: Mengubah status menjadi belum dibaca kembali.
     */
    public function markAsUnread(Contact $contact)
    {
        $contact->update(['dibaca' => false]);
        
        return redirect()->back()->with('success', 'Status pesan diubah menjadi belum dibaca.');
    }

    /**
     * Menghapus pesan dari database.
     */
    public function destroy(Contact $contact)
    {
        try {
            $contact->delete();
            return redirect()->route('admin.contacts.index')
                             ->with('success', 'Pesan berhasil dihapus!');
        } catch (Exception $e) {
            return redirect()->back()
                             ->with('error', 'Gagal menghapus pesan: ' . $e->getMessage());
        }
    }
}