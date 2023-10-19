@extends('layout.dasar')
 @section('konten')
     <!-- START FORM -->
 <form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_gudang" class="col-sm-2 col-form-label">Id_Gudang</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="id_gudang" id="id_gudang">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_barang" class="col-sm-2 col-form-label">Nama_Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_barang" id="nama_barang">
            </div>
            <div class="mb-3 row">
                <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis_Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis_barang" id="jenis_barang">
                </div>
        <div class="mb-3 row">
            <label for="jumlah_stok" class="col-sm-2 col-form-label">jumlah_stok</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jumlah_stok" id="jumlah_stok">
            </div>
        </div>
       
        <div class="mb-3 row">
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
 @endsection
  