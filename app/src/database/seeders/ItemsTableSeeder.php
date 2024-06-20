<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'item_name' => '回復薬',
            'lot' => '消耗品',
            'get' => 100,
            'explanation' => '体力を回復',
        ]);
    }

}
