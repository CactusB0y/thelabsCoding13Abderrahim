<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
