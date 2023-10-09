<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;
use App\Models\Producto;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $inventarios = Inventario::all();
        $productos = Producto::all();
        return view('inventario.index', compact('inventarios', 'productos'));
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
        $inventario = new Inventario();
        $inventario->idproducto = $request->input('idproducto');
        $inventario->Cantidad = $request->input('cantidad');
        $inventario->save();

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
        $inventario = Inventario::find($id);
        $inventario->idproducto = $request->input('idproducto');
        $inventario->Cantidad = $request->input('cantidad');
        $inventario->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inventario = Inventario::find($id);
        $inventario->delete();

        return redirect()->back();
    }
}
