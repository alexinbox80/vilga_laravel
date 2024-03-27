<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    private array $gallery = [
        'page_id' => 1,
        'header' => 'Фотогалерея'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gallery = $this->gallery;
        $gallery['created_at'] = Carbon::now();
        $gallery['updated_at'] = Carbon::now();
        DB::table('galleries')->insert($gallery);
    }
}
