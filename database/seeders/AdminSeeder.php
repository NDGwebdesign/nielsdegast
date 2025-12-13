<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Niels de Gast',
            'email' => 'nielsdegast@outlook.com',
            'password' => bcrypt('NDGadmin06!'),
            'is_admin' => true,
        ]);
    }
}
