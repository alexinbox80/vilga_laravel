<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    private array $footer = [
        'page_id' => 1,
        'header' => 'Вилга парк, поселок Новая Вилга'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $footer = $this->footer;
        $footer['created_at'] = Carbon::now();
        $footer['updated_at'] = Carbon::now();
        DB::table('footers')->insert($footer);
    }
}
