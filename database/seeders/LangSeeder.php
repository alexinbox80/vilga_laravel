<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangSeeder extends Seeder
{
    private array $langs = [
        [
            'language' => 'ru',
        ],
        [
            'language' => 'en',
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->langs as $lang) {
            $lang['created_at'] = Carbon::now();
            $lang['updated_at'] = Carbon::now();
            DB::table('langs')->insert($lang);
        }

    }
}
