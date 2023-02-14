<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            [
                'id' => 1,
                'name' => 'america',
                'created_at' => Carbon::now(),
                'created_at' => Carbon::now(),

            ],
            [
                'id' => 2,
                'name' => 'asia',
                'created_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'australia',
                'created_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ],
        ];

        foreach ($regions as $region) {
             DB::table('regions')->updateOrInsert(['id' => $region['id']], $region);
        }
    }
}
