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
              <div class="form-group">
                <label for="name">Nombre Completo</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Completo">
              </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="puesto">Puesto</label>
                        <select class="form-control select2 test" id="puesto"  placeholder="Puesto" style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
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
                                <option selected="selected">Alabama</option>
                                <option value="">Ayudante General</option>
                                
                            </select>
                        </div>
                    </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label for="medico">medico</label>
                        <select class="form-control select2" id="medico" style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
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
                },
                success: function (resp){
                }
            })
        })
    });    
    </script>
@endsection