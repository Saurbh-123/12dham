<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dham extends Model
{
    protected $table = "dham_start";
    protected $fillable = [
        'name','state_name','state_code','district_name','district_code','block_name','block_code','vilage_name','place_localname'
        ,'drop_station','catch_station','route_name','created_at','updated_at'
    ];
    protected $primaryKey = 'id';

    protected $timestamp = true;
    protected $guarded = [];
    protected $hidden = [];

    public function train(){
        return $this->belongsToMany(Train::class,'dham_start_train');
      }
}
