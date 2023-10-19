<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('barang.index')->with([
            'barang' => Barang::all(),
        ]);
        
    }
    
    public function index1()
    {
        return view('barang.index1')->with([
            'barang' => Barang::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_gudang' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'jumlah_stok' => 'required',
        ],[
            'id_gudang.required' => 'ID Gudang wajib diisi.',
        'nama_barang.required' => 'Nama Barang wajib diisi.',
        'jenis_barang.required' => 'Jenis Barang wajib diisi.',
        'jumlah_stok.required' => 'Jumlah Stok wajib diisi.',
        'jumlah_stok.numeric' => 'Jumlah Stok harus berupa angka.',
        'jumlah_stok.min' => 'Jumlah Stok minimal adalah 0.',
        ]);
        
        $barang = new Barang;
        $barang->id_gudang = $request->id_gudang;
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis_barang = $request->jenis_barang;
        $barang->jumlah_stok = $request->jumlah_stok;
        $barang->save();
        
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::find($id);
    return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_gudang' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'jumlah_stok' => 'required',
        ]);
        
        $barang =  $barang = Barang ::find($id);;
        $barang->id_gudang = $request->id_gudang;
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis_barang = $request->jenis_barang;
        $barang->jumlah_stok = $request->jumlah_stok;
        $barang->save();
        
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return back()->with('success', 'Data Berhasil Dihaspus');

    
    }
    public function tambah()
    {
        return view('barang.tambah');
    }

    public function tambahStok(Request $request, Barang $barang)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'jumlah_tambahan' => 'required|integer|min:1',
    ]);

        // Ambil jumlah tambahan stok dari request
        $jumlahTambahan = $request->input('jumlah_tambahan');

        // Perbarui stok barang dengan menambahkannya
        $barang->jumlah_stok += $jumlahTambahan;
        $barang->save();

        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect()->route('barang.index')->with('success', 'Stok berhasil ditambahkan.');
    }

    public function kurangiStok(Request $request, Barang $barang)
{
    // Validasi input
    $request->validate([
        'jumlah_pengurangan' => 'required|integer|min:1|max:' . $barang->jumlah_stok,
    ]);

    // Mengambil nilai jumlah yang akan dikurangi dari formulir
    $jumlah = $request->input('jumlah_pengurangan');

    // Mengurangi stok
    $barang->jumlah_stok -= $jumlah;
    $barang->save();

    // Redirect ke halaman daftar barang dengan pesan sukses
    return redirect()->route('barang.index')->with('success', 'Stok barang berhasil dikurangi.');
}
public function barang()
{
    return $this->hasMany(Barang::class, 'id_gudang', 'id_gudang');
}

public function indexAdmin()
{
    $barang = Barang::all(); // Gantilah 'Barang' dengan model yang sesuai
    return view('admin.index', compact('barang'));
}

}