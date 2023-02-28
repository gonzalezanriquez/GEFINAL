<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Faker\Core\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('roles')->insert([
            'role_name' => 'Administrador',
            'created_at' => (new \DateTime())->format('Y-m-d H:i:s'),


        ]);

        DB::Table('roles')->insert([
            'role_name' => 'Editor de Noticias',
            'created_at' => (new \DateTime())->format('Y-m-d H:i:s'),


        ]);

        DB::Table('roles')->insert([
            'role_name' => 'Profesor',
            'created_at' => (new \DateTime())->format('Y-m-d H:i:s'),


        ]);

        DB::Table('roles')->insert([
            'role_name' => 'Alumno',
            'created_at' => (new \DateTime())->format('Y-m-d H:i:s'),


        ]);
    }
}
