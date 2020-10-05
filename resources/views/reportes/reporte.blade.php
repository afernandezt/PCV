@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trabajadores</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active">Trabajadores</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Busqueda</span>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Nombre, Nomina">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')

@endsection
