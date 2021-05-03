<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Books;

class Genre extends Model
{
    public function books(){
        return $this->hasMany(Books::class);
    }
}
