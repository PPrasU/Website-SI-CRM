<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenukaranPoin extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function poin(){
        return $this->BelongsTo('App\Models\Poin');
    }
}
