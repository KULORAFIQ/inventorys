<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use App\Models\logMasuk;
use App\Models\logKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gudang = Gudang::all();
        $barang = Barang::all();
        return view('barang.index', compact('barang','gudang'));


        // return view('barang.index')->with([
        //     'barang' => Barang::all(),
        // ]);
        
    }
    

    public function index2()
{
    $gudang = Gudang::all();
    $barang = Barang::all();
    return view('barang.index2', compact('barang','gudang'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gudang = Gudang::pluck('id');

        $barang = Barang::find(9);
        // dd($barang);
        return view('barang.create',compact('gudang'));
        
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
        'jumlah_stok' => 'required|numeric|min:0',
    ], [
        'id_gudang.required' => 'ID Gudang wajib diisi.',
        'nama_barang.required' => 'Nama Barang wajib diisi.',
        'jenis_barang.required' => 'Jenis Barang wajib diisi.',
        'jumlah_stok.required' => 'Jumlah Stok wajib diisi.',
        'jumlah_stok.numeric' => 'Jumlah Stok harus berupa angka.',
        'jumlah_stok.min' => 'Jumlah Stok minimal adalah 0.',
    ]);


    $idGudang = $request->id_gudang;
    $jumlahStok = $request->jumlah_stok;

    // Calculate the total jumlah_stok for the specific gudang
    $totalJumlahStokForGudang = Barang::where('id_gudang', $idGudang)->sum('jumlah_stok');

    
    // Retrieve the corresponding gudang record
    $gudang = Gudang::where('id', $idGudang)->first();
    
    // Calculate the remaining available stock in the gudang
    $remainingStockInGudang = $gudang->stok_barang - $totalJumlahStokForGudang;
    
    // dd($remainingStockInGudang);
    // Check if the jumlah_stok exceeds the remaining available stock in the gudang
    if ($request->jumlah_stok > $remainingStockInGudang) {
        return redirect()->route('barang.index')->with('error', 'Jumlah Stok melebihi stok tersedia di gudang.');
    }elseif ($request->jumlah_stok < 50) {
        return redirect()->route('barang.index')->with('kurang', 'Stok kurang dari 50');
    }


    $barang = new Barang;
    $barang->id_gudang = $request->id_gudang;
    $barang->nama_barang = $request->nama_barang;
    $barang->jenis_barang = $request->jenis_barang;
    $barang->jumlah_stok = $request->jumlah_stok;
    $barang->save();

    return redirect()->route('barang.index')->with('barangberhasilditambah', 'Barang Berhasil Ditambahkan.');
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
        
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Diubah atau di edit.');
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

    public function tambahStok(Request $request, Barang $barang, logMasuk $logMasuk, Gudang $gudang)
{
    // Validasi request jika diperlukan
    $request->validate([
        'jumlah_tambahan' => 'required|integer|min:1',
    ]);

    // Ambil jumlah tambahan stok dari request
    $jumlahTambahan = $request->input('jumlah_tambahan');

    
    $gudang = Gudang::where('id', $barang->id_gudang)->first();
    

    // Check if the quantity to be added is within the available stock in the gudang
    if (($barang->jumlah_stok + $jumlahTambahan) > $gudang->stok_barang) {
        // Redirect back with an error message or handle it as needed
        return redirect()->back()->with('error', 'Jumlah stok melebihi stok tersedia di gudang.');
    }

    // Perbarui stok barang dengan menambahkannya
    $barang->jumlah_stok += $jumlahTambahan;
    $barang->save();

    // mengisi table log masuk dengan nama dari model binding yang sesuai id dan sesuai request
    $logMasuk->nama_barang = $barang->nama_barang;
    $logMasuk->jumlah_stok = "Barang Masuk " . $request->input('jumlah_tambahan');
    $logMasuk->save();

    // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
    return redirect()->route('barang.index')->with('success', 'Stok berhasil ditambahkan.');
}


    public function kurangiStok(Request $request, Barang $barang, logKeluar $logKeluar)
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

     // mengurangi table log masuk dengan nama dari model binding yang sesuai id dan sesuai request
     $logKeluar->nama_barang = $barang->nama_barang;
     $logKeluar->jumlah_stok ="Barang Keluar ". $request->input('jumlah_pengurangan');
     $logKeluar->save();


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