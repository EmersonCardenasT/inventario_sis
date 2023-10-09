@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">REGISTRO DE <strong>PRODUCTOS</strong></h1>
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
                        <th scope="col">Precio Compra</th>
                        <th scope="col">Precio Venta</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr class="">
                            <td scope="row">{{ $producto->id }}</td>
                            <td>{{ $producto->Nombre }}</td>
                            <td>{{ $producto->PrecioCompra }}</td>
                            <td>{{ $producto->PrecioVenta }}</td>
                            <td>{{ $producto->idcategoria }}</td>
                            <td>{{ $producto->idproveedor }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit{{$producto->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$producto->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('producto.info')
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @include('producto.create')
@endsection
