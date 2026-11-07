<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    public function edit()
    {
        $company = CompanyInfo::first();
        if (!$company) {
            $company = CompanyInfo::create([
                'nama_perusahaan' => 'DaVinci Reklame',
                'tentang' => 'Tentang perusahaan...',
                'alamat' => 'Alamat lengkap...',
                'telepon' => '0812-xxxx-xxxx',
                'email' => 'info@davincireklame.com'
            ]);
        }
        return view('admin.company-info.edit', compact('company'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required|max:255',
            'tentang' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required|email',
            'logo' => 'nullable|image|max:2048',
        ]);

        $company = CompanyInfo::first();
        $data = $request->all();

        if ($request->hasFile('logo')) {
            if ($company->logo && file_exists(public_path('images/' . $company->logo))) {
                unlink(public_path('images/' . $company->logo));
            }

            $file = $request->file('logo');
            $filename = 'logo_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $data['logo'] = $filename;
        }

        $company->update($data);

        return redirect()->route('admin.company-info.edit')->with('success', 'Informasi perusahaan berhasil diupdate!');
    }
}