<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Zone;
use App\Models\w_puesto;
use App\Models\w_alergia;
use App\Models\w_comorbidad;
use App\Models\w_medical_inst;
use App\Models\w_medico;
use App\Models\w_vacuna;
use App\Models\w_document;
use App\Models\w_opt_detail;

class WorkerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $ver_work = Worker::where('zone',1)->get();
        $cor_work = Worker::where('zone',2)->get();
        $xal_work = Worker::where('zone',3)->get();
        return view('medics.workers', compact('ver_work','cor_work','xal_work'));
    
    }
    public function saveWorker(Request $request){
        //dd($request);
        $worker = new Worker();
        $worker->job = $request->puesto;
        $worker->zone = $request->zona;
        $worker->name = $request->name;  
        $worker->nomina = $request->nomina;
        $worker->direccion = $request->direccion;  
        $worker->edad = $request->edad;     
        if(isset($request->medico)){
            $worker->medic = $request->medico;
        }
        if(isset($request->inst)){
            $worker->institution = $request->inst;
        }
        $worker->save();
        //comorbidad
        if($request->comorbidad){
            foreach ($request->comorbidad as $comorbid) {
                $comb = new w_comorbidad();
                $comb->comorbidad = $comorbid;
                $comb->id_worker = $worker->id;
                $comb->save();
            }
        }
        //vacunas
        if($request->alergias){
            foreach ($request->vacunas as $vacuna) {
                $vac = new w_vacuna();
                $vac->vacuna = $vacuna;
                $vac->id_worker = $worker->id;
                $vac->save();
            }
        }
        //alergias
        if($request->alergias){
            foreach ($request->alergias as $alerg) {
                $aler = new w_alergia();
                $aler->alergia = $alerg;
                $aler->id_worker = $worker->id;
                $aler->save();
            }
        }
        //Save Gallery
        if($request->document != ''){
            foreach ($request->document as $docs) {
                $photo = explode(',',$docs);
                    $temp_path = storage_path('tmp/uploads/'.$photo[0]);
                    $new_path = public_path('workers/'.$worker->id);
                    if (!file_exists($new_path)) {
                        mkdir($new_path, 0777, true);
                    }
                    rename($temp_path, $new_path.'/'.$photo[0]);
                    if(file_exists($new_path.'/'.$photo[0])){
                        $doc = new w_document;
                        $doc->route = $photo[0];
                        $doc->id_worker = $worker->id;
                        $doc->name = $photo[1];
                        $doc->save();
                    }
                
            }
           
        }
        return redirect('/workers/show/'.$worker->id);            
    }
    public function add(){
        $zona = Zone::all();
        $puesto = w_puesto::all();
        $inst_med = w_medical_inst::all();
        $medico = w_medico::all();
        $comorbidad = w_opt_detail::where("id_entidad",1)->get();
        $vacunas = w_opt_detail::where("id_entidad",2)->get();
        $alergias = w_opt_detail::where("id_entidad",3)->get();
        return view('medics.addWorker', compact('zona','puesto','inst_med','medico','comorbidad','vacunas','alergias'));
    }
    public function show($id){
        $trabajador = Worker::where('id',$id)->get()->first();
        $vacunas = w_vacuna::where('id_worker',$id)->get();
        $comorbidad = w_comorbidad ::where('id_worker',$id)->get();
        $alergias = w_alergia::where('id_worker',$id)->get();
        return view('medics.show',compact('trabajador','vacunas','comorbidad','alergias'));
    }
    public function galery_temperal(Request $request){
        $path = storage_path('tmp/uploads');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $name);

        return $name;
    }
}