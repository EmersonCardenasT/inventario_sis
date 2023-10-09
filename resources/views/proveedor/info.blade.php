<!-- Modal  EDITAR-->
<div class="modal fade" id="edit{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR PROVEEDOR</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('proveedores.update', $proveedor->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id=""
                            aria-describedby="helpId" placeholder="" required value="{{$proveedor->Nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Direccion</label>
                        <input type="text" class="form-control" name="direccion" id=""
                            aria-describedby="helpId" placeholder="" required value="{{$proveedor->Direccion}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="telefono" id=""
                            aria-describedby="helpId" placeholder="" required value="{{$proveedor->Telefono}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Correo Electronico</label>
                        <input type="text" class="form-control" name="correo" id=""
                            aria-describedby="helpId" placeholder="" required value="{{$proveedor->CorreoElectronico}}">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal BORRAR-->
<div class="modal fade" id="delete{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="post">
                @csrf
                @method('DELETE')

                Estas seguro de eliminar a <strong>{{$proveedor->Nombre}}</strong>?

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
