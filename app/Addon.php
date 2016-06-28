<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model{
    protected $fillable = ['name'];
    public function locations(){
        return $this->belongsToMany('App\Location');
    }
}
