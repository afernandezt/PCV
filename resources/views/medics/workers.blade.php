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
              <a href="/workers/add" type="button" class="float-right btn btn-primary">Agregar</a>
              <!-- /.card -->
            </div>
          </div>
        </div>
    </section>
@endsection
@section('scripts')
    <!-- DataTables -->
    <script src="{{asset('scripts/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('scripts/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('scripts/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('scripts/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
   
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
        });
    </script>
@endsection
