@extends('layout.dasar')
@section('konten')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href="{{ route('gudang.create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>

                <!-- TOMBOL kembali ke halaman awal -->
                <div class="pb-3">
                    <a href="/petugasdash" class="btn btn-primary">Kembali ke halaman petugas</a>
                  </div>
          
                <table id="table_gudang" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-4">id_gudang</th>
                            <th class="col-md-3">Nama_Gudang</th>
                            <th class="col-md-3">Stok_barang</th>
                            <th class="col-md-3">Tangal data gudang</th>
                            
                            <th class="col-md-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gudang as $no => $hasil)
                        <tr>
                            <th>{{ $no+1 }}</th>
                            <td>{{ $hasil->id }}</td>
                            <td>{{ $hasil->nama_gudang }}</td>
                            <td>{{ $hasil->stok_barang }}</td>
                            <td>{{ $hasil->created_at }}</td>
                           
                            <td>
                                <form action="{{ route('gudang.destroy', $hasil->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('gudang.edit', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Menghapus Data Ini Akan Mempengaruhi Data Lain, Anda Yakin?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
          <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
          <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
          <script>
            $(document).ready(function() {
              $('#table_gudang').DataTable({
                
              });
            });
          </script>
          <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!--allert menambah data-->


          <script>
            @if (session()->has('successs'))
            Swal.fire({
                icon: 'success',
                title: 'berhasil',
                text: '{{ session()->get('successs') }}'
            });
            @endif
          </script>

         <!--allert Mengubah atau edit-->

         <script>
            @if (session()->has('Berhasildiedit'))
            Swal.fire({
                icon: 'success',
                title: 'Gudang berhasil di edit',
                text: '{{ session()->get('Berhasildiedit') }}'
            });
            @endif
          </script>
<!--allert menghapus-->
<script>
    @if (session()->has('Yakinmenghapusdata'))
    Swal.fire({
        icon: 'warning',
        title: 'Gudang berhasil di hapus',
        text: '{{ session()->get('Yakinmenghapusdata') }}'
    });
    @endif
  </script>

@endsection
