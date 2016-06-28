<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
    protected $fillable = [
        'cin', 'name', 'number1', 'number2', 'address'
    ];

    public function locations(){
        return $this->hasMany('App\Location');
    }
}
