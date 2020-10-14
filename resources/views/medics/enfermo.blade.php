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
                        <select class="form-control select2" id="insti" name="inst" style="width: 100%;">
                            <option value="">Seleccione una Institución</option>
                            @foreach ($inst_med as $i)
                                <option value="{{ $i->id }}">{{ $i->instis }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="medico">medico</label>
                        <select class="form-control select2" id="medico" name="medico" style="width: 100%;">
                            <option value="">Seleccione un Medico</option>
                            @foreach ($medico as $m)
                                <option value="{{ $m->id }}">{{ $m->medico }}</option>
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
                            @foreach ($comorbidad as $com)
                                <option value="{{ $com->id }}">{{ $com->valor }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="form-grup">
                        <h5>Vacunas</h5>
                        <select class="select2" multiple="multiple" name="vacunas[]" data-placeholder="Select a State"
                            style="width: 100%;">
                            @foreach ($vacunas as $vac)
                                <option value="{{ $vac->id }}">{{ $vac->valor }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-grup">
                        <h5>Alergias</h5>
                        <select class="select2" multiple="multiple" name="alergias[]" data-placeholder="Select a State"
                            style="width: 100%;">
                            @foreach ($alergias as $alr)
                                <option value="{{ $alr->id }}">{{ $alr->valor }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="margin-top30">Documentación</h5>
                    <div class="dropzone margin-top10">
                        <div class="dz-default dz-message"><span><i class="sl sl-icon-plus"></i>Agregar Recetas
                                Medicas</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
