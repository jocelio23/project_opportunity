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
            'name' => 'teste',
            'formacao' => 'Emprego teste',
            'pretensao' => '1000',
            'email' => 'teste@teste',            
            'password' => 'teste',
            'flag' => '10',
        ]);

        
    }
}
