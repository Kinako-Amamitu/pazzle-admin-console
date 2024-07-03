<?php

namespace Database\Seeders;

use App\Models\User_mail;
use Illuminate\Database\Seeder;

class UserMailsTableSeeder extends Seeder
{
    public function run(): void
    {
        User_mail::create([
            'user_id' => 1,
            'mail_id' => 1,
            'item_get' => 0
        ]);
    }
}
