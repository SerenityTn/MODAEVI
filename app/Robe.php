<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Robe extends Model{
    public static $categories = ['Mariée', 'Fiancaille', 'Keswa', 'Hadhara'];
    protected $fillable = [
        'ref','color','size', 'category', 'buy_price', 'price', 'min_price'
    ];

    public static function filter(){
        $categories = request()->input('categories');
        return Robe::whereIn('category', $categories);
    }

    public static function filter_category(){

    }

    public function locations(){
        return $this->hasMany('App\Location');
    }

    public function getCategoryName(){
        return Robe::$categories[$this->category];
    }
}
