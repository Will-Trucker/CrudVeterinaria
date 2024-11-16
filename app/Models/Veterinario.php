<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    protected $table = 'veterinarios';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nombre',
        'telefono'
    ];

    public $timestamps = false;
}
