<?php

namespace Database\Seeders;

use App\Models\Have;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HaveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Have::create([
            'have' => 10,
        ]);
    }
}
