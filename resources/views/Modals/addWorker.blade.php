<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Agregar Trabajador</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form" id="quickForm">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Completo">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Zona</label>
                    <select class="form-control select2" id="zona"  placeholder="Zona" style="width: 100%;">
                      @foreach ($zona as $z)
                        <option value="{{$z->id}}">{{$z->name}}</option>
                      @endforeach
                      
                  </select>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="puesto">Puesto</label>
                        <select class="form-control select2" id="puesto"  placeholder="Puesto" style="width: 100%;">
                            <option value="1">Op. Revolvedora</option>
                            <option value="2">Dosificador</option>
                            <option value="3">Laboratorio</option>
                            <option value="4">Ayte General</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nomina">Numero de Nomina</label>
                        <input type="text" name="nomina" class="form-control" id="nomina" placeholder="nomina">
                    </div>
                  </div>
                </div>    
              
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="insti">institucion</label>
                            <select class="form-control select2" id="insti" style="width: 100%;">
                                <option value="1">Hospital Regional</option>
                                <option value="2">privado</option>
                                
                            </select>
                        </div>
                    </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label for="medico">medico</label>
                        <select class="form-control select2" id="medico" style="width: 100%;">
                            <option value="1">Medico 1</option>
                            <option value="2">Medico 2</option>
                            <option value="3">Medico 3</option>
                            
                        </select>
                    </div>
                  </div>
                  
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-right">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" id="save" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
@section('subscripts')   
    <script>
    $(document).ready(function(){
        $('.select2').select2({
            theme: 'bootstrap4'
        });
        $('#save').click(function(){
            var nombre = $('#name').val();
                puesto = $('#puesto').val();
                nomina = $('#nomina').val();
                inst =   $('#insti').val();
                medi =   $('#medico').val();
                zona =   $('#zona').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({        
                url:"{{route('saveWorker')}}",
                type: "POST",
                data: {
                    nombre: nombre,
                    puesto: puesto,
                    nomina: nomina,
                    inst:   inst,
                    medi:   medi,
                    zona:   zona,
                },
                success: function (resp){
                  location.reload();
                }
            })
        })
    });    
    </script>
@endsection