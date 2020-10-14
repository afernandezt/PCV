@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('scripts/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('scripts/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('scripts/dropzone/dropzone.min.css') }}">
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
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Trabajadores</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('wupdate', $worker->id) }}" method="POST" enctype="multipart/form-data"
                        role="form" id="addworker">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nombre Completo</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ $worker->name }}" placeholder="Nombre Completo">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nomina">Numero de Nomina</label>
                                        <input type="text" name="nomina" class="form-control" id="nomina"
                                            value="{{ $worker->nomina }}" placeholder="nomina">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="puesto">Puesto</label>
                                        <select class="form-control select2" id="puesto" name="puesto" placeholder="Puesto"
                                            style="width: 100%;">
                                            <option value="">Seleccionar Puesto</option>
                                            @foreach ($puesto as $p)
                                                @if ($worker->getJob->id == $p->id)
                                                    <option value="{{ $p->id }}" selected>{{ $p->puesto }}</option>
                                                @else
                                                    <option value="{{ $p->id }}">{{ $p->puesto }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Direccion</label>
                                        <input type="text" name="direccion" class="form-control" id="direccion"
                                            value="{{ $worker->direccion }}" placeholder="Direccion">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Zona</label>
                                        <select class="form-control select2" id="zona" name="zona" placeholder="Zona"
                                            style="width: 100%;">
                                            @foreach ($zona as $z)
                                                @if ($worker->getZone->id == $z->id)
                                                    <option value="{{ $z->id }}" selected>{{ $z->name }}</option>
                                                @else
                                                    <option value="{{ $z->id }}">{{ $z->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Sexo</label>
                                        <select name="sexo" class="form-control" id="sexo">
                                            <option value="">Seleccionar Sexo</option>
                                            <option value="H">Hombre</option>
                                            <option value="M">Mujer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Edad</label>
                                        <input type="text" name="edad" class="form-control" id="edad" placeholder="Edad"
                                            value="{{ $worker->edad }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Altura</label>
                                        <input type="text" name="altura" class="form-control altura" id="altura"
                                            value="{{ $worker->altura }}" placeholder="Mts">
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="name">Peso</label>
                                        <input type="text" name="peso" class="form-control numeros" id="peso"
                                            value="{{ $worker->peso }}" placeholder="Klg">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="name">IMC</label>
                                    <div class="form-group input-group input-group">
                                        <input type="text" name="imc" class="form-control numero" id="imc" placeholder="IMC"
                                            value="{{ $worker->details->imc }}" disabled>
                                        <span class="input-group-append">
                                            <button type="button" id="calc" class="btn btn-info btn-flat">Calcular!</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div id="accordion">
                                <h6>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <i class="fas fa-plus"></i> Detalles
                                    </a>
                                </h6>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="insti">institucion</label>
                                                    <select class="form-control select2" id="insti" name="inst"
                                                        style="width: 100%;">
                                                        <option value="">Seleccione una Institución</option>
                                                        @foreach ($inst_med as $i)
                                                            @if (isset($worker->institution))
                                                                @if ($worker->getInst->id == $i->id)
                                                                    <option value="{{ $i->id }}" selected>{{ $i->instis }}
                                                                    </option>
                                                                @else
                                                                    <option value="{{ $i->id }}">{{ $i->instis }}</option>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="medico">medico</label>
                                                    <select class="form-control select2" id="medico" name="medico"
                                                        style="width: 100%;">
                                                        <option value="">Seleccione un Medico</option>
                                                        @foreach ($medico as $m)
                                                            @if (isset($worker->medic))
                                                                @if ($worker->getMedic->id == $m->id)
                                                                    <option value="{{ $m->id }}" selected>{{ $m->medico }}
                                                                    </option>
                                                                @else
                                                                    <option value="{{ $m->id }}">{{ $m->medico }}</option>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="medico">Cuerpo</label>
                                                    <select name="cuerpo" id="cuerpo" class="form-control" disabled>
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
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-grup">
                                                    <h5>Comorbilidad</h5>

                                                    <select class="select2" multiple="multiple" name="comorbidad[]"
                                                        data-placeholder="Select a State" style="width: 100%;">
                                                        @php $c = ""; @endphp
                                                        @foreach ($comorbidad as $com)
                                                                @foreach ($worker->getComb as $wComb)
                                                                    @if ($wComb->comorbidad == $com->id)
                                                                        @php $c = "selected"; @endphp
                                                                    @endif
                                                                @endforeach
                                                                <option value="{{ $com->id }}" {{$c}}>{{ $com->valor }}</option>
                                                                @php $c = ""; @endphp
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                                <div class="form-grup">
                                                    <h5>Vacunas</h5>
                                                    <select class="select2" multiple="multiple" name="vacunas[]"
                                                        data-placeholder="Select a State" style="width: 100%;">
                                                        @php $v = ""; @endphp
                                                        @foreach ($vacunas as $vac)
                                                                @foreach ($worker->getVac as $wVac)
                                                                    @if ($wVac->vacuna == $vac->id)
                                                                        @php $v = "selected"; @endphp
                                                                    @endif
                                                                @endforeach
                                                                <option value="{{ $vac->id }}" {{$v}}>{{ $vac->valor }}</option>
                                                                @php $v = ""; @endphp
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-grup">
                                                    <h5>Alergias</h5>
                                                    <select class="select2" multiple="multiple" name="alergias[]"
                                                        data-placeholder="Select a State" style="width: 100%;">
                                                        @php $a = ""; @endphp
                                                        @foreach ($alergias as $alr)
                                                                @foreach ($worker->getAlerg as $wAle)
                                                                    @if ($wAle->alergia == $alr->id)
                                                                        @php $a = "selected"; @endphp
                                                                    @endif
                                                                @endforeach
                                                                <option value="{{ $alr->id }}" {{$a}}>{{ $alr->valor }}</option>
                                                                @php $a = ""; @endphp
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="margin-top30">Documentación</h5>
                                                <div class="dropzone margin-top10">
                                                    <div class="dz-default dz-message"><span><i
                                                                class="sl sl-icon-plus"></i>Agregar Recetas Medicas</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="save" class="float-right btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <!-- Validation jquery -->
    <script src="{{ asset('scripts/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('scripts/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="{{ asset('scripts/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('scripts/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('js/addworker.js') }}"></script>
    <script>
        Dropzone.autoDiscover = false;
        $(document).ready(function() {
            $(".dropzone").dropzone({
                maxFiles: 50,
                maxFilesize: 2, // MB
                addRemoveLinks: true,
                url: "{{ route('temperal_galery') }}",
                acceptedFiles: "image/jpeg,image/png",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(file, response) {
                    var data = response.replace(' ', '_');
                    data = data.split(".");
                    $("#addworker").append('<input type="hidden" class="' + data[0] +
                        '" name="document[]" value="' + response + ',' + file.name + '">');
                },
                removedfile: function(file) {
                    file.previewElement.remove();
                    var str = file.xhr.response.split("_");
                    str = str[0] + '_' + file.name;
                    str = str.split('"').join("");
                    str = str.split(" ").join("_")
                    let s = str.split(".");
                    let x = $('#addworker').find('input.' + s[0]).remove();
                }
            })
        })

    </script>
@endsection
