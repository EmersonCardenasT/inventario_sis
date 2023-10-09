@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">REGISTRO DE <strong>PROVEEDORES</strong></h1>
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo Electronico</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proveedores as $proveedor)
                        <tr class="">
                            <td scope="row">{{ $proveedor->id }}</td>
                            <td>{{ $proveedor->Nombre }}</td>
                            <td>{{ $proveedor->Direccion }}</td>
                            <td>{{ $proveedor->Telefono }}</td>
                            <td>{{ $proveedor->CorreoElectronico }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit{{$proveedor->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$proveedor->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('proveedor.info')
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @include('proveedor.create')
@endsection
