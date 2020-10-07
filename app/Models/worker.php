<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\BaseStatus;

class worker extends Model
{
    public function details(){
        return $this->hasOne(w_med_detail::class,'id_worker','id');
    }
    public function getJob(){
        return $this->hasOne(w_puesto::class,'id','job');
    }
    public function getZone(){
        return $this->hasOne(zone::class,'id','zone');
    }
    public function getMedic(){
        return $this->hasOne(w_medico::class,'id','medic');
    }
    public function getInst(){
        return $this->hasOne(w_medical_inst::class,'id','institution');
    }
    public function getDocs(){
        return $this->hasMany(w_document::class,'id_worker','id');
    }
    public function getComb(){
        return $this->hasMany(w_comorbidad::class,'id_worker','id');
    }
    public function getVac(){
        return $this->hasMany(w_vacuna::class,'id_worker','id');
    }
    public function getAlerg(){
        return $this->hasMany(w_alergia::class,'id_worker','id');
    }
}
