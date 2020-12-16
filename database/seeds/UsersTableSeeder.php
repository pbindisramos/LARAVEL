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
    public function run()
    {   
        User::create([
            
                'name' => 'Patricio',
                'email' => 'p.bindisramos@gmail.com',
                'password' => bcrypt('mixolidia'), // secret
                'ci' => '176020180',
                'address' => '',
                'phone' => '',
                'role' => 'admin'   
            
        ]);

        factory(User::class, 50)->create();
        }
 }

