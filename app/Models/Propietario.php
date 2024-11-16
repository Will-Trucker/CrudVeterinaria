<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    Use HasFactory;

    protected $table = 'duenos';

    protected $fillable = [
        'id',
        'nombre',
        'dui',
        'numero',
    ];

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function mascotas(){
        return $this->hasMany(Mascota::class);
    }
}
