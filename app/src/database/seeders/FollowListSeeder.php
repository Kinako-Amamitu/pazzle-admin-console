<?php

namespace Database\Seeders;

use App\Models\Frend;
use Illuminate\Database\Seeder;

class FollowListSeeder extends Seeder
{
    public function run(): void
    {
        Frend::create([
            'user_id' => 1,
            'follow_user_id' => 2,
            'follow_check' => 0
        ]);

        Frend::create([
            'user_id' => 2,
            'follow_user_id' => 1,
            'follow_check' => 0
        ]);
    }
}
