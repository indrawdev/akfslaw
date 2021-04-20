<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PublicationTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('publications')->delete();

		DB::table('publications')->insert([
			[
				'title' => 'OJK Circular Letter No. 9/SEOJK.05/2017',
				'slug' => Str::slug('OJK Circular Letter No. 9/SEOJK.05/2017'),
				'description' => 'on Microinsurance Products and Distribution Channel for Microinsurance Products',
				'thumbnail' => '',
				'file' => ''
			],
			[
				'title' => 'OJK Circular Letter No. 32/SEOJK.05/2016',
				'slug' => Str::slug('OJK Circular Letter No. 32/SEOJK.05/2016'),
				'description' => 'on Distribution Channel for Insurance Products in Cooperation with Banks',
				'thumbnail' => '',
				'file' => ''
			],
			[
				'title' => 'Regulation Financial Services Authority (OJK) No. 67/POJK.05/2016',
				'slug' => Str::slug('Regulation Financial Services Authority (OJK) No. 67/POJK.05/2016'),
				'description' => 'on Distribution Channel for Insurance Products in Cooperation with Banks',
				'thumbnail' => '',
				'file' => ''
			]
		]);
	}
}
