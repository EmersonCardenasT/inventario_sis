<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = 'inventario';
    protected $primarykey = 'id';
    protected $fillable = ['idproducto', 'Cantidad'];
    public $timestamps = false;
}
