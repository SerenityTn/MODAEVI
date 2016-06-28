<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Location;
use App\Cliente;
use App\Robe;
use App\Addon;

class LocationsController extends Controller{
    public function index(){
        $locations = Location::latest()->get();
        return view("locations.index", compact('locations'));
    }

    public function create(){
        $cliente_id = 0;
        $robe_id = 0;
        return view("locations.create", compact('cliente_id', 'robe_id'));
    }


    public function createFromCliente($cliente_id){
        $robe_id = null;
        return view("locations.create", compact('cliente_id', 'robe_id'));
    }

    public function createFromRobe($robe_id){
        $cliente_id = null;
        return view("locations.create", compact('robe_id' ,'cliente_id'));
    }

    public function store(Request $request){
        $location = new Location($request->input());
        $location->robe_id = $request->input('robe_id');
        $location->cliente_id = $request->input('cliente_id');
        $location->save();
        $this->set_addons($location);
        return redirect()->to(route("admin.location.index"));
    }

    public function set_addons($location){
        $selected_addons = [];
        $addons = Addon::all();
        foreach($addons as $addon){
            if(request()->has($addon->name))
                $selected_addons[] = $addon->id;
        }
        $location->addons()->sync($selected_addons);
    }


    public function edit($location){
        return view("locations.edit", compact('location'));
    }

    public function update(Request $request, $location){
        $location->fill($request->input());
        $location->robe_id = $request->input('robe_id');
        $location->cliente_id = $request->input('cliente_id');
        $location->save();
        $this->set_addons($location);
        return redirect()->to(route('admin.location.index'));
    }

    public function destroy($location){
        $location->delete();
        return redirect()->to(route('admin.location.index'));
    }
}
