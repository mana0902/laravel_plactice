<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shops')->insert([
            [
                'owner_id' => '1',
                'name' => '店名',
                'information' => 'お店の説明お店の説明お店の説明お店の説明お店の説明お店の説明',
                'filename' => '',
                'is_selling' => true,
                'created_at' => '2021/01/01 11:11:11'
            ],
            [
                'owner_id' => '2',
                'name' => '店名',
                'information' => 'お店の説明お店の説明お店の説明お店の説明お店の説明お店の説明',
                'filename' => '',
                'is_selling' => true,
                'created_at' => '2021/01/01 11:11:11'
            ]]);
    }
}
