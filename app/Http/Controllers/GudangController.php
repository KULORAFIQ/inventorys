<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gudang.index')->with([
            'gudang' => Gudang::all(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gudang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'id_gudang' => 'required',
        'nama_gudang' => 'required',
        'stok_barang' => 'required|integer|min:0',
    ]);

    $gudang = new Gudang;
    $gudang->id_gudang = $request->id_gudang;
    $gudang->nama_gudang = $request->nama_gudang;
    $gudang->stok_barang = $request->stok_barang;
    $gudang->save();

    return redirect()->route('gudang.index')->with('success', 'Stok berhasil ditambahkan.');
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
            'id_gudang' => 'required',
            'nama_gudang' => 'required',
            'stok_barang' => 'required',
        ]);
    
        $gudang = Gudang::find($id);
        $gudang->id_gudang = $request->id_gudang;
        $gudang->nama_gudang = $request->nama_gudang;
        $gudang->stok_barang = $request->stok_barang;
        $gudang->save();
    
        return redirect()->route('gudang.index')->with('success', 'Data Berhasil Di Edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gudang = Gudang::find($id);
        $gudang->delete();

        return back()->with('success', 'Data Berhasil Dihaspus');
    }
    public function gudang()
    {
        return $this->belongsTo(Gudang::class, 'id_gudang', 'id_gudang');
    }
}
