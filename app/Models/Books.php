<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Books extends Model
{
    public function genre(){
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
