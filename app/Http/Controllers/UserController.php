<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\w_puesto;
use App\Models\roll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $usr = User::all();

        return view('users.users', compact('usr'));
    }
    public function add(){

        $roll = roll::all();
        $puesto = w_puesto::all();
        return view('users.add', compact('puesto','roll'));
    }
    public function save(Request $request){
        //dd($request);
        $user = new User();
        $user->nombre = $request->nombre;
        $user->email = $request->email;
        $user->password = Hash::make($request->password2);
        $user->puesto = $request->puesto;
        $user->roll = $request->roll;
        $user->save();
        return view('users.users');
    }
}
