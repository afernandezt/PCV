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
                </tr>
            </thead>
            <tbody>
                @foreach ($xal_work as $xal)
                    <tr>
                        <td>{{ $xal->nomina }}</td>
                        <td><a href="/workers/show/{{ $xal->id }}">{{ $xal->name }}</a></td>
                        <td>{{ $xal->getJob->job }}</td>
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
