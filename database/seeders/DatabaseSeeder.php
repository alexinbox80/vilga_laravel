<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(LangSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(AdvantageSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(SchemaSeeder::class);
        $this->call(MapSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(FooterSeeder::class);
    }
}
