<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $proveedores = Proveedor::all();
        return view('proveedor.index', compact('proveedores'));
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
        //
        $proveedores =  new Proveedor;
        $proveedores->Nombre = $request->input('nombre');
        $proveedores->Direccion = $request->input('direccion');
        $proveedores->Telefono = $request->input('telefono');
        $proveedores->CorreoElectronico = $request->input('correo');
        $proveedores->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $proveedores =  Proveedor::find($id);
        $proveedores->Nombre = $request->input('nombre');
        $proveedores->Direccion = $request->input('direccion');
        $proveedores->Telefono = $request->input('telefono');
        $proveedores->CorreoElectronico = $request->input('correo');
        $proveedores->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $proveedores =  Proveedor::find($id);
        $proveedores->delete();
        return redirect()->back();
    }
}
