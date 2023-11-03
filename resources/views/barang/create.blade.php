@extends('layout.dasar')
 @section('konten')
 <!-- START FORM -->
<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_gudang" class="col-sm-2 col-form-label">Id_Gudang</label>
            <div class="input-group input-group-outline my-1">
                <select type="number" class="form-select" name="id_gudang" id="id_gudang">
                    @foreach($gudang as $key => $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Validasi ID Gudang -->
        @error('id_gudang')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3 row">
            <label for="nama_barang" class="col-sm-2 col-form-label">Nama_Barang</label>
            <div class="input-group input-group-outline my-1">
                <input type="text" class="form-control" name="nama_barang" id="nama_barang">
            </div>

            <!-- Validasi Nama Barang -->
            @error('nama_barang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis_Barang</label>
            <div class="input-group input-group-outline my-1">
                <select class="form-select" name="jenis_barang" id="jenis_barang">
                    <option value=""></option>
                    <option value="kilogram">Kilogram</option>
                    <option value="gram">Gram</option>
                    <option value="liter">Liter</option>
                    <option value="pack">pack</option>
                    <option value="dus">dus</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="jumlah_stok" class="col-sm-2 col-form-label">Jumlah_Stok</label>
            <div class="input-group input-group-outline my-1">
                <input type="number" class="form-control" name="jumlah_stok" id="jumlah_stok">
            </div>
        </div>
        

            <!-- Validasi Jumlah Stok -->
            @error('jumlah_stok')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>

<!-- Button/ tombol kembali -->
    <li class="pb-3">
        <a class="btn btn-primary" href="{{ route('barang.index') }}">Kembali</a>
      </li>
</form>
<!-- AKHIR FORM -->

 @endsection
  