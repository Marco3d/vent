<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Model::unguard();
        factory('App\User', 25)->create();
        factory('App\Categoria',15)->create();
        
        Model::reguard();
    }
}
