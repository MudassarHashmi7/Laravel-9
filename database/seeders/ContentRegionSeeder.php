<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contentRegions = [
            [
                'id' => 1,
                'region_id' => 1,
                'content_id' => 1,
                'roadmap_step_id' => 1,
                'type' => 'type 1',
                'content'=> 'content 1',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 2,
                'region_id' => 2,
                'content_id' => 3,
                'roadmap_step_id' => 2,
                'type' => 'type 1',
                'content'=> 'content 1',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 3,
                'region_id' => 3,
                'content_id' => 2,
                'roadmap_step_id' => 3,
                'type' => 'type 3',
                'content'=> 'content 3',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
        ];

        foreach ($contentRegions as $contentRegion) {
            DB::table('content_region')->updateOrInsert(['id' => $contentRegion['id']], $contentRegion);
        }
    }
}
