<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class model_desa extends Model
{
    protected $table = 'desa';  // Menyebutkan nama tabel jika tidak sesuai dengan konvensi
    protected $primaryKey = 'id';  // Jika menggunakan id secara default, tidak perlu ditentukan
    protected $fillable = [
        'nama_desa', 
        'kode_desa', 
        'kecamatan', 
        'kabupaten', 
        'provinsi', 
        'visi', 
        'misi', 
        'sejarah'
    ];  // Menambahkan kolom yang dapat diisi massal
    protected $hidden = ['created_at', 'updated_at'];  // Menyembunyikan kolom waktu
}
