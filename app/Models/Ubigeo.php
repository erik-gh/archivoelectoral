<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubigeo extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_ubigeo',
        'departamento_ubigeo',
        'provincia_ubigeo',
        'distrito_ubigeo',
        'id_odpe'
    ];
}
