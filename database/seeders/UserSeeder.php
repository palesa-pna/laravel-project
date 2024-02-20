<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user1 = User::create([
            'name'                => 'Palesa',
            'email'               => 'palesa@tutorial.co.za',
            'password'            => Hash::make('password'),
            'email_verified_at'   => Carbon::now(),
            'is_active'           => TRUE,
        ]);
        $user2 = User::create([
            'name'                => 'Admin',
            'email'               => 'admin@tutorial.co.za',
            'password'            => bcrypt('password'),
            'email_verified_at'   => Carbon::now(),
            'is_active'           => TRUE,
        ]);
        $user3 = User::create([
            'name'                => 'Webmaster',
            'email'               => 'webmaster@tutorial.co.za',
            'password'            => bcrypt('password'),
            'email_verified_at'   => Carbon::now(),
            'is_active'           => TRUE,
        ]);

        $user1->assignRole(User::SUPERUSER);
        $user2->assignRole(User::ADMIN);
        $user3->assignRole(User::WEBMASTER);

        User:: factory()->count(10)->create();
    }
}
