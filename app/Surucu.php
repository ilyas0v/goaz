<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surucu extends Model
{
  public function masinlar(){
    return Masinlar::where('surucu_id',$this->id)->first();
  }
}
