@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">REGISTRO DE <strong>CATEGORIAS</strong></h1>
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
                        <th scope="col">Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr class="">
                            <td scope="row">{{ $categoria->id }}</td>
                            <td>{{ $categoria->Nombre }}</td>
                            <td>{{ $categoria->Descripcion }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit{{$categoria->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$categoria->id}}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                        @include('categoria.info')
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @include('categoria.create')
@endsection
