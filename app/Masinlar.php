<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masinlar extends Model
{
    public function surucu(){
      return Surucu::where('id',$this->surucu_id)->first();
    }
}
