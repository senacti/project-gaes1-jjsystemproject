@extends('layout/template')

@section('title','Citas')

@section('contenido')

<main>

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">JJ.System</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4>{{$msg}}</h4>
      </div>
      <div class="modal-footer">
      <a href="{{ route('Citas.create') }}"class="btn btn-success" data-dismiss="modal">Regresar</a>
      </div>
    </div>
  </div>
</div>

    </main>
@endsection