<button type="button" class="btn btn-warning float-right" data-toggle="modal"
        data-target="#addArea" data-whatever="@mdo">Crear Area</button>

{!! Form::open(['url' => 'areas']) !!}
{{Form::token()}}
    <div class="modal fade" id="addArea" tabindex="-1"
         role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Area</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Titulo:</label>
                        <input name="nombre" type="text" class="form-control" id="recipient-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Agregar Area
                </button>
            </div>
        </div>
    </div>
</div>
