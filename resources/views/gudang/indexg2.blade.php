@extends('layout.dasar')
@section('konten')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
               
                
                <!-- TOMBOL kembali ke halaman awal -->
                <div class="pb-3">
                    <a href="/petugasdash" class="btn btn-primary">Kembali ke Halaman petugas</a>
                </div>
          
                <table id="table_gudang" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-4">id_gudang</th>
                            <th class="col-md-3">Nama_Gudang</th>
                            <th class="col-md-3">Stok_barang</th>
                            <th class="col-md-3">Tanggal data gudang</th>
                            <th class="col_md-3">jumlah stok barang</th>
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
                            @foreach ($barang as $no =>$hasil)
                            <td>{{$hasil->jumlah_stok}}</td>
                            @endforeach


                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
    $('#table_gudang').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'pdf'
      ]
    });
    });
</script>
@endsection