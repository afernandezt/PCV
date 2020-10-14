@extends('layouts.app')
@section('style')
<style>
    .hidden{
        display: none;
    }
</style>
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
                    <form action="{{ route('showResult') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="field1">Nombre, Nomina</label>
                                    <input type="text" name="field" id="field1" class="form-control" placeholder="Nombre, Nomina">
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cuerpo">cuerpo</label>
                                    <select name="cuerpo" id="cuerpo" class="form-control">
                                        <option value="">Seleccione un Tipo de cuerpo</option>
                                        <option value="1">Desnutricion</option>
                                        <option value="2">Normal</option>
                                        <option value="3">Obesidad Tipo 1</option>
                                        <option value="4">Obesidad Tipo 2</option>
                                        <option value="5">Obesidad Tipo 3</option>
                                        <option value="6">Obesidad Tipo 4</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="puesto">Puesto</label>
                                    <select name="puesto" id="puesto" class="form-control">
                                        <option value="">Puesto del Trabajador</option>
                                        @foreach ($puesto as $p)
                                            <option value="{{$p->id}}">{{$p->puesto}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                       <div class="row">
                           <div class="col-md-12">
                                <h2>Enfermedades</h2>
                           </div>
                       </div>
                        <div class="row">                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="comorbidad">Comorbidades</label>
                                    <select name="comorbidad" id="comorbidad" class="form-control">
                                        <option value="">Seleccione Comorbidad</option>
                                        @foreach ($comorbidad as $c)
                                            <option value="{{$c->id}}">{{$c->valor}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="vacunas">vacunas</label>
                                    <select name="vacunas" id="vacunas" class="form-control">
                                        <option value="">Seleccione Vacuna</option>
                                        @foreach ($vacuna as $v)
                                            <option value="{{$v->id}}">{{$v->valor}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="alergia">Alergias</label>
                                    <select name="alergia" id="alergia" class="form-control">
                                        <option value="">Seleccione Alergia</option>
                                        @foreach ($alergia as $a)
                                            <option value="{{$a->id}}">{{$a->valor}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="search" class="btn btn-primary">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @if(isset($trabajador))
   <section class="content">
       <div class="content-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title">Resultado</span>
                            <button type="submit" id="print" class="float-right btn btn-primary">Buscar</button>                                               
                        </div>
                        <div class="card-body">
                            <div id="accordion">
                                @foreach ($trabajador as $trab)
                                    <div class="card">
                                        <div class="card-header">
                                            <h6>
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$trab->id}}">
                                                    <i class="fas fa-plus"></i> {{$trab->name}}
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse{{$trab->id}}" class="panel-collapse collapse in">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span><strong>Nomina</strong> {{$trab->nomina}}</span>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <span><strong>Trabajador</strong> {{$trab->name}}</span>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <span><strong>Edad</strong> {{$trab->edad}}</span>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span><strong>Puesto</strong> {{$trab->getJob->puesto}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <span><strong>zona</strong> {{$trab->getZone->name}}</span>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <span><strong>Altura</strong> {{$trab->altura}}</span>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <span><strong>Peso</strong> {{$trab->peso}}</span>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <span><strong>IMC</strong> {{$trab->details->imc}}</span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <span><strong>Instituto</strong> {{$trab->details->institucion}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <span><strong>Medico</strong> {{$trab->details->medic}}</span>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span><strong>Alergias</strong> dato</span>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span><strong>Comorbidades</strong> dato</span>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <span><strong>Vacunas</strong> dato</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </section>

   <div id="report" class="hidden">
        @include('reportes.impresion')
   </div>
   @endif
@endsection
@section('scripts')
    <script>
        $('#print').click(function(){
            var div = $('#report').html();
            var newWin=window.open('','Print-Window');
            newWin.document.open();
            newWin.document.write('<html><head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"></head><body onload="window.print()">'+div+'</body></html>');
            newWin.document.close();
            setTimeout(function(){newWin.close();},10);
        })
        var f = new Date();
        var date = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
        $('#fecha').html('Fecha: '+date);

    </script>
@endsection
