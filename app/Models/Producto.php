<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primarykey = 'id';
    protected $fillable = ['Nombre', 'PrecioCompra', 'PrecioVenta', 'idcategoria', 'idproveedor'];
    public $timestamps = false;
}
