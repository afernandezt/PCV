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
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Lista de Enfermos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="enfermos" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td>X</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
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
            $("#enfermos").DataTable({
            "responsive": true,
            "autoWidth": false,
            });
        });
    </script>
@endsection
