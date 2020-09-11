<div class="card">
    <div class="card-header">
      <h3 class="card-title">Lista de xalapa</h3>               
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="enf-xal" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Clave</th>
          <th>Nombre</th>
          <th>Puesto</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($xal_work as $xal)
          <tr>
            <td>{{$xal->nomina}}</td>
            <td>{{$xal->name}}</td>
            <td>{{$xal->getJob->job}}</td>
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