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
        dd($request);
            /*$worker = new Worker();
            $worker->job = $request->puesto;
            $worker->zone = $request->zona;
            $worker->institution = $request->inst;
            $worker->medic = $request->medi;
            $worker->nomina = $request->medi;
            $worker->name = $request->nomina;
            $worker->save();*/

            /*
             //Save Gallery
            if($request->galerie != ''){
                $photos = explode(',',$request->galerie);

                foreach($photos as $photo){
                    $temp_path = storage_path('tmp/uploads/'.$photo);
                    $new_path = public_path('rooms/uploads/'.$room->id);
                    if (!file_exists($new_path)) {
                        mkdir($new_path, 0777, true);
                    }
                    rename($temp_path, $new_path.'/'.$photo);
                    if(file_exists($new_path.'/'.$photo)){
                        $image = new RoomImages;
                        $image->file_name = $photo;
                        $image->room_id = $room->id;
                        $image->save();
                    }

                }
            }
            */
    }
    public function add(){
        $zona = Zone::all();
        $puesto = w_puesto::all();
        $inst_med = w_medical_inst::all();
        $medico = w_medico::all();
        return view('medics.addWorker', compact('zona','puesto','inst_med','medico'));
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