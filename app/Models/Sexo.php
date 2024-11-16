<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    protected $table = 'sexo_mascotas';

    protected $fillable = [
        'id',
        'descripcion',
    ];

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function mascotas()
    {
        return $this->hasMany(Mascota::class, 'sexo_id');
    }
}
