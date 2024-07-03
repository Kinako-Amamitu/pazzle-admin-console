<?php

namespace Database\Seeders;

use App\Models\Master;
use Illuminate\Database\Seeder;

class MailsTableSeeder extends Seeder
{
    public function run(): void
    {
        Master::create([
            'Text' => 'テストだよ',
            'item_id' => 1

        ]);
    }
}
