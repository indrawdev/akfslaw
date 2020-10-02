<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->delete();

        DB::table('partners')->insert([
            [
                'user_id' => 1,
                'slug' => 'anthonius-kanaris',
                'en_name' => 'Anthonius Kanaris',
                'en_description' => '<p>Anthonius Kanaris is the founder and Senior Partner of AKFS Law Firm. He graduated from Faculty of Law University of Tarumanagara (Sarjana Hukum) in 2011 with summa cum laude predicate and obtained his master degree (M.H.) from University of Indonesia with cum laude predicate. Prior to establishing AKFS, he has more than 7 years of experience as an Associate, Senior Associate, Senior Partner at another Law Firm and Legal Head in an insurance company. He has litigation practices in agency fraud and insurance claim. He also has experience across multiple insurance matters and provides coverage advice to Policyholders, insurers, insurance and reinsurance companies on all aspects of insurance law in Indonesia.</p><p>His areas of practice are civil and commercial dispute resolution, intellectual property litigation, banking and secured transactions and insurance industry.</p><p>He is a member of Indonesian Advocates Association (PERADI). </p>',
                'id_name' => 'Anthonius Kanaris',
                'id_description' => '<p> Anthonius Kanaris adalah pendiri dan Senior Partner AKFS Law Firm. Ia lulus dari Fakultas Hukum Universitas Tarumanagara (Sarjana Hukum) pada tahun 2011 dengan predikat summa cum laude dan memperoleh gelar Magister (M.H.) dari Universitas Indonesia dengan predikat cumlaude. Sebelum mendirikan AKFS, beliau memiliki pengalaman lebih dari 7 tahun sebagai Associate, Senior Associate, Senior Partner di Law Firm lain dan Legal Head di perusahaan asuransi. Dia memiliki praktik litigasi dalam penipuan agen dan klaim asuransi. Ia juga memiliki pengalaman dalam berbagai masalah asuransi dan memberikan saran perlindungan kepada Pemegang Polis, perusahaan asuransi, perusahaan asuransi dan reasuransi pada semua aspek hukum asuransi di Indonesia. </p> <p> Bidang praktiknya adalah penyelesaian sengketa perdata dan komersial, kekayaan intelektual litigasi, perbankan dan transaksi terjamin dan industri asuransi. </p> <p> Ia adalah anggota Perhimpunan Advokat Indonesia (PERADI). </p>',
                'photo' => 'anthonius-kanaris.jpg'
            ],
            [
                'user_id' => 1,
                'slug' => 'feisal-sirait',
                'en_name' => 'Feisal Sirait',
                'en_description' => '<p>Feisal Sirait is Managing Partner of AKFS Law Firm. He graduated from Faculty of Law University of Atma Jaya (Sarjana Hukum) and obtained his master degree (M.H.) from University of Indonesia. Prior to establishing AKFS with Mr. Anthonius Kanaris, he has experience as an Associate at Panji Prasetyo Law Firm, Partner at KEMMSS Law Firm and he also has experience in insurance industry.</p><p>His areas of practice are civil and commercial dispute resolution, criminal litigation, competition law, banking and secured transactions and insurance industry.</p><p>He is a member of Indonesian Advocates Association (PERADI).</p>',
                'id_name' => 'Feisal Sirait',
                'id_description' => '<p> Feisal Sirait adalah Managing Partner AKFS Law Firm. Ia lulus dari Fakultas Hukum Universitas Atma Jaya (Sarjana Hukum) dan memperoleh gelar master (M.H.) dari Universitas Indonesia. Sebelum mendirikan AKFS dengan Bapak Anthonius Kanaris, beliau memiliki pengalaman sebagai Associate di Panji Prasetyo Law Firm, Partner di KEMMSS Law Firm dan juga memiliki pengalaman di industri asuransi. </p> <p> Bidang praktiknya adalah perdata dan penyelesaian sengketa komersial, litigasi pidana, hukum persaingan, perbankan dan transaksi terjamin dan industri asuransi.</p><p> Ia adalah anggota Perhimpunan Advokat Indonesia (PERADI).</p>',
                'photo' => 'feisal-sirait.jpg'
            ]
        ]);
    }
}
