@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">REGISTRO DE <strong>INVENTARIO</strong></h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
            Agregar
        </button>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-bordered shadow-lg mt-4 mb-3">
                <thead class="bg-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventarios as $inventario)
                        <tr class="">
                            <td scope="row">{{ $inventario->id }}</td>
                            <td>{{ $inventario->idproducto }}</td>
                            <td>{{ $inventario->Cantidad }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit{{$inventario->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$inventario->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('inventario.info')
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @include('inventario.create')
@endsection
