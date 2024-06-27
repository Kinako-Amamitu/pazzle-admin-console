<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //プレイヤー一覧
        User::create([
            'player_name' => 'キダ',
            'level' => 10,
            'exp' => 100,
            'hp' => 100,
        ]);

        User::factory(100)->create();
    }
}
