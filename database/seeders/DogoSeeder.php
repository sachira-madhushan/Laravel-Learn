<?php

namespace Database\Seeders;

use App\Models\Dogo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dogo::factory()->count(10)->create();
    }
}
