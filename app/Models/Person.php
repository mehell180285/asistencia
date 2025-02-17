<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla
    protected $table = 'persons';

    protected $fillable = ['typedoc', 'numdoc', 'last_name0', 'last_name1', 'first_name', 'birthday', 'sex', 'civil', 'mail_person', 'mail_work', 'phone', 'cellular', 'address'];

    /* Relacion de uno a muchos */
    public function users()
    {
        return $this->hasMany(User::class);
    }

}


