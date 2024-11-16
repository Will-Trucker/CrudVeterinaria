<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascotas';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre',
        'dueno_id',
        'sexo_id',
        'veterinario_id',
    ];

    public function dueno()
    {
        return $this->belongsTo(Propietario::class);
    }

    public function sexo()
    {
        return $this->belongsTo(Sexo::class, 'sexo_id');
    }

    public function veterinario()
    {
        return $this->belongsTo(Veterinario::class);
    }
}
