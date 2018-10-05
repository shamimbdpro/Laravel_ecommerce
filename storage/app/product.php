<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  public function manufacture_name(){
  	 return $this->belongsTo('App\manufacture','menufacture_id','menufr_id');
  }
 
}
