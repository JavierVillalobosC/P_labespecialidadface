<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computadores extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'computadores';
    protected $primaryKey = 'ID_Portatilesp';
    protected $fillable = [
        'ID_Portatilesp', 'Tag', 'Modelo', 'Inventario', 'Especificaciones', 'Carrera', 'Estado', 'user_id', 'id_estado'
    ];
}
