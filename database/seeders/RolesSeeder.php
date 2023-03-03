<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Faker\Core\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'administrador']);
        Role::create(['name' => 'profesor']);
        Role::create(['name' => 'alumno']);
        Role::create(['name' => 'invitado']);
    }
}
