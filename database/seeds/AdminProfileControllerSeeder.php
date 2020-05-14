<?php

use Illuminate\Database\Seeder;

class AdminProfileControllerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'mon Nom',
                    'email' => 'admin@live.fr',
                    'password' => Hash::make('adminadmin'),
            'role' => 'admin'
           ]);
    }
}
