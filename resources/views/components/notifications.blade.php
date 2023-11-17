@if(session('alerts'))
  <div class="d-flex justify-content-end">
    <div class="alert alert-success" role="alert">
      {{session('alerts')}}
    </div>
  </div>
@endif