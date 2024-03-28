<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    private array $items = [
        [
            'advantage_id' => 1,
            'title' => 'Транспортная доступность',
            'text' => 'Поселок расположен всего в 15 километрах от города Петрозаводск. На машине дорога займет от 15 минут, рейсовые автобусы ходят каждые 30 минут.'
        ],
        [
            'advantage_id' => 1,
            'title' => 'Экологичный район',
            'text' => 'Природа, отдаленная от больших городов и промышленных центров, подарит тишину и свежий воздух'
        ],
        [
            'advantage_id' => 1,
            'title' => 'Живописный ландшафт',
            'text' => 'Поселок окружен лесом из сосновых боров и березовых рощ. В них растут дикие разнообразные Карельские ягоды и грибы.'
        ],
        [
            'advantage_id' => 1,
            'title' => 'Центральные коммуникации',
            'text' => 'Поселок оснащен газом и электричеством, коммунальные платежи за которые достаточно недорогие.'
        ],

        [
            'advantage_id' => 2,
            'title' => 'Transport accessibility',
            'text' => 'The village is located just 15 kilometers from the city of Petrozavodsk. By car the journey will take 15 minutes, regular buses run every 30 minutes.'
        ],
        [
            'advantage_id' => 2,
            'title' => 'Eco-friendly area',
            'text' => 'Nature, remote from big cities and industrial centers, will give silence and fresh air'
        ],
        [
            'advantage_id' => 2,
            'title' => 'Picturesque landscape',
            'text' => 'The village is surrounded by a forest of pine forests and birch groves. A variety of wild Karelian berries and mushrooms grow in them.'
        ],
        [
            'advantage_id' => 2,
            'title' => 'Central communications',
            'text' => 'The village is equipped with gas and electricity, utility bills for which are quite inexpensive.'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->items as $item) {
            $item['created_at'] = Carbon::now();
            $item['updated_at'] = Carbon::now();
            DB::table('items')->insert($item);
        }
    }
}
