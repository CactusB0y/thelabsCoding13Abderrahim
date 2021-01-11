<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePrime extends Model
{
    use HasFactory;
    public function iconprimes()
    {
        return $this->belongsTo(IconePrime::class,'icone_id');
    }
}
