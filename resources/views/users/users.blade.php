@extends('layouts.app')
@section('style')
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Usuarios</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item active">Usuarios</li>
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
                        Control de Usuarios
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table id="enf-ver" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Email</th>
                                        <th>Puesto</th>
                                        <th>Roll</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usr as $us)
                                        <td>{{$us->nombre}}</td>
                                        <td>{{$us->email}}</td>
                                        <td>{{$us->puesto}}</td>
                                        <td>{{$us->roll}}</td>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Email</th>
                                        <th>Puesto</th>
                                        <th>Roll</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection