@extends('layout.dasar')
 @section('konten')
     <!-- START FORM -->
     <form action="{{ route('gudang.update', $gudang->id) }}" method="POST">
        @csrf
        @method("PUT")
        
        <div class="mb-3 row">
            <label for="nama_gudang" class="col-sm-2 col-form-label">Nama_Gudang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_gudang" id="nama_gudang" value="{{ $gudang->nama_gudang }}">
            </div>
        <div class="mb-3 row">
            <label for="stok_barang" class="col-sm-2 col-form-label">Stok_barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="stok_barang" id="stok_barang" value="{{ $gudang->stok_barang }}">
            </div>
        </div>
        <!-- tombol submit -->
            <div class="mb-3 row">
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Simpan</button></div>
            </div>
           
        </div>
         <!-- Button/ tombol kembali -->
         <li class="pb-3">
            <a class="btn btn-primary" href="{{ route('gudang.index') }}">Kembali</a>
          </li>
     </form>
    
    <!-- AKHIR FORM -->
 @endsection
 