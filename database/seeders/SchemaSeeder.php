<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchemaSeeder extends Seeder
{
    private array $schema = [
        'page_id' => 1,
        'header' => 'Схема поселка'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schema = $this->schema;
        $schema['created_at'] = Carbon::now();
        $schema['updated_at'] = Carbon::now();
        DB::table('schemas')->insert($schema);
    }
}
