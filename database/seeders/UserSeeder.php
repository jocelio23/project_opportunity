<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'jocelio',
            'formacao' => 'Emprego teste',
            'pretensao' => '1000',
            'email' => 'jota@jota.com',            
            'password' => 'jota',
        ]);

        
    }
}
