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
        //所持アイテム一覧
        Have::create([
            'user_id' => 1,
            'item_id' => 1,
            'have' => 10,
        ]);
    }
}
