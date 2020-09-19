<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class w_vacuna extends Model
{
    public function getName(){
        return $this->hasOne(w_opt_detail::class,'id','vacuna');
    }
}
