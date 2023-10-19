<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'barang';

   
public function gudang()
{
    return $this->belongsTo(Gudang::class);
}


public function gudangs()
{
    return $this->belongsToMany(Gudang::class, 'barang_gudang', 'barang_id', 'gudang_id');
}



}
