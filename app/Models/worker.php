<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    public function workjob(){
        return $this->hasOne(workerjob::class,'id','id');
    }
}
