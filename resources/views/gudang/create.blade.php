@extends('layout.dasar')
 @section('konten')
     <!-- START FORM -->
<form action="{{ route('gudang.store') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        
        <div class="mb-3 row">
            <label for="nama_gudang" class="col-sm-2 col-form-label">Nama Gudang</label>
            <div class="input-group input-group-outline my-1">
                <input type="text" class="form-control" name="nama_gudang" id="nama_gudang">
            </div>

            <!-- Validasi Nama Gudang -->
            @error('nama_gudang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 row">
            <label for="stok_barang" class="col-sm-2 col-form-label">Stok Barang</label>
            <div class="input-group input-group-outline my-1">
                <input type="number" class="form-control" name="stok_barang" id="stok_barang">
            </div>

            <!-- Validasi Stok Barang -->
            @error('stok_barang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Tombol submit -->
        <div class="mb-3 row">
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
    <!-- Button/ tombol kembali -->
    <li class="pb-3">
        <a class="btn btn-primary" href="{{ route('gudang.index') }}">Kembali</a>
      </li>
</form>
<!-- AKHIR FORM -->
 @endsection
  