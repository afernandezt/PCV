<div class="card">
    <div class="card-header">
      <h3 class="card-title">Lista de Veracruz</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="enf-ver" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Clave</th>
          <th>Nombre</th>
          <th>Puesto</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($ver_work as $ver)
          <tr>
            <td>{{$ver->nomina}}</td>
            <td>{{$ver->name}}</td>
            <td>{{$ver->getJob->job}}</td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn  btn-default">
                  <i class="fas fa-edit"></i>
                </button>
                <button type="button" class="btn  btn-default">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>              
            </td>
          </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>Clave</th>
          <th>Nombre</th>
          <th>Puesto</th>
          <th>Acciones</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>