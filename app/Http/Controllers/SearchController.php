<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;
use App\Models\w_puesto;
use App\Models\w_opt_detail;

class SearchController extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        $comorbidad = w_opt_detail::where('id_entidad', 1)->get();
        $vacuna = w_opt_detail::where('id_entidad', 2)->get();
        $alergia = w_opt_detail::where('id_entidad', 3)->get();
        $puesto = w_puesto::all();
        return view('reportes.reporte', 
            compact(
                'puesto',
                'comorbidad',
                'vacuna',
                'alergia'
            ));
    }
    public function search(worker $worker, Request $request)
    {   
        $comorbidad = w_opt_detail::where('id_entidad', 1)->get();
        $vacuna = w_opt_detail::where('id_entidad', 2)->get();
        $alergia = w_opt_detail::where('id_entidad', 3)->get();
        $puesto = w_puesto::all();
        $worker = $worker->newQuery();
        $worker->join('w_med_details', 'workers.id', '=', 'w_med_details.id_worker');
        $worker->join('w_comorbidads', 'workers.id', '=', 'w_comorbidads.id_worker');
        $worker->join('w_vacunas', 'workers.id', '=', 'w_vacunas.id_worker');
        $worker->join('w_alergias', 'workers.id', '=', 'w_alergias.id_worker');
        $worker->select('workers.id');
          
        if ($request->field) {
            $worker->where(function ($query) use ($request) {
                $query->where('worker.nomina', 'like' ,'%'.$request->field.'%')
                ->orWhere('worker.name', 'like', '%'.$request->field.'%');
            });
        }
        if($request->puesto){
            $worker->where('workers.job',$request->puesto);
        }
        if($request->cuerpo){
            $worker->where('w_med_details.obesidad',$request->cuerpo);
        }
        if($request->comorbidad){
            $worker->where('w_comorbidads.comorbidad',$request->comorbidad);
        }
        if($request->vacunas){
            $worker->where('w_vacunas.vacuna',$request->vacunas);
        }
        if($request->alergia){
            $worker->where('w_alergias.alergia',$request->alergia);
        }
        $worker->groupBy('workers.id');        
        $workers = array();
        foreach ($worker->get() as $wor) {
            $w = Worker::find($wor->id);
            array_push($workers,$w);
        }
        return view('reportes.reporte', [
            "trabajador" => $workers,
            "puesto" => $puesto,
            "comorbidad" => $comorbidad,
            "vacuna" => $vacuna,
            "alergia" => $alergia
        ]);
    }
}
