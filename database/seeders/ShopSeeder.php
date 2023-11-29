<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shop')->insert([
            'shopid' => Str::random(10),
            'shopname' => 'Delsan',
            'Address1' => 'Mandaue',
            'Address2' => 'Cebu',
            'Notes' => 'Noted',
            'Remark' => 'No Remarks',

        ]);
    }
}
