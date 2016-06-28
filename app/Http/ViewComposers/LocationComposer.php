<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Cliente;
use App\Robe;

class LocationComposer {
    private $robes_list, $clientes_list;

    public function __construct(){
        $this->clientes_list = Cliente::all()->sortBy('name')->lists('name','id')->toArray();        
        $this->robes_list = Robe::all()->sortBy('ref')->lists('ref','id')->toArray();
    }

    public function compose(View $view){
        $view->with('clientes_list', $this->clientes_list)->with('robes_list', $this->robes_list);
    }
}
