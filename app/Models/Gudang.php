<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'gudang';

    protected $fillable = ['nama_gudang', 'stok_barang'];
    
    // Metode aksesornya
    public function getStokGudangAttribute()
    {
        return $this->stok_barang + $this->jumlah_stok;
    }

public function barangs()
{
    return $this->hasMany(Barang::class);
}


}

