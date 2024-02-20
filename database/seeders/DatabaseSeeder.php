<?php

namespace Database\Seeders;
 
use App\Models\Role;
use App\Models\User;
use Database\Seeders\ApplicationSeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;
 
class DatabaseSeeder extends Seeder
{
    /**
     * seed the applications seeds.
     *
     * @return void
     */
    public function run()
    {  
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
            UserSeeder::class,
            ApplicationSeeder::class,
        ]);
    }
}
