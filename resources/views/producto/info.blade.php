<!-- Modal  EDITAR-->
<div class="modal fade" id="edit{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR PRODUCTO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('productos.update', $producto->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Nombre Producto</label>
                        <input type="text" class="form-control" name="nombre" id=""
                            aria-describedby="helpId" placeholder="" required value="{{$producto->Nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Precio Compra</label>
                        <input type="text" class="form-control" name="preciocompra" id=""
                            aria-describedby="helpId" placeholder="" required value="{{$producto->PrecioCompra}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Precio Venta</label>
                        <input type="text" class="form-control" name="precioventa" id=""
                            aria-describedby="helpId" placeholder="" required value="{{$producto->PrecioVenta}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Selecciona Categoria</label>
                        <select name="idcategoria" id="" class="form-control">
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->Nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Selecciona Proveedor</label>
                        <select name="idproveedor" id="" class="form-control">
                            @foreach ($proveedores as $proveedor)
                            <option value="{{$proveedor->id}}">{{$proveedor->Nombre}}</option>
                            @endforeach
                        </select>
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
<div class="modal fade" id="delete{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('productos.destroy', $producto->id) }}" method="post">
                @csrf
                @method('DELETE')

                Estas seguro de eliminar a <strong>{{$producto->Nombre}}</strong>?

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
