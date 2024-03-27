<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvantageSeeder extends Seeder
{
    private array $advantage = [
        'page_id' => 1,
        'header' => 'преимущества'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advantage = $this->advantage;
        $advantage['created_at'] = Carbon::now();
        $advantage['updated_at'] = Carbon::now();
        DB::table('advantages')->insert($advantage);
    }
}
