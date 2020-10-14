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
                    <form action="{{ route('saveUser') }}" method="POST" id="addUser">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre Completo</label>
                                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Agregar el nombre del usuario">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Correo</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Agrega el correo del usuario">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="puesto">Puesto</label>
                                        <select class="form-control select2" id="puesto" name="puesto" placeholder="Puesto"
                                            style="width: 100%;">
                                            <option value="">Seleccionar Puesto</option>
                                            @foreach ($puesto as $p)
                                                <option value="{{ $p->id }}">{{ $p->puesto }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="roll">Roll de Usuario</label>
                                        <select class="form-control select2" id="roll" name="roll"
                                            style="width: 100%;">
                                            <option value="">Seleccionar roll del usuario</option>
                                            @foreach ($roll as $r)
                                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Contraseña</label>
                                        <input type="text" name="password" class="form-control" id="password" placeholder="Ingrese la contraseña">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password2">Repetir Contraseña</label>
                                        <input type="text" name="password2" class="form-control" id="password2" placeholder="Repita la contraseña">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="save" class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection