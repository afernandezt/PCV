@extends('layouts.app')
@section('style')
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trabajador</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="/worker">Trabajadores</a></li>
                        <li class="breadcrumb-item active">{{ $trabajador->name }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">{{ $trabajador->name }}</span>
                    <a href="/workers/edit/{{ $trabajador->id }}" type="button"
                        class="float-right btn btn-primary">Editar</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Detalles de Trabajador</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <span><strong>Nombre: </strong></span><br>
                                    <span><strong>Dirección: </strong></span><br>
                                    <span><strong>Edad: </strong></span><br>
                                    <span><strong>No. Nomina: </strong></span><br>
                                    <span><strong>Zona: </strong></span><br>
                                    <span><strong>Puesto: </strong></span>
                                </div>
                                <div class="col-md-6">
                                    <span>{{ $trabajador->name }}</span><br>
                                    <span>{{ $trabajador->direccion }}</span><br>
                                    <span>{{ $trabajador->edad }}</span><br>
                                    <span>{{ $trabajador->nomina }}</span><br>
                                    <span>{{ $trabajador->getZone->name }}</span><br>
                                    <span>{{ $trabajador->getJob->puesto }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>Detalle Medico</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <span><strong>Altura: </strong></span><br>
                                    <span><strong>Peso: </strong></span><br>
                                    <span><strong>IMC: </strong></span><br>
                                    <span><strong>Obesidad: </strong></span><br>
                                    <span><strong>Insituto: </strong></span><br>
                                    <span><strong>Medico: </strong></span>
                                </div>
                                <div class="col-md-6">
                                    <span>
                                        {{$trabajador->altura}} Mtrs.
                                    </span><br>
                                    <span>
                                        {{$trabajador->peso}} Kg.
                                    </span><br>
                                    <span>
                                        {{$trabajador->details->imc}} 
                                    </span><br>
                                    <span>
                                        {{$trabajador->details->obesidad}} 
                                    </span><br>
                                    <span>
                                        @if (isset($trabajador->getInst->instis))
                                            {{ $trabajador->getInst->instis }}@endif
                                    </span><br>
                                    <span>
                                        @if (isset($trabajador->getMedic->medico))
                                            {{ $trabajador->getMedic->medico }}@endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title">Comorbidades</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-bordered">
                                    <tbody>
                                        @foreach ($trabajador->getComb as $comb)
                                            <tr>
                                                <td>{{ $comb->getName->valor }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title">Vacunas</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-bordered">
                                    <tbody>
                                        @foreach ($trabajador->getVac as $vac)
                                            <tr>
                                                <td>{{ $vac->getName->valor }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title">Alergias</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-bordered">
                                    <tbody>
                                        @foreach ($trabajador->getAlerg as $ale)
                                            <tr>
                                                <td>{{ $ale->getName->valor }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title">Documentos</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <table class="table table-bordered">
                                    <tbody>
                                        @foreach ($trabajador->getDocs as $doc)
                                            <tr>
                                                <td>
                                                    <a href="/workers/{{ $trabajador->id }}/{{ $doc->route }}">{{ $doc->name }}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')

@endsection
