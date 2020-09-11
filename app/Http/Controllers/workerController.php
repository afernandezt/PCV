<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Zone;

class WorkerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $zona = Zone::all();
        $ver_work = Worker::where('zone',1)->get();
        $cor_work = Worker::where('zone',2)->get();
        $xal_work = Worker::where('zone',3)->get();
        return view('medics.workers', compact('zona','ver_work','cor_work','xal_work'));
    
    }
    public function saveWorker(Request $request){
            $worker = new Worker();
            $worker->job = $request->puesto;
            $worker->zone = $request->zona;
            $worker->institution = $request->inst;
            $worker->medic = $request->medi;
            $worker->nomina = $request->medi;
            $worker->name = $request->nomina;
            $worker->save();
    }
}