<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchemaSeeder extends Seeder
{
    private array $schemas = [
        [
            'page_id' => 1,
            'header' => 'Схема поселка'
        ],
        [
            'page_id' => 2,
            'header' => 'Village map'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->schemas as $schema) {
            $schema['created_at'] = Carbon::now();
            $schema['updated_at'] = Carbon::now();
            DB::table('schemas')->insert($schema);
        }
    }
}
