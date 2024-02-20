<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            WriterSeeder::class,
            TagSeeder::class,
            BlogSeeder::class,
        ]);

    }
}
