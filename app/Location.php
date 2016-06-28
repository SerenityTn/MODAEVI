<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Location extends Model{
    protected $fillable = [
        'avance', 'reste', 'date_location', 'assurance', 'notes'
    ];

    public function robe(){
        return $this->belongsTo('App\Robe');
    }

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

    public function addons(){
        return $this->belongsToMany('App\Addon');
    }

    public function setDateLocationAttribute($value){
        Carbon::setLocale('fr');
        $this->attributes['date_location'] = Carbon::createFromFormat('Y-m-d H:i:s', $value);
    }
}
