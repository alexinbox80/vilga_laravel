<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    private array $maps = [
        [
            'page_id' => 1,
            'header' => 'как добраться',
            'text' => 'От города Петрозаводск для авто есть несколько комфортных маршрутов. От автовокзала и обратно ездят несколько рейсовых автобусов.'
        ],
        [
            'page_id' => 2,
            'header' => 'how to get there',
            'text' => 'There are several comfortable routes for cars from the city of Petrozavodsk. Several regular buses go from the bus station and back.'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->maps as $map) {
            $map['created_at'] = Carbon::now();
            $map['updated_at'] = Carbon::now();
            DB::table('maps')->insert($map);
        }
    }
}
