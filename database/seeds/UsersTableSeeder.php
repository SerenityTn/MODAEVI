<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $user = new User(['name' => 'Serenity', 'email' => 'serenity1994@hotmail.fr', 'password' => 'aspirine']);
        $user->save();
    }
}
