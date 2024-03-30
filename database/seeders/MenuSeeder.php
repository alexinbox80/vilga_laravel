<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    private array $menus = [
        [
            'page_id' => 1,
            'name' => 'преимущества',
            'href' => '#advantages'
        ],
        [
            'page_id' => 1,
            'name' => 'галерея',
            'href' => '#gallery'
        ],
        [
            'page_id' => 1,
            'name' => 'план поселка',
            'href' => '#schema'
        ],
        [
            'page_id' => 1,
            'name' => 'как проехать',
            'href' => '#map'
        ],

        [
            'page_id' => 2,
            'name' => 'advantages',
            'href' => '#advantages'
        ],
        [
            'page_id' => 2,
            'name' => 'gallery',
            'href' => '#gallery'
        ],
        [
            'page_id' => 2,
            'name' => 'village plan',
            'href' => '#schema'
        ],
        [
            'page_id' => 2,
            'name' => 'how can I get to',
            'href' => '#map'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->menus as $menu) {
            $item['created_at'] = Carbon::now();
            $item['updated_at'] = Carbon::now();
            DB::table('menus')->insert($menu);
        }
    }
}
