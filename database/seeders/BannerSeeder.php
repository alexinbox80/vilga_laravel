<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    private array $banners = [
        [
            'page_id' => 1,
            'header' => 'участки от <br> 300 тысяч рублей',
            'sub_header' => 'экологичная жизнь около чистого леса',
            'form_title' => 'У вас есть вопросы? Оставьте заявку на <br> обратный звонок и мы поможем <br> подобрать вам подходящий участок.',
            'form_name' => 'Имя',
            'form_phone' => 'Телефон',
            'form_button' => 'Оставить заявку'
        ],
        [
            'page_id' => 2,
            'header' => 'plots from <br> 300 thousand rubles',
            'sub_header' => 'eco-friendly life near a clean forest',
            'form_title' => 'You have questions? Leave a request for <br> a call back and we will help <br> find you a suitable site.',
            'form_name' => 'Name',
            'form_phone' => 'Phone',
            'form_button' => 'Submit your application'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->banners as $banner) {
            $banner['created_at'] = Carbon::now();
            $banner['updated_at'] = Carbon::now();
            DB::table('banners')->insert($banner);
        }
    }
}
