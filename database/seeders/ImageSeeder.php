<?php

namespace Database\Seeders;

use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    private array $galleries = [
        [
            'gallery_id' => 1,
            'name' => 'pics01',
            'extension' => 'jpg',
            'original_name' => 'pics01.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'gallery_id' => 1,
            'name' => 'pics02',
            'extension' => 'jpg',
            'original_name' => 'pics02.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'gallery_id' => 1,
            'name' => 'pics03',
            'extension' => 'jpg',
            'original_name' => 'pics03.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'gallery_id' => 1,
            'name' => 'pics04',
            'extension' => 'jpg',
            'original_name' => 'pics04.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'gallery_id' => 1,
            'name' => 'pics05',
            'extension' => 'jpg',
            'original_name' => 'pics05.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'gallery_id' => 1,
            'name' => 'pics06',
            'extension' => 'jpg',
            'original_name' => 'pics06.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'schema_id' => 1,
            'name' => 'schema1',
            'extension' => 'jpg',
            'original_name' => 'schema1.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga schema'
        ],
        [
            'map_id' => 1,
            'name' => 'map',
            'extension' => 'jpg',
            'original_name' => 'map.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'map direction Vilga'
        ],

        [
            'gallery_id' => 2,
            'name' => 'pics01',
            'extension' => 'jpg',
            'original_name' => 'pics01.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'gallery_id' => 2,
            'name' => 'pics02',
            'extension' => 'jpg',
            'original_name' => 'pics02.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'gallery_id' => 2,
            'name' => 'pics03',
            'extension' => 'jpg',
            'original_name' => 'pics03.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'gallery_id' => 2,
            'name' => 'pics04',
            'extension' => 'jpg',
            'original_name' => 'pics04.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'gallery_id' => 2,
            'name' => 'pics05',
            'extension' => 'jpg',
            'original_name' => 'pics05.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'gallery_id' => 2,
            'name' => 'pics06',
            'extension' => 'jpg',
            'original_name' => 'pics06.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga pics'
        ],
        [
            'schema_id' => 2,
            'name' => 'schema1',
            'extension' => 'jpg',
            'original_name' => 'schema1.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'Vilga schema'
        ],
        [
            'map_id' => 2,
            'name' => 'map',
            'extension' => 'jpg',
            'original_name' => 'map.jpg',
            'path' => 'images/',
            'mime' => 'image/jpeg',
            'alt' => 'map direction Vilga'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->galleries as $image) {
            $image['created_at'] = Carbon::now();
            $image['updated_at'] = Carbon::now();
            DB::table('images')->insert($image);
        }
    }
}
