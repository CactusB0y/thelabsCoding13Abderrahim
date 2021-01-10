<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function icons()
    {
        return $this->belongsTo(Icone::class,'icone_id');
    }
}
