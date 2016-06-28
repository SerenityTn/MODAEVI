<?php

use Illuminate\Database\Seeder;

use App\Addon;

class AddonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $addon = new Addon(['name' => 'Maquillage normal']);
        $addon->save();
        $addon = new Addon(['name' => 'Bouquet']);
        $addon->save();
        $addon = new Addon(['name' => 'Chaussures']);
        $addon->save();        
    }
}
