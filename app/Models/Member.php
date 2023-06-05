<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pengguna(){
        return $this->BelongsTo('App\Models\Pengguna');
    }

    public function poin(){
        return $this->BelongsTo(Poin::class,'peringkatM_id', 'id');
    }

    public function peringkat(){
        return $this->BelongsTo(Poin::class, 'peringkatM_id', 'id');
    }
}
