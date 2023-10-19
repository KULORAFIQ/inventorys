@extends('layout.dasar')
@section('konten')
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href="{{ route('gudang.create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>

                <!-- TOMBOL kembali ke halaman awal -->
                <div class="pb-3">
                    <a href="/suppliyerdash" class="btn btn-primary">Kembali</a>
                  </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-4">id_gudang</th>
                            <th class="col-md-3">Nama_Gudang</th>
                            <th class="col-md-3">Stok_barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gudang as $no => $hasil)
                        <tr>
                            <th>{{ $no+1 }}</th>
                            <td>{{ $hasil->id_gudang }}</td>
                            <td>{{ $hasil->nama_gudang }}</td>
                            <td>{{ $hasil->stok_barang }}</td>
                            <td>
                                <form action="{{ route('gudang.destroy', $hasil->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('gudang.edit', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Menghapus Data Ini Akan Mempengaruhi Data Lain, Anda Yakin?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
@endsection