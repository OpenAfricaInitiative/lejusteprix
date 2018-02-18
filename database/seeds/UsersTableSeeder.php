<?php

use App\Models\User;
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
        User::create([
            'name' => 'Durand',
            'email' => 'durand@chezlui.fr',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            
        ]);
        User::create([
            'name' => 'Dupont',
            'email' => 'dupont@chezlui.fr',
            'password' => bcrypt('user'),
        ]);
    }
    
}
