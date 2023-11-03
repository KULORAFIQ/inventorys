@extends('layout.dasar')
@section('konten')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href="{{ route('barang.create') }}" class="btn btn-primary">+ Tambah Data</a>
        </div>

                <!-- TOMBOL kembali ke halaman awal -->
                <div class="pb-3">
                    <a href="/petugasdash" class="btn btn-primary">Kembali Ke halaman petugas</a>
                  </div>

        <table id="table_barang" class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-4">id_gudang</th>
                    <th class="col-md-4">id_barang</th>
                    <th class="col-md-3">Nama_barang</th>
                    <th class="col-md-3">jenis_barang</th>
                    <th class="col-md-3">jumlah_stok</th>
                    <th class="col-md-3">Tanggal data barang</th>
                    <th class="col-md-3">button</th>
                    <th class="col-md-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $no => $hasil)
                <tr>
                    <th>{{ $no + 1 }}</th>
                    <th>{{ $hasil->id_gudang}}</th>
                    <td>{{ $hasil->id }}</td>
                    <td>{{ $hasil->nama_barang }}</td>
                    <td>{{ $hasil->jenis_barang }}</td>
                    <td>{{ $hasil->jumlah_stok }}</td>
                    <td>{{ $hasil->created_at }}</td>
                    <td>
                        <form class="text-center" action="{{ route('barang.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('barang.edit', $hasil->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm text-center"
                                onclick="return confirm('Menghapus Data Ini Akan Mempengaruhi Data Lain, Anda Yakin?')">Delete</button>
                        </form> 
                    </td>
                    <td>
                        @foreach ($gudang as $item)
                            @if ($item->id === $hasil->id_gudang)
                                @php
                                    $stokGudang = $item->stok_barang;
                                @endphp
                                @if ($hasil->jumlah_stok <= $stokGudang-1)
                                    <form action="{{ route('barang.tambah-stok', $hasil->id) }}" method="POST">
                                        @csrf
                                        <!-- Isi formulir, misalnya jumlah tambahan stok -->
                                        <input type="number" name="jumlah_tambahan" id="jumlah_stok" required>
                                        <button type="submit">Tambah Stok</button>
                                    </form>
                                @endif
                            @endif
                        @endforeach
                        

                        <form action="{{ route('barang.kurangi-stok', $hasil->id) }}" method="POST">
                            @csrf
                            <input type="number" name="jumlah_pengurangan" required>
                            <button type="submit">Kurangi Stok</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            @foreach($barang as $hasil)
                @if ($hasil->jumlah_stok <= 50)
                <div class="alert alert-warning" role="alert">
                    Barang Kurang dari 50
                  </div>
                @endif
            @endforeach
        </table>

    </div>
    <!-- AKHIR DATA -->
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    @if (session()->has('success'))
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: '{{ session()->get('success') }}'
    });
    @endif

    @if (session()->has('kurang'))
    Swal.fire({
        icon: 'warning',
        title: 'Barang Awal Kurang',
        text: '{{ session()->get('success') }}'
    });
    @endif

    @if (session()->has('error'))
    Swal.fire({
        icon: 'warning',
        title: 'Jumlah stok melebihi stok tersedia di gudang',
        text: '{{ session()->get('success') }}'
    });
    @endif

    @if (session()->has('barangberhasilditambah'))
    Swal.fire({
        icon: 'success',
        title: 'Barang berhasil Ditambahkan',
        text: '{{ session()->get('barangberhasilditambah') }}'
    });
    @endif
  </script>
  <script>
    $(document).ready(function() {
      $('#table_barang').DataTable();
    });
  </script>

{{-- <script>
    // Dapatkan elemen input jumlah_stok, stok_barang, dan tombol submit
    var inputJumlahStok = document.getElementById('jumlah_stok');
    var stokBarang = {{ $hasil->stok_barang }}; // Ganti dengan nilai stok_barang yang sesuai
    var tombolSubmit = document.querySelector("form[action*='tambah-stok'] button[type='submit']");

    // Atur nilai awal input jumlah_stok
    inputJumlahStok.value = stokBarang;
    inputJumlahStok.max = stokBarang;

    // Tambahkan event listener untuk mengubah nilai input jika diperlukan
    inputJumlahStok.addEventListener('change', function () {
        if (parseInt(inputJumlahStok.value) > stokBarang) {
            inputJumlahStok.value = stokBarang;
            // Tampilkan alert jika stok melebihi stok maksimal
            alert('Stok melebihi kapasitas maksimal gudang.');
        }
    });

    // Tambahkan event listener untuk memblokir pengiriman formulir jika stok melebihi stok maksimal
    document.querySelector("form[action*='tambah-stok']").addEventListener('submit', function (event) {
        if (parseInt(inputJumlahStok.value) > stokBarang) {
            event.preventDefault();
            alert('Stok melebihi kapasitas maksimal gudang. Pengiriman data dibatalkan.');
        }
    });
</script> --}}

@endsection
