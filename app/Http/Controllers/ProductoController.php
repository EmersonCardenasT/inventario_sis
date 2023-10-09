<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $productos = Producto::all();
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        return view('producto.index', compact('productos', 'categorias', 'proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $productos->Nombre = $request->input('nombre');
        $productos->PrecioCompra = $request->input('preciocompra');
        $productos->PrecioVenta = $request->input('precioventa');
        $productos->idcategoria = $request->input('idcategoria');
        $productos->idproveedor = $request->input('idproveedor');
        $productos->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Contrato $contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productos = Producto::find($id);
        $productos->Nombre = $request->input('nombre');
        $productos->PrecioCompra = $request->input('preciocompra');
        $productos->PrecioVenta = $request->input('precioventa');
        $productos->idcategoria = $request->input('idcategoria');
        $productos->idproveedor = $request->input('idproveedor');
        $productos->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productos = Producto::find($id);
        $productos->delete();

        return redirect()->back();
    }
}
