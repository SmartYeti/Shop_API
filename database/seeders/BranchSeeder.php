<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branch')->insert([
            'branchid' => Str::random(10),
            'Branchname' => 'Delsan',
            'Address1' => 'Mandaue',
            'Address2' => 'Cebu',
            'DateOpened' => '2023/11/28',
            'Type' => '1',
            'Notes' => 'Noted',
            'Remark' => 'No Remarks',

        ]);
    }
}
