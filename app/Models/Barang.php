<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table ='barang';
    public $timestamps = false;
    protected $primaryKey = 'id_barang';
    protected $fillabel = ['kode_barang','nama_barang','kategori','harga','qty'];
    protected $guarded = ['id_barang'];
}
