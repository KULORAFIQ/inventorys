@extends('layout.dasar')
@section('konten')
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                    placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href="{{ route('barang.create') }}" class="btn btn-primary">+ Tambah Data</a>
        </div>

        <!-- TOMBOL kembali ke halaman awal -->
        <div class="pb-3">
            <a href="{{ route('admin.index') }}" class="btn btn-primary">Kembali ke Halaman Admin</a>
          </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-4">id_gudang</th>
                    <th class="col-md-3">Nama_barang</th>
                    <th class="col-md-3">jenis_barang</th>
                    <th class="col-md-3">jumlah_stok</th>
                    <th class="col-md-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $no => $hasil)
                <tr>
                    <th>{{ $no + 1 }}</th>
                    <td>{{ $hasil->id_gudang }}</td>
                    <td>{{ $hasil->nama_barang }}</td>
                    <td>{{ $hasil->jenis_barang }}</td>
                    <td>{{ $hasil->jumlah_stok }}</td>
                    <td>
                       
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- AKHIR DATA -->
</div>
@endsection
