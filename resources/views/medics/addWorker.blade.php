@extends('layouts.app')
@section('style')
<link rel="stylesheet" href="{{asset('scripts/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('scripts/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}"> 
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
            <form role="form" id="quickForm">
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
                      <div class="col-md-4">
                        <div class="form-group">
                            <label for="puesto">Puesto</label>
                            <select class="form-control select2" id="puesto"  placeholder="Puesto" style="width: 100%;">
                              @foreach ($puesto as $p)
                                <option value="{{$p->id}}">{{$p->puesto}}</option>
                              @endforeach
                            </select>
                            
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label for="name">Zona</label>
                          <select class="form-control select2" id="zona"  placeholder="Zona" style="width: 100%;">
                            @foreach ($zona as $z)
                              <option value="{{$z->id}}">{{$z->name}}</option>
                            @endforeach
                          </select>
                        </div>
                     </div>
                     <div class="col-sm-4">
                      <div class="form-group">
                        <label for="name">Covid</label>
                        <select class="form-control select2" id="covid"  placeholder="covid" style="width: 100%;">
                         <option value="0">Negativo</option>
                         <option value="1">Positivo</option>
                        </select>
                      </div>
                   </div>
                    </div>
                    @include('medics.enfermo')
                </div>
                
                <button type="button" id="save" class="btn btn-primary">Submit</button>
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
<script>
     $(document).ready(function(){
        $('.select2').select2({
            theme: 'bootstrap4'
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