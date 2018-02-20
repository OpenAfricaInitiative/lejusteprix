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
            'name' => 'Designer',
            'email' => 'mortallseck@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'settings'=>'{"pagination":8}',
            
        ]);
        
        User::create([
        'name' => 'Dupont',
        'email' => 'dupont@chezlui.fr',
        'password' => bcrypt('user'),
        'settings' => '{"pagination": 8}',
    ]);

        User::create([
            'name' => 'Delmovic',
            'email' => 'delmovic@gmail.com',
            'password' => bcrypt('admin'),
            'settings'=>'{"pagination":8}',
            
        ]);
        User::create([
            'name' => 'Mariam',
            'email' => 'Mariam@gmail.com',
            'password' => bcrypt('user'),
             'settings'=>'{"pagination":8}',
        ]);
    }
    
}
