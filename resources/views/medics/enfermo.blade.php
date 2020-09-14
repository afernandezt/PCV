<div id="accordion">
<div class="asd">
    <div class="casdr">
    <h6 class="as">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
        <i class="fas fa-plus"></i> Enfermo
        </a>
    </h6>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="insti">institucion</label>
                    <select class="form-control select2" id="insti" style="width: 100%;">
                        @foreach ($inst_med as $i)
                        <option value="{{$i->id}}">{{$i->instis}}</option>
                        @endforeach                                         
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="medico">medico</label>
                    <select class="form-control select2" id="medico" style="width: 100%;">
                    @foreach ($medico as $m)
                        <option value="{{$m->id}}">{{$m->medico}}</option>
                    @endforeach                                     
                    </select>
                </div>
            </div>                      
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-grup">
                    <h5>Comorbilidad</h5>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="cm1" value="option1">
                        <label for="cm1" class="custom-control-label">diabetes</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="cm2" value="option1">
                        <label for="cm2" class="custom-control-label">Hipértension</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="cm3" value="option1">
                        <label for="cm3" class="custom-control-label">Cardiaco</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="cm4" value="option1">
                        <label for="cm4" class="custom-control-label">Asmatico</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>