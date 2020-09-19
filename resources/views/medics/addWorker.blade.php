@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{asset('scripts/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('scripts/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('scripts/dropzone/dropzone.min.css')}}"> 
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
        <form action="{{route('saveWorker')}}" method="post"  enctype="multipart/form-data" role="form" id="addworker">
          @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Completo">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nomina">Numero de Nomina</label>
                        <input type="text" name="nomina" class="form-control" id="nomina" placeholder="nomina">
                      </div>                      
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label for="name">Direccion</label>
                          <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Direccion">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="name">Edad</label>
                          <input type="text" name="edad" class="form-control" id="edad" placeholder="Edad">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="puesto">Puesto</label>
                            <select class="form-control select2" id="puesto" name="puesto" placeholder="Puesto" style="width: 100%;">
                              @foreach ($puesto as $p)
                                <option value="{{$p->id}}">{{$p->puesto}}</option>
                              @endforeach
                            </select>                            
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="name">Zona</label>
                          <select class="form-control select2" id="zona" name="zona"  placeholder="Zona" style="width: 100%;">
                            @foreach ($zona as $z)                             
                              <option value="{{$z->id}}">{{$z->name}}</option>
                            @endforeach
                          </select>
                        </div>
                     </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <label for="name">Covid</label>
                        <select class="form-control" id="covid"  placeholder="covid" style="width: 100%;">
                         <option value="0">Negativo</option>
                         <option value="1">Positivo</option>
                        </select>
                      </div>
                   </div>
                    </div>
                    @include('medics.enfermo')
                </div>
                
                <button type="submit" id="save" class="btn">Submit</button>
              </form>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('scripts')
    <!-- Validation jquery -->
    <script src="{{asset('scripts/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('scripts/jquery-validation/additional-methods.min.js')}}"></script>
    <script src="{{asset('scripts/select2/js/select2.full.min.js')}}"></script>  
    <script src="{{asset('scripts/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('js/addworker.js')}}"></script>
    <script>
      Dropzone.autoDiscover = false;
    $(document).ready(function(){
        $(".dropzone").dropzone({
        maxFiles: 2000,
        url: "{{route('temperal_galery')}}",
        acceptedFiles: "image/jpeg,image/png,image/gif",
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        success: function (file, response) {
            oldValue = $('.input-galery').val();
            var arr = oldValue === "" ? [] : oldValue.split(',');
            arr.push(response);
            var newValue = arr.join(',');
            jQuery(".input-galery").val(newValue);          
        }
        })
      })
    </script>
@endsection