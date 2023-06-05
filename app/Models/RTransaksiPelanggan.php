<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rTransaksiPelanggan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function jenistransaksi()
    {
        return $this->belongsTo(JenisTransaksi::class);
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }

    public function jasa()
    {
        return $this->belongsTo(Jasa::class);
    }
}
