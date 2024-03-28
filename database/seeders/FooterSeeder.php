<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    private array $footers = [
        [
            'page_id' => 1,
            'header' => 'Вилга парк, поселок Новая Вилга'
        ],
        [
            'page_id' => 2,
            'header' => 'Vilga park, New Vilga village'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->footers as $footer) {
            $footer['created_at'] = Carbon::now();
            $footer['updated_at'] = Carbon::now();
            DB::table('footers')->insert($footer);
        }
    }
}
