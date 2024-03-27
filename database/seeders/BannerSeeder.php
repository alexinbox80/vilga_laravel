<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    private array $banner = [
        'page_id' => 1,
        'header' => 'участки от <br> 300 тысяч рублей',
        'sub_header' => 'экологичная жизнь около чистого леса',
        'form_title' => 'У вас есть вопросы? Оставьте заявку на <br> обратный звонок и мы поможем <br> подобрать вам подходящий участок.',
        'form_name' => 'Имя',
        'form_phone' => 'Телефон',
        'form_button' => 'Оставить заявку'
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banner = $this->banner;
        $banner['created_at'] = Carbon::now();
        $banner['updated_at'] = Carbon::now();
        DB::table('banners')->insert($banner);
    }
}
