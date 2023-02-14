<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medias = [
            [
                'id' => 1,
                's3_id' => 's3_id_1',
                'file_name' => 'pdf1',
                'file_type' => 'picture1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                's3_id' => 's3_id_2',
                'file_name' => 'pdf2',
                'file_type' => 'picture2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                's3_id' => 's3_id_3',
                'file_name' => 'pdf3',
                'file_type' => 'picture3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];
        foreach ($medias as $media) {
            DB::table('media')->updateOrInsert(['id' => $media['id']], $media);

        }
    }
}
