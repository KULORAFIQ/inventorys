@extends('layout.dasar')

@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h2>Tambah Stok Barang</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('barang.tambah-stok', $barang->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Stok yang Akan Ditambahkan:</label>
                <input type="number" class="form-control" name="jumlah" id="jumlah" min="1" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Stok</button>
        </form>
    </div>
@endsection
