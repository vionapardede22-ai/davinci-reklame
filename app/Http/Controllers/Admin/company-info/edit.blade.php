<form action="{{ route('admin.company-info.update') }}" 
      method="POST" 
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div>
        <label>Nama Perusahaan</label>
        <input type="text" 
               name="nama_perusahaan" 
               value="{{ $company->nama_perusahaan }}">
    </div>

    <div>
        <label>Logo</label>

        <!-- Tampilkan Logo -->
        <div style="margin-bottom:10px;">
            <img src="{{ asset('images/reklame5.png') }}" 
                 width="150"
                 alt="Logo Perusahaan">
        </div>

        <!-- Upload Logo Baru -->
        <input type="file" name="logo">
    </div>

    <button type="submit">
        Simpan
    </button>

</form>