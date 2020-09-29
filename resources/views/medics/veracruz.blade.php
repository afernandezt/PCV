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
                </tr>
            </thead>
            <tbody>
                @foreach ($ver_work as $ver)
                    <tr>
                        <td>{{ $ver->nomina }}</td>
                        <td><a href="/workers/show/{{ $ver->id }}">{{ $ver->name }}</a></td>
                        <td>{{ $ver->getJob->puesto }}</td>
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
