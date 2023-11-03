<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\gudang;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'barang';
   
    public function gudang(){
        return $this->belongsTo(gudang::class);
    }
}
