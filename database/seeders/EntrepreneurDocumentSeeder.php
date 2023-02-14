<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrepreneurDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrepreneurDocs = [
            [
                'id' => 1,
                'entrepreneur_document'=> 1,
                'agent_id' => 1,
                'name' => 'haider',
                'description' => 'first description',
                'document_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'entrepreneur_document'=> 2,
                'agent_id' => 2,
                'name' => 'hasan',
                'description' => 'second description',
                'document_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'entrepreneur_document'=> 3,
                'agent_id' => 3,
                'name' => 'ali',
                'description' => 'second description',
                'document_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($entrepreneurDocs as $entrepreneurDoc) {
            DB::table('entrepreneur_documents')->updateOrInsert(['id' => $entrepreneurDoc['id']], $entrepreneurDoc);
        }
    }

}
