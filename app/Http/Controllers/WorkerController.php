<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(){
        return view('medics.workers');
    }
    public function saveWorker(Request $request){
        return $request;
        
    }
}
