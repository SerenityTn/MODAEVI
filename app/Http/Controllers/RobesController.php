<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Robe;
use DB;

class RobesController extends Controller{
    public function index(){
        $robes = Robe::where('category', '3')->orderBy('ref')->get();
        return view('robes.index', compact('robes'));
    }

    public function create(){
        return view('robes.create');
    }

    public function filter(){
        if(count(request()->input('categories')) == 0)
            $robes = Robe::all()->sortBy('ref');
        else
            $robes = Robe::filter()->orderBy('ref', 'asc')->get();
        return view('robes.list', compact('robes'));
    }

    public function filter_list(){
        $category_id = request()->input('category_id');
        $robes_list = Robe::where('category', $category_id)->orderBy('ref', 'asc')->get()->lists('ref','id')->toArray();
        return view('robes.robe_list', compact('robes_list'));
    }

    public function store(){
        $robe = new Robe(request()->input());
        $this->upload_img($robe);
        $robe->save();
        return redirect()->route('admin.robe.index');
    }

    public function upload_img($robe){
        $img = request()->file('robe_img');
        if($img){
            $robe->img_name = $this->getName(request());
            $destination = "imgs/robes/";
            $img_path = public_path() . "/imgs/robes/" . $robe->img_name;
            if(file_exists($img_path)) unlink($img_path);
            $upload = $img->move($destination, $robe->img_name);
        }else{
            if(empty($robe->img_name)){
                $robe->img_name = "robe0.jpg";
            }
        }
    }

    public function getName(){
        $img = request()->file('robe_img');
        $extension = $img->getClientOriginalExtension();
        $category_prefix = substr(request()->input('category'), 0, 2);
        $color_suffix = substr(request()->input('color'), 0 ,2);
        $img_name = $category_prefix. '_' .request()->input('ref') . '_' . $color_suffix . "." . $extension;
        return $img_name;
    }

    public function show($robe){

    }

    public function edit($robe){
        return view('robes.edit', compact('robe'));
    }

    public function update($robe){
        $img = request()->file('robe_img');
        $robe->fill(request()->input());
        $this->upload_img($robe);
        $robe->save();
        return redirect()->to(route("admin.robe.index"));
    }

    public function destroy($robe){
        if($robe->img_name != "robe0.jpg"){
            $img_path = public_path() . "/imgs/robes/" . $robe->img_name;
            if(file_exists($img_path) && is_file($img_path)){
                unlink($img_path);
            }
        }
        $robe->delete();
        return "done !";
    }
}
