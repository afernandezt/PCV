@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('scripts/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('scripts/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Enfermos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Enfermos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="tab-veracruz" data-toggle="pill" href="#cont-veracruz" role="tab" aria-controls="cont-veracruz" aria-selected="true">Veracruz</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-xalapa" data-toggle="pill" href="#cont-xalapa" role="tab" aria-controls="cont-xalapa" aria-selected="false">Xalapa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-cordoba" data-toggle="pill" href="#cont-cordoba" role="tab" aria-controls="cont-cordoba" aria-selected="false">Cordoba</a>
                </li>
              </ul>
              <div class="tab-custom-content">
                <p class="lead mb-0">Personal vulnerable por planta</p>
              </div>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="cont-veracruz" role="tabpanel" aria-labelledby="tab-veracruz">
                   @include('medics.veracruz')
                </div>
                <div class="tab-pane fade" id="cont-xalapa" role="tabpanel" aria-labelledby="tab-xalapa">
                  @include('medics.xalapa')
                </div>
                <div class="tab-pane fade" id="cont-cordoba" role="tabpanel" aria-labelledby="tab-cordoba">
                  @include('medics.cordoba')
                </div>
              </div>
              <button type="button" class="float-right btn btn-primary" data-toggle="modal" data-target="#modal-default">Agregar</button>
              <!-- /.card -->
            </div>
          </div>
        </div>
    </section>

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
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <label for="puesto">Puesto</label>
                      <input type="text" name="puesto" class="form-control" id="puesto" placeholder="puesto">
                    </div>
                    <div class="col-sm-6">
                      <label for="nomina">Numero de Nomina</label>
                      <input type="text" name="nomina" class="form-control" id="nomina" placeholder="nomina">
                    </div>
                  </div>                  
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <label for="medico">medico</label>
                      <input type="text" name="medico" class="form-control" id="medico" placeholder="medico">
                    </div>
                    <div class="col-sm-6">
                      <label for="institucion">institucion</label>
                      <input type="text" name="institucion" class="form-control" id="institucion" placeholder="institucion">
                    </div>
                  </div>                  
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-right">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
@endsection

@section('scripts')
    <!-- DataTables -->
    <script src="{{asset('scripts/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('scripts/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('scripts/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('scripts/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('scripts/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('scripts/jquery-validation/additional-methods.min.js')}}"></script>
    <script>
        $(function () {
            $("#enf-ver").DataTable({
            "responsive": true,
            "autoWidth": false,
            });
            $("#enf-xal").DataTable({
            "responsive": true,
            "autoWidth": false,
            });
            $("#enf-cor").DataTable({
            "responsive": true,
            "autoWidth": false,
            });
            $.validator.setDefaults({
              submitHandler: function () {
                alert( "Form successful submitted!" );
              }
            });
            $('#quickForm').validate({
              rules: {
                name: {
                  required: true,
                },
                password: {
                  required: true,
                  minlength: 5
                },
                terms: {
                  required: true
                },
              },
              messages: {
                email: {
                  required: "Please enter a email address",
                  email: "Please enter a vaild email address"
                },
                password: {
                  required: "Please provide a password",
                  minlength: "Your password must be at least 5 characters long"
                },
                terms: "Please accept our terms"
              },
              errorElement: 'span',
              errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
              },
              highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
              },
              unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
              }
            });
        });
    </script>
@endsection
