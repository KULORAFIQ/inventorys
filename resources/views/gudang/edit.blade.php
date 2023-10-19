@extends('layout.dasar')
 @section('konten')
     <!-- START FORM -->
     <form action="{{ route('gudang.update', $gudang->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3 row">
            <label for="id_gudang" class="col-sm-2 col-form-label">Id_gudang</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="id_gudang" id="id_gudang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_gudang" class="col-sm-2 col-form-label">Nama_Gudang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_gudang" id="nama_gudang">
            </div>
        <div class="mb-3 row">
            <label for="stok_barang" class="col-sm-2 col-form-label">Stok_barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="stok_barang" id="stok_barang">
            </div>
        </div>
            <div class="mb-3 row">
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Simpan</button></div>
            </div>
        </div>
     </form>
    <!-- AKHIR FORM -->
 @endsection
 