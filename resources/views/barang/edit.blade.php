@extends('layout.dasar')
@section('konten')
     <!-- START FORM -->
     <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3 row">
            <label for="id_gudang" class="col-sm-2 col-form-label">Id Gudang</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="id_gudang" id="id_gudang" value="{{ $barang->id_gudang }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{ $barang->nama_barang }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jenis_barang" id="jenis_barang" value="{{ $barang->jenis_barang }}">
            </div>
        </div>    
        <div class="mb-3 row">
            <label for="jumlah_stok" class="col-sm-2 col-form-label">Jumlah Stok</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="jumlah_stok" id="jumlah_stok" value="{{ $barang->jumlah_stok }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            </div>
        </div>
     </form>
    <!-- AKHIR FORM -->
@endsection
