<!-- Modal  EDITAR-->
<div class="modal fade" id="edit{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR CATEGORIA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('categorias.update', $categoria->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id=""
                            aria-describedby="helpId" placeholder="" value="{{$categoria->Nombre}}">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id=""
                            aria-describedby="helpId" placeholder="" value="{{$categoria->Descripcion}}">
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
<div class="modal fade" id="delete{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR AUTOR</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="post">
                @csrf
                @method('DELETE')

                Estas seguro de eliminar a <strong>{{$categoria->Nombre}}</strong>?

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
