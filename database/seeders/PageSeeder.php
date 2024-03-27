<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    private array $page = [
        'lang_id' => 1,
        'charset' => 'utf-8',
        'meta_title' => 'Meta Title',
        'meta_description' => 'Meta Description',
        'title' => 'Vilga village',
        'contact_phone' => '7 812 607 17 95'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $page = $this->page;
        $page['created_at'] = Carbon::now();
        $page['updated_at'] = Carbon::now();
        DB::table('pages')->insert($page);
    }
}
