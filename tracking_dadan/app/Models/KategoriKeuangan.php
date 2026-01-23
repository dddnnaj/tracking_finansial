<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriKeuangan extends Model
{
    protected $table = 'kategori_keuangan';

    protected $fillable = [
        'nama',
        'tipe',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'kategori_id');
    }
}
