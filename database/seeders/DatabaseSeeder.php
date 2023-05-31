<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Administrator;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
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

        $this->call(RolesSeeder::class);

        $admin = User::factory()->create([
            'id' => 1,
            'name' => 'AdminUser',
            'username' => 'AdminUser',
            'email' => 'adminuser@adminuser.com',
            'email_verified_at' => now(),
            'password' => bcrypt('AdminUser'),
            'remember_token' => Str::random(10),
        ]);

        $admin->assignRole('administrador');

        User::factory(20)->create();

        // Limpia la carpeta public y crea el archivo git ignore, también te deje comentado las factories pq no sirven los links que crean pero porsia
        $files = Storage::files('public');

        foreach ($files as $file) {
            Storage::delete($file);
        }

        Storage::disk('public')->put('.gitignore', "*\r\n!.gitignore");

        /*Image::factory(15)->create();*/

        /*Post::factory(15)->create();*/


    }
}
