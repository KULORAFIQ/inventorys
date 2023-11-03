<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        $gudang = Gudang::all();
    return view('gudang.index', compact('gudang','barang'));
    }

        public function indexg1()
    {
        $barang = Barang::all();
        $gudang = Gudang::all();
    return view('gudang.indexg1', compact('gudang','barang'));
    }

        public function indexg2()
    {
        $barang = Barang::all();
        $gudang = Gudang::all();
    return view('gudang.indexg2', compact('gudang','barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gudang.create');
        return redirect('gudang')->with('berhasilnambahdata', 'berhasil di tambah!!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_gudang' => 'required',
            'stok_barang' => 'required|integer|min:0',
        ], [
            'nama_gudang.required' => 'Nama Gudang wajib diisi.',
            'stok_barang.required' => 'Stok Barang wajib diisi.',
            'stok_barang.integer' => 'Stok Barang harus berupa angka.',
            'stok_barang.min' => 'Stok Barang minimal adalah 0.',
        ]);
    
        // Simpan data gudang ke tabel 'gudang'
        $gudang = new Gudang;
        $gudang->nama_gudang = $request->nama_gudang;
        $gudang->stok_barang = $request->stok_barang;
        $gudang->save();
    
        // Cek apakah stok gudang hampir penuh
        $kapasitasMaksimum = 1000; // Ganti dengan kapasitas maksimum gudang Anda
        $persentaseStok = ($gudang->stok_barang / $kapasitasMaksimum) * 100;
    
        if ($persentaseStok > 90) {
            // Jika stok gudang hampir penuh, tampilkan alert
            return redirect()->route('gudang.index')->with('alert', 'Stok gudang hampir penuh!');
        }
    
        return redirect()->route('gudang.index')->with('successs', 'Gudang berhasil ditambahkan.');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gudang = Gudang::find($id);
        $barangs = $gudang->barangs;
        
    }

    /** 
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('gudang.edit')->with([
            'gudang' => Gudang::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'nama_gudang' => 'required',
            'stok_barang' => 'required',
        ]);
    
        $gudang = Gudang::find($id);
        $gudang->nama_gudang = $request->nama_gudang;
        $gudang->stok_barang = $request->stok_barang;
        $gudang->save();
    
        return redirect()->route('gudang.index')->with('Berhasildiedit', 'Data Berhasil Di Edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gudang = Gudang::find($id);
        $gudang->delete();

        return back()->with('Yakinmenghapusdata', 'Data Berhasil Dihaspus');
    }
   
    
}

