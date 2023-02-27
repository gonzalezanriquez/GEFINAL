<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Administrator;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
                 'id' => 1,
                 'name' => 'AdminUser',
                 'username' => 'AdminUser',
                 'email' => 'adminuser@adminuser.com',
                 'email_verified_at' => now(),
                 'password' => bcrypt('AdminUser'),
                 'remember_token' => Str::random(10),
             ]);

        $user = User::find(1);
        $user->roles()->attach([1,2,3]);

        User::factory(20)->create();

        $this->call(RolesSeeder::class);

        Image::factory(15)->create();

        Post::factory(15)->create();


    }
}
