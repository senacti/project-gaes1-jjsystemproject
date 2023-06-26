<div class="modal fade bd-example-modal-xl" id="delete{{$cita->idCita}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Eliminar cita</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="modalCitas" action="{{url('Citas/'.$cita->idCita)}}" 
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <p>
                        Esta seguro que desea eliminar la cita
                        <strong>{{$cita->descripcionCita}}</strong>
                    </p>
                    <div class="modal-footer">
                        <button type="button" class=" btn btn-info " data-dismiss="modal" aria-label="Close">
                            Cancelar
                        </button>
                        <button class="btn btn-danger" type="submit">Eliminar Cita</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>