<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        
        DatabaseSeeder::createAdmin();
    }

    public function createAdmin()
    {
        $user = new User;
        $user->name = 'Eberth';
        $user->email = 'itec_19@hotmail.com';
        $user->password = 'Factoriaf5';
        $user->role = 'admin';

        $user->save();

    }
}
