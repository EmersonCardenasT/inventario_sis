<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedor';
    protected $primarykey = 'id';
    protected $fillable = ['Nombre', 'Direccion', 'Telefono', 'CorreoElectronico'];
    public $timestamps = false;
}
