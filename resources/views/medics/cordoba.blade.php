<div class="card">
    <div class="card-header">
      <h3 class="card-title">Lista de cordoba</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="enf-cor" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Clave</th>
          <th>Nombre</th>
          <th>Puesto</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($cor_work as $cor)
          <tr>
            <td>{{$cor->nomina}}</td>
            <td><a href="/workers/show/{{$cor->id}}">{{$cor->name}}</a></td>
            <td>{{$cor->getJob->job}}</td>
          </tr>
        @endforeach
        
        </tbody>
        <tfoot>
        <tr>
          <th>Clave</th>
          <th>Nombre</th>
          <th>Puesto</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>