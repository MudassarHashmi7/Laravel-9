<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            [
                'id' => 1,
                'roadmap_step_id' => 1,
                'is_editable' => true,
                'type' => 'editable',
                'content' => 'first content',
                'sort_order'=> 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 2,
                'roadmap_step_id' => 2,
                'is_editable' => true,
                'type' => 'editable',
                'content' => 'first content',
                'sort_order'=> 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id' => 3,
                'roadmap_step_id' => 3,
                'is_editable' => true,
                'type' => 'editable',
                'content' => 'first content',
                'sort_order'=> 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
        ];

        foreach ($contents as $content) {
            DB::table('contents')->updateOrInsert(['id' => $content['id']], $content);
        }
    }
}
