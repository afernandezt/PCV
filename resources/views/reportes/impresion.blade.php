<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Pre-Concreto de Veracruz
          <small id="fecha" class="float-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>Reportes de Trabajadores</strong>
        </address>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Trabajadores</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($trabajador as $trab)
              <tr>
                <td>
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
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
