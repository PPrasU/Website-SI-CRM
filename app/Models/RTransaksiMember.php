<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RTransaksiMember extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function member(){
        return $this->belongsTo(Member::class);
    }
    public function jenistransaksi(){
        return $this->belongsTo(JenisTransaksi::class);
    }
    public function karyawan(){
        return $this->belongsTo(Karyawan::class);
    }
    public function jasa(){
        return $this->belongsTo(Jasa::class);
    }
    public function penukaran(){
        return $this->belongsTo(PenukaranPoin::class);
    }
}
