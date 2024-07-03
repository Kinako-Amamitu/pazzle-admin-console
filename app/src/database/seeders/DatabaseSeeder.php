<?php

namespace Database\Seeders;

use App\Models\Have;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //シーだーに呼び出し
        $this->call(AccountsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(PlayerTableSeeder::class);
        $this->call(HaveTableSeeder::class);
        $this->call(MailsTableSeeder::class);
        $this->call(UserMailsTableSeeder::class);

    }
}
