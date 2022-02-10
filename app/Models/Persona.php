<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    public $fillable = [
        "id",
        "nombres",
        "documento",
        "sexo",
        "recepcion_muestra_fecha",
        "qr",
        "edad",
        "origen",
        "status",
        "created_at",
        "updated_at"
    ];
}
