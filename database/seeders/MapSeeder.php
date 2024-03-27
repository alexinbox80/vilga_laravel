<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    private array $map = [
        'page_id' => 1,
        'header' => 'как добраться',
        'text' => 'От города Петрозаводск для авто есть несколько комфортных маршрутов. От автовокзала и обратно ездят несколько рейсовых автобусов.'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $map = $this->map;
        $map['created_at'] = Carbon::now();
        $map['updated_at'] = Carbon::now();
        DB::table('maps')->insert($map);
    }
}
