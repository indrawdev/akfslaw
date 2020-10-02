<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert([
            [
                'user_id' => 1,
                'slug' => 'our-services',
                'en_name' => 'Our Services',
                'id_name' => 'Layanan'
            ],
            [
                'user_id' => 1,
                'slug' => 'publication',
                'en_name' => 'Publication',
                'id_name' => 'Publikasi'
            ],
            [
                'user_id' => 1,
                'slug' => 'news',
                'en_name' => 'News',
                'id_name' => 'Berita'
            ]
        ]);
    }
}
