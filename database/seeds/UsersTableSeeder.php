<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory('App\Models\Users',10)->create([
            'password'=>bcrypt('123456')
        ]);
    }
}
