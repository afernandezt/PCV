<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\BaseStatus;

class worker extends Model
{
    public function getJob(){
        return $this->hasOne(w_puesto::class,'id','job');
    }
}
