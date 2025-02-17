<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    /* Relacion de uno a muchos */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
