<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoadmapStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roadmapSteps = [
            [
                'id' => 1,
                'number' => 1,
                'title' => 'roadmap step 1',
                'description' => 'first description',
                'image' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 2,
                'number' => 2,
                'title' => 'roadmap step 2',
                'description' => 'first description',
                'image' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 3,
                'number' => 3,
                'title' => 'roadmap step 3',
                'description' => 'first description',
                'image' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
        ];

        foreach ($roadmapSteps as $roadmapStep) {
            DB::table('roadmap_steps')->updateOrInsert(['id' => $roadmapStep['id']], $roadmapStep);
        }
    }
}
