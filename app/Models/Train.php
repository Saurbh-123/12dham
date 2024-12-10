<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $table ="train";


    public function dham(){
      return $this->belongsToMany(Dham::class,'dham_start_train');
    }
}
