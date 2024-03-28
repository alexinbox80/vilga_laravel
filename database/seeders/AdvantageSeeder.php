<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvantageSeeder extends Seeder
{
    private array $advantages = [
        [
            'page_id' => 1,
            'header' => 'преимущества'
        ],
        [
            'page_id' => 2,
            'header' => 'advantages'
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->advantages as $advantage) {
            $advantage['created_at'] = Carbon::now();
            $advantage['updated_at'] = Carbon::now();
            DB::table('advantages')->insert($advantage);
        }
    }
}
